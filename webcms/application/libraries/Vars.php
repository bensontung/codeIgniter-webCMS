<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vars
{
    var $CI;
    function vars(){
        $this->CI = & get_instance();
        //变量可以在这里定义，或者来自配置文件，也可以去数据库中查
        $this->CI->load->database();
        $query = $this->CI->db->get('system');
        $varSystem= $query->row_array();
        $variable = array(
            'webTitle'=>$varSystem['title'], //  '深圳市不见不散电子有限公司'
            'per_page'=>10,
            'copyRight'=>' © '.date('Y').' 深圳市不见不散电子有限公司 版权所有 　粤ICP备14010280号'
        );
        //$variable = array('copyRight'=>'问题反馈：smh-md02@hb2099.com | © 深圳市不见不散电子有限公司 版权所有 　粤ICP备14010280号');
        $this->CI->load->vars($variable);
    }
}

