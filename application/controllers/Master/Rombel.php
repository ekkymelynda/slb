<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rombel extends CI_Controller {
	function __construct() {
		parent::__construct();
		// Your own constructor code
		$this->load->model('Crud', '', TRUE);
		$this->load->helper(array('url', 'form'));
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$data = $this->Crud->GetRombel();
		$this->load->view('header')->view('read/rombongan_belajar', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('RM_ID' => $id);
		$res   = $this->Crud->DeleteData('rombel', $where);
		if ($res == 1) {
			redirect('Master/Rombel', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/rombel', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$RM_ID      = $_POST['RM_ID'];
		$GR_ID      = $_POST['GR_ID'];
		$RM_THNAJAR = $_POST['RM_THNAJAR'];
		$RM_BC      = $_POST['RM_BC'];
		$RM_KELAS   = $_POST['RM_KELAS'];

		$data_insert = array(
			'RM_ID'      => $RM_ID,
			'GR_ID'      => $GR_ID,
			'RM_THNAJAR' => $RM_THNAJAR,
			'RM_BC'      => $RM_BC,
			'RM_KELAS'   => $RM_KELAS,
		);

		$res = $this->Crud->InsertData('rombel', $data_insert);
		if ($res == 1) {
			redirect('Master/Rombel', 'refresh');
		}
	}

	public function update_data() {
		$RM_ID      = $_POST['RM_ID'];
		$GR_ID      = $_POST['GR_ID'];
		$RM_THNAJAR = $_POST['RM_THNAJAR'];
		$RM_BC      = $_POST['RM_BC'];
		$RM_KELAS   = $_POST['RM_KELAS'];

		$data_insert = array(
			'RM_ID'      => $RM_ID,
			'GR_ID'      => $GR_ID,
			'RM_THNAJAR' => $RM_THNAJAR,
			'RM_BC'      => $RM_BC,
			'RM_KELAS'   => $RM_KELAS,
		);

		$where = array('RM_ID' => $RM_ID);
		$res   = $this->Crud->UpdateData('rombel', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Rombel', 'refresh');
		}
	}

	public function view_update_data($RM_ID) {
		$temp = $this->Crud->GetRombel(" where RM_ID = '$RM_ID'");
		$data = array(
			"RM_ID"      => $temp[0]['RM_ID'],
			"GR_ID"      => $temp[0]['GR_ID'],
			"RM_THNAJAR" => $temp[0]['RM_THNAJAR'],
			"RM_BC"      => $temp[0]['RM_BC'],
			"RM_KELAS"   => $temp[0]['RM_KELAS'],

		);
		$this->load->view('header')->view('update/rombongan_belajar', $data)->view('footer');
	}

	public function view_delete($RM_ID) {
		$temp = $this->Crud->GetRombel(" where RM_ID = '$RM_ID'");
		$data = array(
			"RM_ID"      => $temp[0]['RM_ID'],
			"GR_ID"      => $temp[0]['GR_ID'],
			"RM_THNAJAR" => $temp[0]['RM_THNAJAR'],
			"RM_BC"      => $temp[0]['RM_BC'],
			"RM_KELAS"   => $temp[0]['RM_KELAS'],

		);
		$this->load->view('header')->view('delete/rombongan_belajar', $data)->view('footer');
	}

}
