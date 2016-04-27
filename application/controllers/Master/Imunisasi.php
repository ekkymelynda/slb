<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imunisasi extends CI_Controller {
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
		$data = $this->Crud->GetImunisasi();
		$this->load->view('header')->view('read/imunisasi', array('data' => $data))->view('footer');

	}
	public function delete($id) {
		$where = array('IM_ID' => $id);
		$res   = $this->Crud->DeleteData('imunisasi', $where);
		if ($res == 1) {
			redirect('Master/Imunisasi', 'refresh');
		}
	}

	public function view_create_data() {
		$data['siswa'] = $this->Crud->GetSiswa();
		$this->load->view('header')->view('create/imunisasi', $data)->view('footer');
	}

	public function create_data() {
		// $IM_ID    = $_POST['IM_ID'];
		$SW_ID    = $_POST['SW_ID'];
		$IM_JENIS = $_POST['IM_JENIS'];
		$IM_USIA  = $_POST['IM_USIA'];

		$data_insert = array(
			// 'IM_ID'    => $IM_ID,
			'SW_ID'    => $SW_ID,
			'IM_USIA'  => $IM_USIA,
			'IM_JENIS' => $IM_JENIS,
		);

		$res = $this->Crud->InsertData('imunisasi', $data_insert);
		if ($res == 1) {
			redirect('Master/Imunisasi', 'refresh');
		}
	}

	public function update_data() {
		$IM_ID    = $_POST['IM_ID'];
		$SW_ID    = $_POST['SW_ID'];
		$IM_JENIS = $_POST['IM_JENIS'];
		$IM_USIA  = $_POST['IM_USIA'];

		$data_insert = array(
			'IM_ID'    => $IM_ID,
			'SW_ID'    => $SW_ID,
			'IM_USIA'  => $IM_USIA,
			'IM_JENIS' => $IM_JENIS,
		);

		$where = array('IM_ID' => $IM_ID);
		$res   = $this->Crud->UpdateData('imunisasi', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Imunisasi', 'refresh');
		}
	}

	public function view_update_data($IM_ID) {
		$data['siswa'] = $this->Crud->GetSiswa();

		$temp = $this->Crud->GetImunisasi(" where IM_ID = '$IM_ID'");
		$data['im'] = array(
			"IM_ID"    => $temp[0]['IM_ID'],
			"SW_ID"    => $temp[0]['SW_ID'],
			"IM_JENIS" => $temp[0]['IM_JENIS'],
			"IM_USIA"  => $temp[0]['IM_USIA'],

		);
		$this->load->view('header')->view('update/imunisasi', $data)->view('footer');
	}

	public function view_delete($IM_ID) {
		$temp = $this->Crud->GetImunisasi(" where IM_ID = '$IM_ID'");
		$data = array(
			"IM_ID"    => $temp[0]['IM_ID'],
			"SW_ID"    => $temp[0]['SW_ID'],
			"IM_JENIS" => $temp[0]['IM_JENIS'],
			"IM_USIA"  => $temp[0]['IM_USIA'],

		);
		$this->load->view('header')->view('delete/imunisasi', $data)->view('footer');
	}

}
