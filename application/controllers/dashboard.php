<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('mlogin');
		//$this->load->model('muser');
		if(!$this->session->userdata('isLogin')){
      		$this->load->view('vlogin');
    	}		
	}

	function index(){
		redirect('cadminhome', 'refresh');
	}
		
	function logout(){
        $sess_array = array(
        'isLogin'   => FALSE,//set data telah login
        'username'  => '',//set session username
        'email'     => '',
        'id_user' => '',
        );  
        $this->session->unset_userdata($sess_array);
        $this->session->sess_destroy();
        redirect('clogin','refresh');
    }
}