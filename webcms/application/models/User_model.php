<?php
class User_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this -> load -> database();
    }
    function u_insert($arr) {
        $this -> db -> insert('admin', $arr);
    }
    function u_update($id, $arr) {
        $this -> db -> where('uid', $id);
        $this -> db -> update('admin', $arr);
    }
    function u_del($id) {
        $this -> db -> where('uid', $id);
        $this -> db -> delete('admin');
    }
    function u_select($name) {
        $query = $this->db->get_where('admin', array('username' => $name));
        return $query->row_array();
    }
}