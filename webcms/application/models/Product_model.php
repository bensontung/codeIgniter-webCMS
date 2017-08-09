<?php
class Product_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    function get_page($preNum = 0,$page=0)
    {
        if ($preNum)
        {
            $this->db->order_by('listid ASC,time DESC');
            $this->db->limit($preNum, $page);
            $query = $this->db->get('product');
            return $query->result_array();
        }
        $this->db->order_by('listid ASC, time DESC');
        $query = $this->db->get('product');
        return $query->result_array();
    }


    public function add_product($data){
        $query = $this->db->get_where('product', array('slug' => $data['slug']));
        $result=$query->row_array();
        if(empty($result)) {  //不存在
            $error= $this->db->insert('product', $data);
            if($error){
                return "添加成功!";
            }else{
                return "添加失败!";
            }
        }else{
            return "此产品地址已经存在，不能重复添加!";
        }

    }

    public function  get_product($id){
        $query = $this->db->get_where('product', array('id' => $id));
        return $query->row_array();
    }

    public function edit_product($id,$data){
        $this->db->where('id <>', $id);
        $this->db->where('slug', $data['slug']);
        //$this->db->from('product');
        $query = $this->db->get('product');
        $result=$query->row_array();
        if(empty($result)) {  //不存在
            $this -> db -> where('id', $id);
            $error= $this -> db -> update('product', $data);
            if($error){
                return "修改成功!";
            }else{
                return "修改失败!";
            }
        }else{
            return "此产品地址已经存在，不能重复!";
        }
    }


    // type
    public function get_type()
    {   //select
        $this->db->order_by('listid ASC');
        $query = $this->db->get('product_type');
        return $query->result_array();
    }
    function add_type($data)
    {  //insert
        $query = $this->db->get_where('product_type', array('title' => $data['title']));
        $result=$query->row_array();
        if(empty($result)) {  //不存在关联
            $error= $this->db->insert('product_type', $data);
            if($error){
                return "添加成功!";
            }else{
                return "添加失败!";
            }
        }else{
            return "此号已经存在，不能重复添加!";
        }

    }
    public function set_type($id,$data)
    {  //update
        $this -> db -> where('id', $id);
        return  $this -> db -> update('product_type', $data);
    }
    function del_type($id)
    {   //delete
        $query = $this->db->get_where('product', array('typeid' => $id));
        $result=$query->row_array();
        if(empty($result)) {  //不存在关联
            $this -> db -> where('id', $id);
            $result= $this -> db -> delete('product_type');
            if($result) {
                $arr=array(
                    "err" =>0 ,
                    "mes" =>"删除成功"
                );
            } else{
                $arr=array(
                    "err" =>1 ,
                    "mes" =>"删除失败"
                );
            }
        }else{
            $arr=array(
                "err" =>2 ,
                "mes" =>"此分类已被引用,不能删除"
            );
        }
        return $arr;
    }


}