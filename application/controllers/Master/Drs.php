<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drs extends CI_Controller {
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
		$data = $this->Crud->GetDrs();
		$this->load->view('header')->view('read/detil_rombongan_belajar_siswa', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('RM_ID' => $id);
		$res   = $this->Crud->DeleteData('detil_rombel_siswa', $where);
		if ($res == 1) {
			redirect('Master/Drs', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/detil_rombel_siswa')->view('footer');
	}

	public function create_data() {
		$RM_ID = $_POST['RM_ID'];
		$SW_ID = $_POST['SW_ID'];

		$data_insert = array(
			'RM_ID' => $RM_ID,
			'SW_ID' => $SW_ID,
		);

		$res = $this->Crud->InsertData('detil_rombel_siswa', $data_insert);
		if ($res == 1) {
			redirect('Master/Drs', 'refresh');
		}
	}

	public function update_data() {
		$RM_ID = $_POST['RM_ID'];
		$SW_ID = $_POST['SW_ID'];

		$data_insert = array(
			'SW_ID' => $SW_ID,
			'SW_ID' => $SW_ID,
		);

		$where = array('RM_ID' => $RM_ID);
		$res   = $this->Crud->UpdateData('detil_rombel_siswa', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Drs', 'refresh');
		}
	}

	public function view_update_data($RM_ID) {
		$temp = $this->Crud->GetDrs(" where RM_ID = '$RM_ID'");
		$data = array(
			"RM_ID" => $temp[0]['RM_ID'],
			"SW_ID" => $temp[0]['SW_ID'],

		);
		$this->load->view('header')->view('update/detil_rombongan_belajar_siswa', $data)->view('footer');
	}

	public function view_delete($RM_ID) {
		$temp = $this->Crud->GetDrs(" where $RM_ID = '$RM_ID'");
		$data = array(
			"RM_ID" => $temp[0]['RM_ID'],
			"SW_ID" => $temp[0]['SW_ID'],

		);
		$this->load->view('header')->view('delete/detil_rombel_siswa', $data)->view('footer');
	}

}
