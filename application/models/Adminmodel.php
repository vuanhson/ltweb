<?php

Class Adminmodel extends CI_Model {

// Read data using username and password
    public function login($data) {

        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('Admin');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

// Read data from database to show data in admin page
    public function read_user_information($email) {

        $condition = "email =" . "'" . $email . "'";
        $this->db->select('*');
        $this->db->from('Admin');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        print_r($condition);
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_user_list_by_username($username){
        $condition="user_name LIKE "."'%".$username."%'";
        $this->db->select('*');
        $this->db->from('User');
        $this->db->where($condition);
        $query = $this->db->get();
        //print_r($condition);
        return $query->result();
    }
}
?>