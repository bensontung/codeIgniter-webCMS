<?php
class Ad_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    function get_page()
    {

        $this->db->order_by('time DESC');
        $query = $this->db->get('ad');
        return $query->result_array();
    }


    public function add_ad($data){
            $error= $this->db->insert('ad', $data);
            if($error){
                return "添加成功!";
            }else{
                return "添加失败!";
            }
    }

    public function  get_ad($id){
        $query = $this->db->get_where('ad', array('id' => $id));
        return $query->row_array();
    }

    public function edit_ad($id,$data){
        $this -> db -> where('id', $id);
        $error= $this -> db -> update('ad', $data);
        if($error){
            return "修改成功!";
        }else{
            return "修改失败!";
        }
    }


    // type
    public function get_type()
    {   //select
        $this->db->order_by('listid ASC');
        $query = $this->db->get('ad_type');
        return $query->result_array();
    }
    function add_type($data)
    {  //insert
        $query = $this->db->get_where('ad_type', array('title' => $data['title']));
        $result=$query->row_array();
        if(empty($result)) {  //不存在关联
            $error= $this->db->insert('ad_type', $data);
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
        return  $this -> db -> update('ad_type', $data);
    }
    function del_type($id)
    {   //delete
        $query = $this->db->get_where('ad', array('typeid' => $id));
        $result=$query->row_array();
        if(empty($result)) {  //不存在关联
            $this -> db -> where('id', $id);
            $result= $this -> db -> delete('ad_type');
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