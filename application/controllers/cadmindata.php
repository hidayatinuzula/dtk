<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cadmindata extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('madmindata');
    	$this->load->database();
    }
    function index(){
    	$this->load->helper('url');
        $this->load->view('vadmindata');
    }

    public function view_data(){
	    $list = $this->madmindata->get_datatables();
	    $data = array();
	    $no = $_POST['start'];
	    foreach ($list as $listt) {
	            $no++;
	            $row = array();
	            $row[] = $listt->nama;
	            $row[] = $listt->email;
	            $row[] = $listt->phone;
	            $data[] = $row;
	        }
	    $output = array(
	        "draw" => $_POST['draw'],
	        "recordsTotal" => $this->madmindata->count_all(),
	        "recordsFiltered" => $this->madmindata->count_filtered(),
	        "data" => $data,
	    );
	    echo json_encode($output);
	}
	}
?>