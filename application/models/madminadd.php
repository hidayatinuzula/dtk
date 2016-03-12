<?php
class Madminadd extends CI_Model {
    var $table = 'ttrayek';

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insert($data){
	    $this->db->insert($this->table, $data);
        return TRUE;
    }

    function update($id,$data) {
        $this->db->set('modify_date', 'NOW()', FALSE);
        $this->db->where('ID_tdipa', $id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }
}
?>