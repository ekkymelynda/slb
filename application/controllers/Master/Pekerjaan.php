<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends CI_Controller {
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
		$data = $this->Crud->GetPekerjaan();
		$this->load->view('header')->view('read/pekerjaan', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('PK_ID' => $id);
		$res   = $this->Crud->DeleteData('pekerjaan', $where);
		if ($res == 1) {
			redirect('Master/Pekerjaan', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/pekerjaan', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$PK_ID   = $_POST['PK_ID'];
		$PK_NAMA = $_POST['PK_NAMA'];

		$data_insert = array(
			'PK_ID'   => $PK_ID,
			'PK_NAMA' => $PK_NAMA,
		);

		$res = $this->Crud->InsertData('pekerjaan', $data_insert);
		if ($res == 1) {
			redirect('Master/Pekerjaan', 'refresh');
		}
	}

	public function update_data() {
		$PK_ID   = $_POST['PK_ID'];
		$PK_NAMA = $_POST['PK_NAMA'];

		$data_insert = array(
			'PK_ID'   => $PK_ID,
			'PK_NAMA' => $PK_NAMA,
		);

		$where = array('PK_ID' => $PK_ID);
		$res   = $this->Crud->UpdateData('pekerjaan', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Pekerjaan', 'refresh');
		}
	}

	public function view_update_data($PK_ID) {
		$temp = $this->Crud->GetPekerjaan(" where PK_ID = '$PK_ID'");
		$data = array(
			"PK_ID"   => $temp[0]['PK_ID'],
			"PK_NAMA" => $temp[0]['PK_NAMA'],
		);
		$this->load->view('header')->view('update/pekerjaan', $data)->view('footer');
	}

	public function view_delete($PK_ID) {
		$temp = $this->Crud->GetPekerjaan(" where PK_ID = '$PK_ID'");
		$data = array(
			"PK_ID"   => $temp[0]['PK_ID'],
			"PK_NAMA" => $temp[0]['PK_NAMA'],

		);
		$this->load->view('header')->view('delete/pekerjaan', $data)->view('footer');
	}

}
