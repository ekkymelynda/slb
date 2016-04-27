<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tp extends CI_Controller {
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
		$data = $this->Crud->GetTp();
		$this->load->view('header')->view('read/tim_pengembang', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('TP_ID' => $id);
		$res   = $this->Crud->DeleteData('tim_pengembang', $where);
		if ($res == 1) {
			redirect('Master/Tp', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/tim_pengembang', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$TP_ID     = $_POST['TP_ID'];
		$PPI_ID    = $_POST['PPI_ID'];
		$TP_NAMA   = $_POST['TP_NAMA'];
		$TP_STATUS = $_POST['TP_STATUS'];

		$data_insert = array(
			'TP_ID'     => $TP_ID,
			'PPI_ID'    => $PPI_ID,
			'TP_NAMA'   => $TP_NAMA,
			'TP_STATUS' => $TP_STATUS,
		);

		$res = $this->Crud->InsertData('tim_pengembang', $data_insert);
		if ($res == 1) {
			redirect('Master/Tp', 'refresh');
		}
	}

	public function update_data() {
		$TP_ID     = $_POST['TP_ID'];
		$PPI_ID    = $_POST['PPI_ID'];
		$TP_NAMA   = $_POST['TP_NAMA'];
		$TP_STATUS = $_POST['TP_STATUS'];

		$data_insert = array(
			'TP_ID'     => $TP_ID,
			'PPI_ID'    => $PPI_ID,
			'TP_NAMA'   => $TP_NAMA,
			'TP_STATUS' => $TP_STATUS,
		);
		$where = array('TP_ID' => $TP_ID);
		$res   = $this->Crud->UpdateData('tim_pengembang', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Tp', 'refresh');
		}
	}

	public function view_update_data($TP_ID) {
		$temp = $this->Crud->GetTp(" where TP_ID = '$TP_ID'");
		$data = array(
			"TP_ID"     => $temp[0]['TP_ID'],
			"PPI_ID"    => $temp[0]['PPI_ID'],
			"TP_NAMA"   => $temp[0]['TP_NAMA'],
			"TP_STATUS" => $temp[0]['TP_STATUS'],

		);
		$this->load->view('header')->view('update/tim_pengembang', $data)->view('footer');
	}

	public function view_delete($TP_ID) {
		$temp = $this->Crud->GetTp(" where TP_ID = '$TP_ID'");
		$data = array(
			"TP_ID"     => $temp[0]['TP_ID'],
			"PPI_ID"    => $temp[0]['PPI_ID'],
			"TP_NAMA"   => $temp[0]['TP_NAMA'],
			"TP_STATUS" => $temp[0]['TP_STATUS'],

		);
		$this->load->view('header')->view('delete/tim_pengembang', $data)->view('footer');
	}

}
