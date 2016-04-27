<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jk extends CI_Controller {
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
		$data = $this->Crud->GetJk();
		$this->load->view('header')->view('read/jurnal_kelas', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('JK_ID' => $id);
		$res   = $this->Crud->DeleteData('jurnal_kelas', $where);
		if ($res == 1) {
			redirect('Master/Jk', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/jurnal_kelas', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$JK_ID    = $_POST['JK_ID'];
		$RM_ID    = $_POST['RM_ID'];
		$GR_ID    = $_POST['GR_ID'];
		$JK_BULAN = $_POST['JK_BULAN'];
		$JK_TAHUN = $_POST['JK_TAHUN'];

		$data_insert = array(
			'JK_ID'    => $JK_ID,
			'RM_ID'    => $RM_ID,
			'GR_ID'    => $GR_ID,
			'JK_BULAN' => $JK_BULAN,
			'JK_TAHUN' => $JK_TAHUN,

		);

		$res = $this->Crud->InsertData('jurnal_kelas', $data_insert);
		if ($res == 1) {
			redirect('Master/Jk', 'refresh');
		}
	}

	public function update_data() {
		$JK_ID    = $_POST['JK_ID'];
		$RM_ID    = $_POST['RM_ID'];
		$GR_ID    = $_POST['GR_ID'];
		$JK_BULAN = $_POST['JK_BULAN'];
		$JK_TAHUN = $_POST['JK_TAHUN'];

		$data_insert = array(
			'JK_ID'    => $JK_ID,
			'RM_ID'    => $RM_ID,
			'GR_ID'    => $GR_ID,
			'JK_BULAN' => $JK_BULAN,
			'JK_TAHUN' => $JK_TAHUN,

		);
		$where = array('JK_ID' => $JK_ID);
		$res   = $this->Crud->UpdateData('jurnal_kelas', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Jk', 'refresh');
		}
	}

	public function view_update_data($JK_ID) {
		$temp = $this->Crud->GetJk(" where JK_ID = '$JK_ID'");
		$data = array(
			"JK_ID"    => $temp[0]['JK_ID'],
			"RM_ID"    => $temp[0]['RM_ID'],
			"GR_ID"    => $temp[0]['GR_ID'],
			"JK_BULAN" => $temp[0]['JK_BULAN'],
			"JK_TAHUN" => $temp[0]['JK_TAHUN'],

		);
		$this->load->view('header')->view('update/jurnal_kelas', $data)->view('footer');
	}

	public function view_delete($JK_ID) {
		$temp = $this->Crud->GetJk(" where JK_ID = '$JK_ID'");
		$data = array(
			"JK_ID"    => $temp[0]['JK_ID'],
			"RM_ID"    => $temp[0]['RM_ID'],
			"GR_ID"    => $temp[0]['GR_ID'],
			"JK_BULAN" => $temp[0]['JK_BULAN'],
			"JK_TAHUN" => $temp[0]['JK_TAHUN'],

		);
		$this->load->view('header')->view('delete/jurnal_kelas', $data)->view('footer');
	}

}
