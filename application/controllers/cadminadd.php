<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cadminadd extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('madminadd');
    }
    function index(){
        $this->load->view('vadminadd');
    }

    function add_trayek(){
    	$data = array(
                'no_angkot' => $this->input->post('no_angkot'),
                'id_jenis_trayek' => $this->input->post('id_jenis_trayek'),
                'trayek_asal' => $this->input->post('trayek_asal'),
                'trayek_tujuan' => $this->input->post('trayek_tujuan'),
                'rute' => $this->input->post('rute'),
                'tarif_dekat' => $this->input->post('tarif_dekat'),
                'tarif_jauh' => $this->input->post('tarif_jauh'),
                'id_warna_angkot' => $this->input->post('id_warna_angkot'),
            );
            $this->madminadd->insert($data);
            //$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
            redirect('cadmin');
    }

}
