<?php
class Store extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_login(); //检验登录
        $this->load->model('store_model');
        $this->load->library('pagination');
        $this->config->load('pagination');
        //$this->load->helper('url');
    }

    public function index($page = 1)
    {
        $data['leftMenu'] ="store";
        $data['leftMenuTree'] ="storeList";
        $data['title'] = "内容列表";
        //form
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('chooseid[]', '选择', 'required',
            array('required' => '请%s要删除的信息!')
        );
        if ($this->form_validation->run() === FALSE)
        {
            $data['errorInfo']=validation_errors();
        }
        else
        {
            //删除所选信息
            $uids=$this->input->post('chooseid');
            $data['errorInfo'] = $this->store_model->del_store($uids);
        }

        //page
        $perPage = 15;
        $config['base_url'] = base_url('/store/');
        $config['total_rows'] = $this->db->count_all('store');
        $config['per_page'] = $perPage;
        $this->pagination->initialize($config);
        $data['pageList']=$this->pagination->create_links();
        $data['list'] = $this->store_model->get_page($perPage,($page-1)*$perPage);
        $data['typeList'] = $this->store_model->get_type();
        $data['typeSelect'] = $this->store_model->get_type_tree($data['typeList']);

        $this->load->view('templates/header',$data);
        $this->load->view('templates/leftmenu',$data);
        $this->load->view('store/index',$data);
        $this->load->view('templates/footer');

    }

    public function search($tid= NULL,$key= NULL){
        $data['errorInfo'] ="";
        $data['leftMenu'] ="store";
        $data['leftMenuTree'] ="storeList";
        $data['title'] = "内容列表";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('keyword', '关键字', 'trim' );
        $keyword =$this->input->post('keyword');
        $typeid =$this->input->post('typeid');
        if( empty($key) && !$tid ){
            if( !empty($keyword) || $typeid){
                redirect(base_url('/store/search/'.$typeid.'/'.$keyword));
            }else{
                redirect(base_url('/store/'));
            }
        }else{
            $this->form_validation->set_rules('chooseid[]', '选择', 'required',
                array('required' => '请%s要删除的信息!')
            );
            if ($this->form_validation->run() === FALSE)
            {
                $data['errorInfo']=validation_errors();
            }
            else
            {
                //删除所选信息
                $uids=$this->input->post('chooseid');
                $data['errorInfo'] = $this->store_model->del_store($uids);
            }
            $data['pageList']="";
            $key = urldecode($key);
            $data['keyword'] =  $key;
            $data['typeid'] =  $tid;
            if($tid){
                $this->db->where('typeid', $tid);
                $this->db->or_where('typeid in (select id from '.$this->db->dbprefix.'store_type where pid='.$tid.')');
            }
            if(!empty($key)){
                $this->db->like('title', $key);
            }
            $query = $this->db->get('store');
            $data['list'] = $query->result_array();
            $data['typeList'] = $this->store_model->get_type();
            $data['typeSelect'] = $this->store_model->get_type_tree($data['typeList']);
            $this->load->view('templates/header',$data);
            $this->load->view('templates/leftmenu',$data);
            $this->load->view('store/index',$data);
            $this->load->view('templates/footer');

        }

    }

    public function  create(){
        $data['leftMenu'] ="store";
        $data['leftMenuTree'] ="storeCreate";
        $data['title'] = "添加体验店";
        $data['errorInfo'] ="";
        $item = $this->store_model->get_type();
        $data['typeList'] = $this->store_model->get_type_tree($item);

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', '店名', 'trim|required',
            array('required' => '%s必须填写!')
        );
        $this->form_validation->set_rules('info', '地址', 'required',
            array('required' => '%s必须填写!')
        );

        if ($this->form_validation->run() === FALSE)
        {
            $data['errorInfo']=validation_errors();
        }else{
            $arr =array(
                'title' => $this->input->post('title'),
                'typeid' => $this->input->post('typeid'),
                'listid' => $this->input->post('listid'),
                'info' => $this->input->post('info'),
                'time' => time()
            );
            $result=$this->store_model->add_store($arr);
            $data['errorInfo']=$result;
        }
        $this->load->view('templates/header',$data);
        $this->load->view('templates/leftmenu',$data);
        $this->load->view('store/create',$data);
        $this->load->view('templates/footer');
    }


    public function edit($id= NULL){
       if($id){
           $data['leftMenu'] ="store";
           $data['leftMenuTree'] ="storeList";
           $data['title'] = "编辑内容";
           $data['errorInfo'] ="";
           $item = $this->store_model->get_type();
           $data['typeList'] = $this->store_model->get_type_tree($item);

           $this->load->helper('form');
           $this->load->library('form_validation');
           $this->form_validation->set_rules('title', '店称', 'trim|required',
               array('required' => '%s必须填写!')
           );
           $this->form_validation->set_rules('info', '地址', 'required',
               array('required' => '%s必须填写!')
           );

           if ($this->form_validation->run() === FALSE)
           {
               $data['errorInfo']=validation_errors();
           }else{
               $arr =array(
                   'title' => $this->input->post('title'),
                   'typeid' => $this->input->post('typeid'),
                   'listid' => $this->input->post('listid'),
                   'info' => $this->input->post('info')
               );
               $result=$this->store_model->edit_store($id,$arr);
               $data['errorInfo']=$result;
           }

           $data['store'] = $this->store_model->get_store($id);
           $this->load->view('templates/header',$data);
           $this->load->view('templates/leftmenu',$data);
           $this->load->view('store/edit',$data);
           $this->load->view('templates/footer');
       }else{
           redirect(base_url('/store'));
       }
    }


    public function type($opt = NULL,$id= NULL)
    { //内容分类
        $data['title'] = "内容分类";
        $data['leftMenu'] ="store";
        $data['leftMenuTree'] ="storeType";
        $item = $this->store_model->get_type();
        $data['list'] = $this->store_model->get_type_tree($item);
        $data['listf'] = $this->store_model->get_type_father();
        $this->load->helper('form');
        $this->load->library('form_validation');
        switch ($opt)
        {
            case 'edit':   //编辑
                $this->form_validation->set_rules('id', '分类ID', 'required',
                    array('required' => '%s必须!')
                );
                $this->form_validation->set_rules('title', '名称', 'required',
                    array('required' => '%s必须填写!')
                );
                $this->form_validation->set_rules('listid', '排序', 'required|numeric',
                    array(
                        'required' => '%s必须填写!',
                        'numeric' => '%s必须填写数字!'
                    )
                );
                if ($this->form_validation->run() === FALSE)
                {
                    $data['errorInfo']=validation_errors();
                }
                else
                {
                    $id =$this->input->post('id');
                    $arr =array(
                        'title' => $this->input->post('title'),
                        'pid' => $this->input->post('pid'),
                        'listid' => $this->input->post('listid')
                    );
                    $this->store_model->set_type($id,$arr);
                }
                redirect(site_url('/store/type'));
                break;
            case 'del':    //删除
                $result=$this->store_model->del_type($id);
                if($result['err']==0){
                    redirect(base_url('/store/type'));
                }else{
                    $data['errorInfo']=$result['mes'];
                    $item = $this->store_model->get_type();
                    $data['list'] = $this->store_model->get_type_tree($item);
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/leftmenu',$data);
                    $this->load->view('store/type', $data);
                    $this->load->view('templates/footer');
                }
                break;
            default:
                $this->form_validation->set_rules('title', '名称', 'required',
                    array('required' => '%s必须填写!')
                );
                $this->form_validation->set_rules('listid', '排序', 'required|numeric',
                    array(
                        'required' => '%s必须填写!',
                        'numeric' => '%s必须填写数字!'
                    )
                );

                if ($this->form_validation->run() === FALSE)
                {
                    $data['errorInfo']=validation_errors();
                }
                else
                {
                    $arr =array(
                        'title' => $this->input->post('title'),
                        'listid' => $this->input->post('listid'),
                        'pid' => $this->input->post('typeid')
                    );
                    $result=$this->store_model->add_type($arr);
                    $item = $this->store_model->get_type();
                    $data['list'] = $this->store_model->get_type_tree($item);
                    $data['listf'] = $this->store_model->get_type_father();
                    $data['errorInfo']=$result;
                }
                $this->load->view('templates/header', $data);
                $this->load->view('templates/leftmenu',$data);
                $this->load->view('store/type', $data);
                $this->load->view('templates/footer');

        }

    }




}