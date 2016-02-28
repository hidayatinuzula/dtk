<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mlogin extends CI_Model{
    var $tbl = 'tuser';
    function __construct(){
        parent::__construct();
        
    }

    function cek_user($username,$password){
        $this->db->where("(email = '$username' OR username = '$username')");
        $this->db->where('password', md5($password));
        $this ->db->limit(1);
        $query = $this->db->get($this->tbl);
        if($query->num_rows() == 1){
          return $query->result();
        }else{
          return false;
        }
    }

    /*function check_username($username){
        $this->db->where("(email = '$username' OR username = '$username')");
        $this ->db->limit(1);
        $query = $this->db->get($this->tbl);
        if($query->num_rows() == 1){
          return true;
        }else{
          return false;
        }
    }*/

    function ambil_data_user($username){
        $this->db->where("(email = '$username' OR username = '$username')");
        $query = $this->db->get($this->tbl);
        return $query->result_array();
    }
}