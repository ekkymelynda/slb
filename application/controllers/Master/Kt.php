<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kt extends CI_Controller {
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
		$data = $this->Crud->GetKt();
		$this->load->view('header')->view('read/kelainan_tubuh', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('KT_ID' => $id);
		$res   = $this->Crud->DeleteData('kelainantubuh', $where);
		if ($res == 1) {
			redirect('Master/Kt', 'refresh');
		}
	}

	public function view_create_data() {
		$data['siswa']= $this->Crud->GetSiswa();
		$this->load->view('header')->view('create/kelainan_tubuh', $data)->view('footer');
	}

	public function create_data() {
		// $KT_ID                  = $_POST['KT_ID'];
		$SW_ID                  = $_POST['SW_ID'];
		$KT_PENYAKIT_KECELAKAAN = $_POST['KT_PENYAKIT_KECELAKAAN'];
		$KT_USIA                = $_POST['KT_USIA'];
		$KT_LAMA                = $_POST['KT_LAMA'];

		$data_insert = array(
			// 'KT_ID'                  => $KT_ID,
			'SW_ID'                  => $SW_ID,
			'KT_PENYAKIT_KECELAKAAN' => $KT_PENYAKIT_KECELAKAAN,
			'KT_USIA'                => $KT_USIA,
			'KT_LAMA'                => $KT_LAMA,
		);

		$res = $this->Crud->InsertData('kelainantubuh', $data_insert);
		if ($res == 1) {
			redirect('Master/Kt', 'refresh');
		}
	}

	public function update_data() {
		$KT_ID                  = $_POST['KT_ID'];
		$SW_ID                  = $_POST['SW_ID'];
		$KT_PENYAKIT_KECELAKAAN = $_POST['KT_PENYAKIT_KECELAKAAN'];
		$KT_USIA                = $_POST['KT_USIA'];
		$KT_LAMA                = $_POST['KT_LAMA'];

		$data_insert = array(
			'KT_ID'                  => $KT_ID,
			'SW_ID'                  => $SW_ID,
			'KT_USIA'                => $KT_USIA,
			'KT_PENYAKIT_KECELAKAAN' => $KT_PENYAKIT_KECELAKAAN,
			'KT_LAMA'                => $KT_LAMA,
		);

		$where = array('KT_ID' => $KT_ID);
		$res   = $this->Crud->UpdateData('kelainantubuh', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Kt', 'refresh');
		}
	}

	public function view_update_data($KT_ID) {

		$temp = $this->Crud->GetKt(" where KT_ID = '$KT_ID'");
		$data['siswa']= $this->Crud->GetSiswa();

		$data['kt'] = array(
			"KT_ID"                  => $temp[0]['KT_ID'],
			"SW_ID"                  => $temp[0]['SW_ID'],
			"KT_PENYAKIT_KECELAKAAN" => $temp[0]['KT_PENYAKIT_KECELAKAAN'],
			"KT_USIA"                => $temp[0]['KT_USIA'],
			"KT_LAMA"                => $temp[0]['KT_LAMA'],

		);
		$this->load->view('header')->view('update/kelainan_tubuh', $data)->view('footer');
	}

	public function view_delete($KT_ID) {
		$temp = $this->Crud->GetKt(" where KT_ID = '$KT_ID'");
		$data = array(
			"KT_ID"                  => $temp[0]['KT_ID'],
			"SW_ID"                  => $temp[0]['SW_ID'],
			"KT_PENYAKIT_KECELAKAAN" => $temp[0]['KT_PENYAKIT_KECELAKAAN'],
			"KT_USIA"                => $temp[0]['KT_USIA'],
			"KT_LAMA"                => $temp[0]['KT_LAMA'],

		);
		$this->load->view('header')->view('delete/kelainan_tubuh', $data)->view('footer');
	}

}
