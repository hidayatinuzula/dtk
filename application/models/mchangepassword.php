<?php
class Mchangepassword extends CI_Model {
    var $table = 'tuser';

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function checkPassword($password, $id_user){
        $this->db->where('id_user', $id_user);
        $this->db->where('password', $password);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        } 
    }

    function update($data){
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->update($this->table, $data);
        return TRUE;

    }

    function resetPassword($id_user){
        $this->db->where('id_user', $id_user);
        $query = $this->db->get($this->table);
        return $query->result(); 
    }

}
?>