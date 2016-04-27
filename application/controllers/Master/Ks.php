<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ks extends CI_Controller {
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
		$data = $this->Crud->GetKsiswa();
		$this->load->view('header')->view('read/kebutuhan_siswa', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('BS_ID' => $id);
		$res   = $this->Crud->DeleteData('kebutuhan_siswa', $where);
		if ($res == 1) {
			redirect('Master/Ks', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/kebutuhan_siswa', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$BS_ID         = $_POST['BS_ID'];
		$PPI_ID        = $_POST['PPI_ID'];
		$BS_KETERANGAN = $_POST['BS_KETERANGAN'];

		$data_insert = array(
			'BS_ID'         => $BS_ID,
			'PPI_ID'        => $PPI_ID,
			'BS_KETERANGAN' => $BS_KETERANGAN,
		);

		$res = $this->Crud->InsertData('kebutuhan_siswa', $data_insert);
		if ($res == 1) {
			redirect('Master/Ks', 'refresh');
		}
	}

	public function update_data() {
		$BS_ID         = $_POST['BS_ID'];
		$PPI_ID        = $_POST['PPI_ID'];
		$BS_KETERANGAN = $_POST['BS_KETERANGAN'];

		$data_insert = array(
			'BS_ID'         => $BS_ID,
			'PPI_ID'        => $PPI_ID,
			'BS_KETERANGAN' => $BS_KETERANGAN,
		);

		$where = array('BS_ID' => $BS_ID);
		$res   = $this->Crud->UpdateData('kebutuhan_siswa', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Ks', 'refresh');
		}
	}

	public function view_update_data($BS_ID) {
		$temp = $this->Crud->GetKsiswa(" where BS_ID = '$BS_ID'");
		$data = array(
			"BS_ID"         => $temp[0]['BS_ID'],
			"BS_KETERANGAN" => $temp[0]['BS_KETERANGAN'],
			"PPI_ID"        => $temp[0]['PPI_ID'],

		);
		$this->load->view('header')->view('update/kebutuhan_siswa', $data)->view('footer');
	}

	public function view_delete($BS_ID) {
		$temp = $this->Crud->GetKsiswa(" where BS_ID = '$BS_ID'");
		$data = array(
			"BS_ID"         => $temp[0]['BS_ID'],
			"BS_KETERANGAN" => $temp[0]['BS_KETERANGAN'],
			"PPI_ID"        => $temp[0]['PPI_ID'],

		);
		$this->load->view('header')->view('delete/kebutuhan_siswa', $data)->view('footer');
	}

}
