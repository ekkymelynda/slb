<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jk extends CI_Controller {
	function __construct() {
		parent::__construct();
		// Your own constructor code
		$this->load->model('Crud', '', TRUE);
		$this->load->helper(array('url', 'form'));
	}

	public function index(){
		$this->load->view('header')->view('form/read/jurnal_kelas')->view('footer');

	}
	public function view_create_data() {
		$data['rm'] = $this->Crud->GetRombel();
		$data['guru'] = $this->Crud->GetGuru();
		$this->load->view('header')->view('form/create/jurnal_kelas',$data)->view('footer');
	}
}