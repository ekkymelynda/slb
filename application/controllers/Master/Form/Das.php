<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Das extends CI_Controller {
	function __construct() {
		parent::__construct();
		// Your own constructor code
		$this->load->model('Crud', '', TRUE);
		$this->load->helper(array('url', 'form'));
	}

	public function index(){
		$this->load->view('header')->view('form/read/data_asesmen_siswa')->view('footer');

	}
}