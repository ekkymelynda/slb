<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kes extends CI_Controller {
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
		$data = $this->Crud->GetKes();
		$this->load->view('header')->view('read/kekuatan_siswa', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('KS_ID' => $id);
		$res   = $this->Crud->DeleteData('kekuatan_siswa', $where);
		if ($res == 1) {
			redirect('Master/Kes', 'refresh');
		}
	}

	public function view_create_data() {
		$data['ppi'] = $this->Crud->GetPpi();
		$this->load->view('header')->view('create/kekuatan_siswa', $data)->view('footer');
	}

	public function create_data() {
		// $KS_ID         = $_POST['KS_ID'];
		$PPI_ID        = $_POST['PPI_ID'];
		$KS_KETERANGAN = $_POST['KS_KETERANGAN'];

		$data_insert = array(
			// 'KS_ID'         => $KS_ID,
			'PPI_ID'        => $PPI_ID,
			'KS_KETERANGAN' => $KS_KETERANGAN,
		);

		$res = $this->Crud->InsertData('kekuatan_siswa', $data_insert);
		if ($res == 1) {
			redirect('Master/Kes', 'refresh');
		}
	}

	public function update_data() {
		$KS_ID         = $_POST['KS_ID'];
		$PPI_ID        = $_POST['PPI_ID'];
		$KS_KETERANGAN = $_POST['KS_KETERANGAN'];

		$data_insert = array(
			'KS_ID'         => $KS_ID,
			'PPI_ID'        => $PPI_ID,
			'KS_KETERANGAN' => $KS_KETERANGAN,
		);

		$where = array('KS_ID' => $KS_ID);
		$res   = $this->Crud->UpdateData('kekuatan_siswa', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Kes', 'refresh');
		}
	}

	public function view_update_data($KS_ID) {
		$data['ppi'] = $this->Crud->GetPpi();

		$temp = $this->Crud->GetKes(" where KS_ID = '$KS_ID'");
		$data['kes'] = array(
			"KS_ID"         => $temp[0]['KS_ID'],
			"PPI_ID"        => $temp[0]['PPI_ID'],
			"KS_KETERANGAN" => $temp[0]['KS_KETERANGAN'],

		);
		$this->load->view('header')->view('update/kekuatan_siswa', $data)->view('footer');
	}

	public function view_delete($KS_ID) {
		$temp = $this->Crud->GetKes(" where KS_ID = '$KS_ID'");
		$data = array(
			"KS_ID"         => $temp[0]['KS_ID'],
			"PPI_ID"        => $temp[0]['PPI_ID'],
			"KS_KETERANGAN" => $temp[0]['KS_KETERANGAN'],

		);
		$this->load->view('header')->view('delete/kekuatan_siswa', $data)->view('footer');
	}

}
