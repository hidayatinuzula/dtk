<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cadminadd extends CI_Controller{
    function __construct(){
        parent::__construct();
        //$this->load->helper(array('form'));
        //$this->load->model('madmin');
    }
    function index(){
        $this->load->view('vadminadd');
    }

}
