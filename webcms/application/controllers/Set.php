<?php
class Set extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_login(); //检验登录
        $this->load->model('set_model');
        //$this->load->helper('url_helper');
    }

    public function index()
    {
        $data['leftMenu'] ="set";
        $data['leftMenuTree'] ="setSys";
        $data['title'] = "系统设置";

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', '系统名称', 'required',
            array('required' => '%s必须填写!')
        );
        $this->form_validation->set_rules('keywords', '关键字', 'required',
            array('required' => '%s必须填写!')
        );
        $this->form_validation->set_rules('description', '网站描述', 'required',
            array('required' => '%s必须填写!')
        );
        $this->form_validation->set_rules('email', '邮箱', 'valid_email',
            array('valid_email' => '请填写正确的%s!')
        );
        if ($this->form_validation->run() === FALSE)
        {
            $data['errorInfo']=validation_errors();
        }
        else
        {
            $id=$this->input->post('id');
            $arr = array(
                'title' => $this->input->post('title'),
                'keywords' => $this->input->post('keywords'),
                'description' => $this->input->post('description'),
                'copyright' => $this->input->post('copyright'),
                'email' => $this->input->post('email')
            );
            $result=$this->set_model->set_info($arr,$id);
            if($result){
                $data['errorInfo']="修改成功!";
            }else{
                $data['errorInfo']="修改失败!";
            }

        }
        $data['info'] = $this->set_model->get_info();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/leftmenu',$data);
        $this->load->view('set/index', $data);
        $this->load->view('templates/footer');

    }

    public function user($opt = NULL,$id= NULL)
    {
        $data['leftMenu'] ="set";
        $data['leftMenuTree'] ="setUser";
        $data['title'] = "账号管理";
        $data['list'] = $this->set_model->user_get();
        $this->load->helper('form');
        $this->load->library('form_validation');
        switch ($opt)
        {
            case 'edit':   //编辑
                $this->form_validation->set_rules('password', '密码', 'trim');
                $this->form_validation->set_rules('passconf', '确认密码', 'trim|matches[password]',
                    array( 'matches' => '前后密码不一致!')
                );
                if ($this->form_validation->run() === FALSE)
                {
                    $data['mes']=validation_errors();
                }
                else
                {   //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
                    $id =$this->input->post('id');
                    $password =$this->input->post('password');
                    $sta =$this->input->post('sta');
                    if($sta){
                        $sta=1;
                    }else{
                        $sta=0;
                    }
                    if(!empty($password)){
                        $arr =array(
                            'password' => password_hash($password, PASSWORD_DEFAULT),
                            'sta' => $sta
                        );
                    }else{
                        $arr =array(
                            'sta' => $sta
                        );
                    }
                    $data['mes']=$this->set_model->user_edit($id,$arr);
                }
                //redirect(base_url('/set/user'));
                $data['backurl']= base_url('/set/user');
                $this->load->view('templates/note',$data);
                break;
            case 'del':    //删除
                if($id==$_SESSION['s_id']){
                    $data['mes']="不能删除自己的帐户！";
                } else{
                    $this -> db -> where('id', $id);
                    $result= $this -> db -> delete('admin');
                    if($result){
                        $data['mes']="删除成功！";
                    }else{
                        $data['mes']="删除失败！";
                    }
                }
                $data['backurl']= base_url('/set/user');
                $this->load->view('templates/note',$data);
                break;
            default:
                $this->form_validation->set_rules('username', '用户名', 'required',
                    array('required' => '%s必须填写!')
                );
                $this->form_validation->set_rules('password', '密码', 'trim|required',
                    array('required' => '请填写%s!')
                );
                $this->form_validation->set_rules('passconf', '确认密码', 'trim|required|matches[password]',
                    array(
                        'required' => '请填写%s!',
                        'matches' => '前后密码不一致!',
                    )
                );
                if ($this->form_validation->run() === FALSE)
                {
                    $data['errorInfo']=validation_errors();
                }
                else
                {
                    $arr =array(
                        'username' => $this->input->post('username'),
                        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
                    );
                    $result=$this->set_model->user_add($arr);
                    $data['list'] = $this->set_model->user_get();
                    $data['errorInfo']=$result;
                }
                $this->load->view('templates/header', $data);
                $this->load->view('templates/leftmenu',$data);
                $this->load->view('set/user', $data);
                $this->load->view('templates/footer');

        }

    }

    public function backup($opt = NULL,$id= NULL){
        $bak_dir =  APPPATH."/logs/database/";
        $data['leftMenu'] ="set";
        $data['leftMenuTree'] ="setBackup";
        $data['title'] = "备份恢复";
        $data['list'] = array();
        switch ($opt)
        {
            case 'add':
                //生成数据库备份
                $this->load->helper('string');
                $this->load->dbutil();
                $prefs = array(
//                    'ignore'    => array($this->db->dbprefix('ci_sessions')),
                    'format'    => 'txt'
                );
                $backup = $this->dbutil->backup($prefs);
                $this->load->helper('file');
                $result=write_file($bak_dir.$this->db->database.'_'.date('Ymd').'_'.random_string('alnum', 8).'.sql', $backup);
                if($result){
                    $data['mes']="备份成功!";
                }else{
                    $data['mes']="备份失败,请联系系统管理员!";
                }
                $data['backurl']= base_url('/set/backup');
                $this->load->view('templates/note',$data);
                break;
            case 'recover':   //恢复指定数据库
                    $this->load->helper('file');
                    $this->load->helper('string');
                    $file = $bak_dir.$id;
                    //数据库信息
                    $host = $this->db->hostname;
                    $user = $this->db->username;
                    $pwd  = $this->db->password;
                    $db   = $this->db->database;
                    $string = read_file($file);
                    $mysqli = new mysqli($host,$user,$pwd,$db);
                    $mysqli->set_charset("utf8");
                    $result = $mysqli->multi_query($string);
                    $mysqli->close();
                    if($result){
                        $data['mes']="数据库恢复成功!";
                    } else{
                        $data['mes']="数据库恢复失败!";
                    }
                    $data['backurl']= base_url('/set/backup');
                    $this->load->view('templates/note',$data);
                break;
            case 'down':   //下载指定数据库
                $this->load->helper('string');
                $this->load->helper('file');
                $this->load->helper('download');
                $string = read_file($bak_dir.$id);
                $result=force_download($id, $string);
                if($result){
                    $data['mes']="下载成功!";
                    $data['backurl']= base_url('/set/backup');
                    $this->load->view('templates/note',$data);
                }else{
                    $data['mes']="下载失败!";
                    $data['backurl']= base_url('/set/backup');
                    $this->load->view('templates/note',$data);
                }

                break;
            case 'del':    //删除指定数据库
                $result=unlink($bak_dir.$id);
                if($result){
                    $data['mes']="删除成功!";
                }else{
                    $data['mes']="删除失败!";
                }
                $data['backurl']= base_url('/set/backup');
                $this->load->view('templates/note',$data);
                break;
            default:
                $this->load->helper('number');
                $this->load->helper('file');
                $data['list'] =  get_dir_file_info($bak_dir);
                $this->load->view('templates/header', $data);
                $this->load->view('templates/leftmenu',$data);
                $this->load->view('set/backup', $data);
                $this->load->view('templates/footer');

        }
    }


}