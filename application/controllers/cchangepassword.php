<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cchangepassword extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('mchangepassword');
    }
    function index(){
        $data['quser'] = $this->mchangepassword->resetPassword($this->session->userdata('id_user')); 
        $this->load->view('vchangepassword',$data);
    }

    public function checkPassword(){   
        $id_user = $this->session->userdata('id_user'); 
        $password = $this->input->post('oldpassword');
        $valid = true;
        $data = $this->mchangepassword->checkPassword(md5($password), $id_user);
            if($data == true){
                $valid = true;
            }else{
                $valid = false;
            }
            echo json_encode(array(
                'valid' => $valid,
            ));
    }

    public function do_changePassword(){
        $password = addslashes($this->input->post('newpassword'));
        $data = array(
                'password' => md5($password));
                $this->mchangepassword->update($data);
        //echo '<script>alert("reset password success");</script>';
        redirect('dashboard/logout');
    }

}