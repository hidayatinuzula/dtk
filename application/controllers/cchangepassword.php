<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cchangepassword extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        //$this->load->helper(array('form'));
        //$this->load->model('muser');
    }
    function index()
    {
        $this->load->view('vchangepassword');
    }

}
