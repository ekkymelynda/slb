<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dp extends CI_Controller {
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
		$data = $this->Crud->GetDp();
		$this->load->view('header')->view('read/detil_penempatan', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('DP_ID' => $id);
		$res   = $this->Crud->DeleteData('detil_penempatan', $where);
		if ($res == 1) {
			redirect('Master/Dp', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/detil_penempatan', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$DP_ID    = $_POST['DP_ID'];
		$PPI_ID   = $_POST['PPI_ID'];
		$DP_DETIL = $_POST['DP_DETIL'];

		$data_insert = array(
			'DP_ID'    => $DP_ID,
			'PPI_ID'   => $PPI_ID,
			'DP_DETIL' => $DP_DETIL,
		);

		$res = $this->Crud->InsertData('detil_penempatan', $data_insert);
		if ($res == 1) {
			redirect('Master/Dp', 'refresh');
		}
	}

	public function update_data() {
		$DP_ID    = $_POST['DP_ID'];
		$PPI_ID   = $_POST['PPI_ID'];
		$DP_DETIL = $_POST['DP_DETIL'];

		$data_insert = array(
			'DP_ID'    => $DP_ID,
			'PPI_ID'   => $PPI_ID,
			'DP_DETIL' => $DP_DETIL,
		);

		$where = array('DP_ID' => $DP_ID);
		$res   = $this->Crud->UpdateData('detil_penempatan', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Dp', 'refresh');
		}
	}

	public function view_update_data($DP_ID) {
		$temp = $this->Crud->GetDp(" where DP_ID = '$DP_ID'");
		$data = array(
			"DP_ID"    => $temp[0]['DP_ID'],
			"PPI_ID"   => $temp[0]['PPI_ID'],
			"DP_DETIL" => $temp[0]['DP_DETIL'],

		);
		$this->load->view('header')->view('update/detil_penempatan', $data)->view('footer');
	}

	public function view_delete($DP_ID) {
		$temp = $this->Crud->GetDp(" where DP_ID = '$DP_ID'");
		$data = array(
			"DP_ID"    => $temp[0]['DP_ID'],
			"PPI_ID"   => $temp[0]['PPI_ID'],
			"DP_DETIL" => $temp[0]['DP_DETIL'],

		);
		$this->load->view('header')->view('delete/detil_penempatan', $data)->view('footer');
	}

}
