<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pt extends CI_Controller {
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
		$data = $this->Crud->GetPt();
		$this->load->view('header')->view('read/personal_terlibat', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('PT_ID' => $id);
		$res   = $this->Crud->DeleteData('personal_terlibat', $where);
		if ($res == 1) {
			redirect('Master/Pt', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/personal_terlibat', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$PT_ID             = $_POST['PT_ID'];
		$PPI_ID            = $_POST['PPI_ID'];
		$PT_JENISPELAYANAN = $_POST['PT_JENISPELAYANAN'];
		$PT_FREKUENSI      = $_POST['PT_FREKUENSI'];
		$PT_LOKASI         = $_POST['PT_LOKASI'];

		$data_insert = array(
			'PT_ID'             => $PT_ID,
			'PPI_ID'            => $PPI_ID,
			'PT_JENISPELAYANAN' => $PT_JENISPELAYANAN,
			'PT_FREKUENSI'      => $PT_FREKUENSI,
			'PT_LOKASI'         => $PT_LOKASI,
		);

		$res = $this->Crud->InsertData('personal_terlibat', $data_insert);
		if ($res == 1) {
			redirect('Master/Pt', 'refresh');
		}
	}

	public function update_data() {
		$PT_ID             = $_POST['PT_ID'];
		$PPI_ID            = $_POST['PPI_ID'];
		$PT_JENISPELAYANAN = $_POST['PT_JENISPELAYANAN'];
		$PT_FREKUENSI      = $_POST['PT_FREKUENSI'];
		$PT_LOKASI         = $_POST['PT_LOKASI'];

		$data_insert = array(
			'PT_ID'             => $PT_ID,
			'PPI_ID'            => $PPI_ID,
			'PT_JENISPELAYANAN' => $PT_JENISPELAYANAN,
			'PT_FREKUENSI'      => $PT_FREKUENSI,
			'PT_LOKASI'         => $PT_LOKASI,
		);

		$where = array('PT_ID' => $PT_ID);
		$res   = $this->Crud->UpdateData('personal_terlibat', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Pt', 'refresh');
		}
	}

	public function view_update_data($PT_ID) {
		$temp = $this->Crud->GetPt(" where PT_ID = '$PT_ID'");
		$data = array(
			"PT_ID"             => $temp[0]['PT_ID'],
			"PPI_ID"            => $temp[0]['PPI_ID'],
			"PT_JENISPELAYANAN" => $temp[0]['PT_JENISPELAYANAN'],
			"PT_FREKUENSI"      => $temp[0]['PT_FREKUENSI'],
			"PT_LOKASI"         => $temp[0]['PT_LOKASI'],

		);
		$this->load->view('header')->view('update/personal_terlibat', $data)->view('footer');
	}

	public function view_delete($PT_ID) {
		$temp = $this->Crud->GetPt(" where PT_ID = '$PT_ID'");
		$data = array(
			"PT_ID"             => $temp[0]['PT_ID'],
			"PPI_ID"            => $temp[0]['PPI_ID'],
			"PT_JENISPELAYANAN" => $temp[0]['PT_JENISPELAYANAN'],
			"PT_FREKUENSI"      => $temp[0]['PT_FREKUENSI'],
			"PT_LOKASI"         => $temp[0]['PT_LOKASI'],

		);
		$this->load->view('header')->view('delete/personal_terlibat', $data)->view('footer');
	}

}
