<?php
class Set_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_info()
    {
        $query = $this->db->get('system');
        return $query->row_array();
    }

    public function set_info($data,$id)
    {
        $this->db->where('id', $id);
        return $this->db->update('system', $data);

    }

    public function user_get(){
        $query = $this->db->get('admin');
        return $query->result_array();
    }

    public function user_add($data){
        $query = $this->db->get_where('admin', array('username' => $data['username']));
        $result=$query->row_array();
        if(empty($result)) {  //不存在
            $error= $this->db->insert('admin', $data);
            if($error){
                return "添加成功!";
            }else{
                return "添加失败!";
            }
        }else{
            return "此账户已经存在，不能重复添加!";
        }
    }

    public function user_edit($id,$data){
        //update
        $this -> db -> where('id', $id);
        $error = $this -> db -> update('admin', $data);
        if($error){
            return "修改成功!";
        }else{
            return "修改失败!";
        }
    }



}


