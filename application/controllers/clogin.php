<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clogin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('mlogin');
    }

    function index(){
        $session = $this->session->userdata('isLogin');
        if($session == FALSE){
            $this->load->view('vlogin');
        }else{
            redirect('dashboard');
        }
    }

    function do_login(){
        /*$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('vlogin');
        }
        else {*/
            $username = $this->input->post("username");
            $password = $this->input->post("password");
                $cek = $this->mlogin->cek_user($username, $password);
                if($cek){ 
                    $data_user = $this->mlogin->ambil_data_user($username);
                    foreach ($data_user as $data){
                        $nama = $data['nama'];
                        $username = $data['username'];
                        $id_user = $data['id_user'];
                        $email = $data['email'];
                    }
                    $sess_array = array(
                        'isLogin'   => TRUE, //set data telah login
                        'nama'      => $nama,
                        'username'  => $username, //set session username
                        'id_user'    => $id_user, 
                        'email'     => $email,
                    );
                    $this->session->set_userdata($sess_array);
                    redirect('dashboard','refresh'); 
                }
               else{ //jika data tidak ada yng sama dengan database
                    echo '<script>alert("Invalid username and password");</script>';
                    redirect('clogin', 'refresh');
                }
   /* }*/
}
    function do_register(){
            $data = array(
                'nama' => $this->input->post("nama"),
                'username' => $this->input->post("username"),
                'password' => md5($this->input->post("password")),
                'email' => $this->input->post("email"),
                'phone' => $this->input->post("tel"),
            );

            //insert the form data into database
            $this->mlogin->insert($data);

            //display success message
            //$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
            redirect('clogin' , 'refresh');
    }


}