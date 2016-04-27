<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jps extends CI_Controller {
	function __construct() {
		parent::__construct();
		// Your own constructor code
		$this->load->model('Crud', '', TRUE);
		$this->load->helper(array('url', 'form'));
	}

	public function index(){
		$this->load->view('header')->view('form/read/jurnal_pribadi_siswa')->view('footer');

	}
	public function view_create_data() {
		$data['siswa'] = $this->Crud->GetSiswa_Jps();
		var_dump("ASD");
		$data['rombel'] = $this->Crud->GetRombel();
		$this->load->view('header')->view('form/create/jurnal_pribadi_siswa',$data)->view('footer');
	}

	
}