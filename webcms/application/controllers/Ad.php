<?php
class Ad extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_login(); //检验登录
        $this->load->model('ad_model');
        $this->load->library('pagination');
        $this->config->load('pagination');
        //$this->load->helper('url');
    }

    public function index($page = 1)
    {
        $data['leftMenu'] ="ad";
        $data['leftMenuTree'] ="adList";
        $data['title'] = "广告列表";
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
            //删除所选广告
            $uids=$this->input->post('chooseid');
            $this -> db -> where_in('id', $uids);
            $result= $this -> db -> delete('ad');
            if($result) {
                $data['errorInfo']="删除成功!";
            }else{
                $data['errorInfo']="删除失败!";
            }
        }



        $data['list'] = $this->ad_model->get_page();
        $data['typeList'] = $this->ad_model->get_type();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/leftmenu',$data);
        $this->load->view('ad/index',$data);
        $this->load->view('templates/footer');

    }

    public function  create(){
        $data['leftMenu'] ="ad";
        $data['leftMenuTree'] ="adCreate";
        $data['title'] = "添加广告";
        $data['errorInfo'] ="";

        $data['typeList'] = $this->ad_model->get_type();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', '广告名称', 'required',
            array('required' => '%s必须填写!')
        );
        $this->form_validation->set_rules('slug', '网址', 'required',
            array('required' => '%s必须填写!')
        );
        if ($this->form_validation->run() === FALSE)
        {
            $data['errorInfo']=validation_errors();
        }else{
            $arr =array(
                'title' => $this->input->post('title'),
                'subtitle' => $this->input->post('subtitle'),
                'typeid' => $this->input->post('typeid'),
                'listid' => $this->input->post('listid'),
                'img' => $this->input->post('proImg'),
                'mobimg' => $this->input->post('mobImg'),
                'slug' => $this->input->post('slug'),
                'time' => time()
            );
            $result=$this->ad_model->add_ad($arr);
            $data['errorInfo']=$result;
        }
        $this->load->view('templates/header',$data);
        $this->load->view('templates/leftmenu',$data);
        $this->load->view('ad/create',$data);
        $this->load->view('templates/footer');
    }


    public function edit($id= NULL){
       if($id){
           $data['leftMenu'] ="ad";
           $data['leftMenuTree'] ="adList";
           $data['title'] = "编辑广告";
           $data['errorInfo'] ="";
           $data['typeList'] = $this->ad_model->get_type();

           $this->load->helper('form');
           $this->load->library('form_validation');
           $this->form_validation->set_rules('title', '广告名称', 'required',
               array('required' => '%s必须填写!')
           );
           $this->form_validation->set_rules('slug', '网址', 'required',
               array('required' => '%s必须填写!')
           );
           if ($this->form_validation->run() === FALSE)
           {
               $data['errorInfo']=validation_errors();
           }else{
               $arr =array(
                   'title' => $this->input->post('title'),
                   'subtitle' => $this->input->post('subtitle'),
                   'typeid' => $this->input->post('typeid'),
                   'listid' => $this->input->post('listid'),
                   'img' => $this->input->post('proImg'),
                   'mobimg' => $this->input->post('mobImg'),
                   'slug' => $this->input->post('slug')
               );
               $result=$this->ad_model->edit_ad($id,$arr);
               $data['errorInfo']=$result;
           }

           $data['ad'] = $this->ad_model->get_ad($id);
           $this->load->view('templates/header',$data);
           $this->load->view('templates/leftmenu',$data);
           $this->load->view('ad/edit',$data);
           $this->load->view('templates/footer');
       }else{
           redirect(base_url('/ad'));
       }
    }


    public function type($opt = NULL,$id= NULL)
    { //广告分类
        $data['title'] = "广告分类";
        $data['leftMenu'] ="ad";
        $data['leftMenuTree'] ="adType";
        $data['list'] = $this->ad_model->get_type();
        $this->load->helper('form');
        $this->load->library('form_validation');
        switch ($opt)
        {
            case 'edit':   //编辑
                $id =$this->input->post('id');
                $arr =array(
                    'title' => $this->input->post('title'),
                    'listid' => $this->input->post('listid')
                );
                $this->ad_model->set_type($id,$arr);
                redirect(site_url('/ad/type'));
                break;
            case 'del':    //删除
                $result=$this->ad_model->del_type($id);
                if($result['err']==0){
                    redirect(base_url('/ad/type'));
                }else{
                    $data['errorInfo']=$result['mes'];
                    $data['list'] = $this->ad_model->get_type();
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/leftmenu',$data);
                    $this->load->view('ad/type', $data);
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
                        'listid' => $this->input->post('listid')
                    );
                    $result=$this->ad_model->add_type($arr);
                    $data['list'] = $this->ad_model->get_type();
                    $data['errorInfo']=$result;
                }

                $this->load->view('templates/header', $data);
                $this->load->view('templates/leftmenu',$data);
                $this->load->view('ad/type', $data);
                $this->load->view('templates/footer');

        }

    }




}