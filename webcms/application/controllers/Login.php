<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {   $data['errorTips'] ="";
        $data['title'] = "系统登录";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('loginName', '账号', 'trim|required',
            array('required' => '%s必须填写!')
        );
        $this->form_validation->set_rules('loginPass', '密码', 'trim|required',
            array('required' => '%s必须填写!')
        );

        if ($this->form_validation->run() === FALSE)
        {

            $data['errorTips']=validation_errors();
            $this->load->view('login/index', $data);
        }
        else
        {
            $arr =array(
                'loginName' => $this->input->post('loginName'),
                'loginPass' => $this->input->post('loginPass')
            );

            $user = $this -> user_model -> u_select($arr['loginName']);
            // var_dump($user);
            if ($user) {
                if ( password_verify($arr['loginPass'], $user['password'] )) {
                    //echo '成功登录!';
                    $this -> load -> library('session');
                    $arrSession = array(
                        's_id' => $user['id'] ,
                        's_name' =>   $user['username'] ,
                        'KCFINDER' =>array(
                            'disabled' => false
                        )
                    );
                    $this -> session -> set_userdata($arrSession);

                    //更新登录信息
                    $arr =array(
                        'oltime' => time(),
                        'lastip' => getIp()
                    );
                    $this -> db -> where('username', $user['username']);
                    $this -> db -> update('admin', $arr);

                    redirect(site_url('/product'));
                } else {
                    $data['errorTips'] ="用户名或密码错误!";
                    $data['title'] = "系统登录";
                    $this->load->view('login/index',$data);
                }
            } else {
                $data['errorTips'] ="用户名不存在!";
                $data['title'] = "系统登录";
                $this->load->view('login/index',$data);
            }

        }

    }

    function logout() {
        // 删除session
        session_destroy();
        redirect(site_url('/login'));
    }


}
