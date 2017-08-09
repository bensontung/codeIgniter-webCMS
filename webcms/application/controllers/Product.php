<?php
class Product extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_login(); //检验登录
        $this->load->model('product_model');
        $this->load->library('pagination');
        $this->config->load('pagination');
        //$this->load->helper('url');
    }

    public function index($page = 1)
    {
        //$data['errorInfo'] ="";
        $data['leftMenu'] ="product";
        $data['leftMenuTree'] ="productList";
        $data['title'] = "产品列表";
        //$data['list'] = array();
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
            //删除所选产品
            $uids=$this->input->post('chooseid');
            $this -> db -> where_in('id', $uids);
            $result= $this -> db -> delete('product');
            if($result) {
                $data['errorInfo']="删除成功!";
            }else{
                $data['errorInfo']="删除失败!";
            }
        }

        //page
        $perPage = 15;
        $config['base_url'] = base_url('/product/');
        $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = $perPage;
        $this->pagination->initialize($config);
        $data['pageList']=$this->pagination->create_links();
        $data['list'] = $this->product_model->get_page($perPage,($page-1)*$perPage);
        $data['typeList'] = $this->product_model->get_type();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/leftmenu',$data);
        $this->load->view('product/index',$data);
        $this->load->view('templates/footer');

    }

    public function  create(){
        $data['leftMenu'] ="product";
        $data['leftMenuTree'] ="productCreate";
        $data['title'] = "添加产品";
        $data['errorInfo'] ="";

        $data['typeList'] = $this->product_model->get_type();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', '产品名称', 'required',
            array('required' => '%s必须填写!')
        );
        $this->form_validation->set_rules('info', '详细内容', 'required',
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
                'info' => $this->input->post('info'),
                'tech' => $this->input->post('tech'),
                'show' => $this->input->post('show'),
                'slug' => $this->input->post('slug'),
                'faq' => $this->input->post('faq'),
                'mpage' => $this->input->post('mpage'),
                'urlApp' => $this->input->post('urlApp'),
                'urlBbs' => $this->input->post('urlBbs'),
                'urlPlay' => $this->input->post('urlPlay'),
                'urlBuy' => $this->input->post('urlBuy'),
                'time' => time()
            );
            $result=$this->product_model->add_product($arr);
            $data['errorInfo']=$result;
        }
        $this->load->view('templates/header',$data);
        $this->load->view('templates/leftmenu',$data);
        $this->load->view('product/create',$data);
        $this->load->view('templates/footer');
    }


    public function edit($id= NULL){
       if($id){
           $data['leftMenu'] ="product";
           $data['leftMenuTree'] ="productList";
           $data['title'] = "编辑产品";
           $data['errorInfo'] ="";
           $data['typeList'] = $this->product_model->get_type();

           $this->load->helper('form');
           $this->load->library('form_validation');
           $this->form_validation->set_rules('title', '产品名称', 'required',
               array('required' => '%s必须填写!')
           );
           $this->form_validation->set_rules('info', '详细内容', 'required',
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
                   'info' => $this->input->post('info'),
                   'tech' => $this->input->post('tech'),
                   'show' => $this->input->post('show'),
                   'slug' => $this->input->post('slug'),
                   'faq' => $this->input->post('faq'),
                   'mpage' => $this->input->post('mpage'),
                   'urlApp' => $this->input->post('urlApp'),
                   'urlBbs' => $this->input->post('urlBbs'),
                   'urlPlay' => $this->input->post('urlPlay'),
                   'urlBuy' => $this->input->post('urlBuy')
               );
               $result=$this->product_model->edit_product($id,$arr);
               $data['errorInfo']=$result;
           }

           $data['product'] = $this->product_model->get_product($id);
           $this->load->view('templates/header',$data);
           $this->load->view('templates/leftmenu',$data);
           $this->load->view('product/edit',$data);
           $this->load->view('templates/footer');
       }else{
           redirect(base_url('/product'));
       }
    }


    public function type($opt = NULL,$id= NULL)
    { //产品分类
        $data['title'] = "产品分类";
        $data['leftMenu'] ="product";
        $data['leftMenuTree'] ="productType";
        $data['list'] = $this->product_model->get_type();
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
                $this->product_model->set_type($id,$arr);
                redirect(site_url('/product/type'));
                break;
            case 'del':    //删除
                $result=$this->product_model->del_type($id);
                if($result['err']==0){
                    redirect(base_url('/product/type'));
                }else{
                    $data['errorInfo']=$result['mes'];
                    $data['list'] = $this->product_model->get_type();
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/leftmenu',$data);
                    $this->load->view('product/type', $data);
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
                    $result=$this->product_model->add_type($arr);
                    $data['list'] = $this->product_model->get_type();
                    $data['errorInfo']=$result;
                }

                $this->load->view('templates/header', $data);
                $this->load->view('templates/leftmenu',$data);
                $this->load->view('product/type', $data);
                $this->load->view('templates/footer');

        }

    }




}