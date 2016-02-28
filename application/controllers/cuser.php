<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cuser extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        //$this->load->helper(array('form'));
        //$this->load->model('trute');
    }
    function index()
    {
        $this->load->view('vuser');
    }

}
