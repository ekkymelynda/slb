<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uk extends CI_Controller {
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
		$data = $this->Crud->GetUk();
		$this->load->view('header')->view('read/uraian_kegiatan', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('UK_ID' => $id);
		$res   = $this->Crud->DeleteData('uraian_kegiatan', $where);
		if ($res == 1) {
			redirect('Master/Uk', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/uraian_kegiatan', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$UK_ID           = $_POST['UK_ID'];
		$PLK_ID          = $_POST['PLK_ID'];
		$UK_TUJUANPEMB   = $_POST['UK_TUJUANPEMB'];
		$UK_STRATEGIPEMB = $_POST['UK_STRATEGIPEMB'];
		$UK_TEKNIK       = $_POST['UK_TEKNIK'];

		$data_insert = array(
			'UK_ID'           => $UK_ID,
			'PLK_ID'          => $PLK_ID,
			'UK_TUJUANPEMB'   => $UK_TUJUANPEMB,
			'UK_STRATEGIPEMB' => $UK_STRATEGIPEMB,
			'UK_TEKNIK'       => $UK_TEKNIK,
		);

		$res = $this->Crud->InsertData('uraian_kegiatan', $data_insert);
		if ($res == 1) {
			redirect('Master/Uk', 'refresh');
		}
	}

	public function update_data() {
		$UK_ID           = $_POST['UK_ID'];
		$PLK_ID          = $_POST['PLK_ID'];
		$UK_TUJUANPEMB   = $_POST['UK_TUJUANPEMB'];
		$UK_STRATEGIPEMB = $_POST['UK_STRATEGIPEMB'];
		$UK_TEKNIK       = $_POST['UK_TEKNIK'];

		$data_insert = array(
			'UK_ID'           => $UK_ID,
			'PLK_ID'          => $PLK_ID,
			'UK_TUJUANPEMB'   => $UK_TUJUANPEMB,
			'UK_STRATEGIPEMB' => $UK_STRATEGIPEMB,
			'UK_TEKNIK'       => $UK_TEKNIK,
		);

		$where = array('UK_ID' => $UK_ID);
		$res   = $this->Crud->UpdateData('uraian_kegiatan', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Uk', 'refresh');
		}
	}

	public function view_update_data($UK_ID) {
		$temp = $this->Crud->GetUk(" where UK_ID = '$UK_ID'");
		$data = array(
			"UK_ID"           => $temp[0]['UK_ID'],
			"PLK_ID"          => $temp[0]['PLK_ID'],
			"UK_TUJUANPEMB"   => $temp[0]['UK_TUJUANPEMB'],
			"UK_STRATEGIPEMB" => $temp[0]['UK_STRATEGIPEMB'],
			"UK_TEKNIK"       => $temp[0]['UK_TEKNIK'],
		);
		$this->load->view('header')->view('update/uraian_kegiatan', $data)->view('footer');
	}

	public function view_delete($UK_ID) {
		$temp = $this->Crud->GetUk(" where UK_ID = '$UK_ID'");
		$data = array(
			"UK_ID"           => $temp[0]['UK_ID'],
			"PLK_ID"          => $temp[0]['PLK_ID'],
			"UK_TUJUANPEMB"   => $temp[0]['UK_TUJUANPEMB'],
			"UK_STRATEGIPEMB" => $temp[0]['UK_STRATEGIPEMB'],
			"UK_TEKNIK"       => $temp[0]['UK_TEKNIK'],

		);
		$this->load->view('header')->view('delete/uraian_kegiatan', $data)->view('footer');
	}

}
