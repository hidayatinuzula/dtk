<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cadmin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('madmin');
    	$this->load->database();
    }
    function index(){
    	$this->load->helper('url');
        $this->load->view('vadminview');
    }

    public function view_data(){
	    $list = $this->madmin->get_datatables();
	    $data = array();
	    $no = $_POST['start'];
	    foreach ($list as $listt) {
	            $no++;
	            $row = array();
	            $row[] = $listt->no_angkot;
	            $row[] = $listt->trayek_asal." - ".$listt->trayek_tujuan;
	            $row[] = $listt->rute;
	            $row[] = $listt->warna_angkot;
	            $row[] = $listt->tarif_dekat." - ".$listt->tarif_jauh;
	            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_trayek('."'".$listt->id_angkot."'".')"><i class="glyphicon glyphicon-edit"></i></a>
	                  	 <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_trayek('."'".$listt->id_angkot."'".')"><i class="glyphicon glyphicon-trash"></i></a>';
	            $data[] = $row;
	        }
	    $output = array(
	        "draw" => $_POST['draw'],
	        "recordsTotal" => $this->madmin->count_all(),
	        "recordsFiltered" => $this->madmin->count_filtered(),
	        "data" => $data,
	    );
	    echo json_encode($output);
	}

	public function edit($id_angkot){
	        $data = $this->madmin->get_by_id($id_angkot);
	        echo json_encode($data);
	    }
	 
	public function update(){
	        $data = array(
	            'id_angkot' => $this->input->post('txt_id_angkot'),
			    'no_angkot' => $this->input->post('txt_no_angkot'),
			    'id_jenis_trayek' => $this->input->post('txt_id_jenis_trayek'),
			    'trayek_asal' => $this->input->post('txt_trayek_asal'),
			    'trayek_tujuan' => $this->input->post('txt_trayek_tujuan'),
		 		'rute' => $this->input->post('txt_rute'),
		 		'id_warna_angkot' => $this->input->post('txt_id_warna_angkot'),
			    'tarif_dekat' => $this->input->post('txt_tarif_dekat'),
			    'tarif_jauh' => $this->input->post('txt_tarif_jauh')
	            );
	        $this->madmin->update(array('id_angkot' => $this->input->post('txt_id_angkot')), $data);
	        echo json_encode(array("status" => TRUE));
	    }
	 
	    public function delete($id_angkot){
	        $this->madmin->delete($id_angkot);
	        echo json_encode(array("status" => TRUE));
	    }
	}
?>