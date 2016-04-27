<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppi extends CI_Controller {
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
		$data = $this->Crud->GetPpi();
		$this->load->view('header')->view('read/ppi', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('PPI_ID' => $id);
		$res   = $this->Crud->DeleteData('ppi', $where);
		if ($res == 1) {
			redirect('Master/Ppi', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/ppi', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$PPI_ID                 = $_POST['PPI_ID'];
		$SW_ID                  = $_POST['SW_ID'];
		$PPI_SEMESTER           = $_POST['PPI_SEMESTER'];
		$PPI_THNAJAR            = $_POST['PPI_THNAJAR'];
		$PPI_KEKHUSUSANUTAMA    = $_POST['PPI_KEKHUSUSANUTAMA'];
		$PPI_KEKHUSUSANSEKUNDER = $_POST['PPI_KEKHUSUSANSEKUNDER'];
		$PPI_STDKURIKULUM       = $_POST['PPI_STDKURIKULUM'];

		$data_insert = array(
			'PPI_ID'                 => $PPI_ID,
			'SW_ID'                  => $SW_ID,
			'PPI_SEMESTER'           => $PPI_SEMESTER,
			'PPI_THNAJAR'            => $PPI_THNAJAR,
			'PPI_KEKHUSUSANUTAMA'    => $PPI_KEKHUSUSANUTAMA,
			'PPI_KEKHUSUSANSEKUNDER' => $PPI_KEKHUSUSANSEKUNDER,
			'PPI_STDKURIKULUM'       => $PPI_STDKURIKULUM,
		);

		$res = $this->Crud->InsertData('ppi', $data_insert);
		if ($res == 1) {
			redirect('Master/Ppi', 'refresh');
		}
	}

	public function update_data() {
		$PPI_ID                 = $_POST['PPI_ID'];
		$SW_ID                  = $_POST['SW_ID'];
		$PPI_SEMESTER           = $_POST['PPI_SEMESTER'];
		$PPI_THNAJAR            = $_POST['PPI_THNAJAR'];
		$PPI_KEKHUSUSANUTAMA    = $_POST['PPI_KEKHUSUSANUTAMA'];
		$PPI_KEKHUSUSANSEKUNDER = $_POST['PPI_KEKHUSUSANSEKUNDER'];
		$PPI_STDKURIKULUM       = $_POST['PPI_STDKURIKULUM'];

		$data_insert = array(
			'PPI_ID'                 => $PPI_ID,
			'SW_ID'                  => $SW_ID,
			'PPI_SEMESTER'           => $PPI_SEMESTER,
			'PPI_THNAJAR'            => $PPI_THNAJAR,
			'PPI_KEKHUSUSANUTAMA'    => $PPI_KEKHUSUSANUTAMA,
			'PPI_KEKHUSUSANSEKUNDER' => $PPI_KEKHUSUSANSEKUNDER,
			'PPI_STDKURIKULUM'       => $PPI_STDKURIKULUM,
		);

		$where = array('PPI_ID' => $PPI_ID);
		$res   = $this->Crud->UpdateData('ppi', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Ppi', 'refresh');
		}
	}

	public function view_update_data($PPI_ID) {
		$temp = $this->Crud->GetPpi(" where PPI_ID = '$PPI_ID'");
		$data = array(
			"PPI_ID"                 => $temp[0]['PPI_ID'],
			"SW_ID"                  => $temp[0]['SW_ID'],
			"PPI_SEMESTER"           => $temp[0]['PPI_SEMESTER'],
			"PPI_THNAJAR"            => $temp[0]['PPI_THNAJAR'],
			"PPI_KEKHUSUSANUTAMA"    => $temp[0]['PPI_KEKHUSUSANUTAMA'],
			"PPI_KEKHUSUSANSEKUNDER" => $temp[0]['PPI_KEKHUSUSANSEKUNDER'],
			"PPI_STDKURIKULUM"       => $temp[0]['PPI_STDKURIKULUM'],

		);
		$this->load->view('header')->view('update/ppi', $data)->view('footer');
	}

	public function view_delete($PPI_ID) {
		$temp = $this->Crud->GetPpi(" where PPI_ID = '$PPI_ID'");
		$data = array(
			"PPI_ID"                 => $temp[0]['PPI_ID'],
			"SW_ID"                  => $temp[0]['SW_ID'],
			"PPI_SEMESTER"           => $temp[0]['PPI_SEMESTER'],
			"PPI_THNAJAR"            => $temp[0]['PPI_THNAJAR'],
			"PPI_KEKHUSUSANUTAMA"    => $temp[0]['PPI_KEKHUSUSANUTAMA'],
			"PPI_KEKHUSUSANSEKUNDER" => $temp[0]['PPI_KEKHUSUSANSEKUNDER'],
			"PPI_STDKURIKULUM"       => $temp[0]['PPI_STDKURIKULUM'],

		);
		$this->load->view('header')->view('delete/ppi', $data)->view('footer');
	}

	public function view_detail($PPI_ID) {
		$temp = $this->Crud->GetPpi("where PPI_ID = '$PPI_ID'");
		$data = array(
			'PPI_ID'                 => $temp[0]['PPI_ID'],
			"SW_ID"                  => $temp[0]['SW_ID'],
			"PPI_SEMESTER"           => $temp[0]['PPI_SEMESTER'],
			"PPI_THNAJAR"            => $temp[0]['PPI_THNAJAR'],
			"PPI_KEKHUSUSANUTAMA"    => $temp[0]['PPI_KEKHUSUSANUTAMA'],
			"PPI_KEKHUSUSANSEKUNDER" => $temp[0]['PPI_KEKHUSUSANSEKUNDER'],
			"PPI_STDKURIKULUM"       => $temp[0]['PPI_STDKURIKULUM'],
		);
		$this->load->view('header')->view('Detail/ppi', $data)->view('footer');
	}

}
