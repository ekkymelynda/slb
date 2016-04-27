<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {
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
		$data = $this->Crud->GetMp();
		$this->load->view('header')->view('read/mata_pelajaran', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('MAPEL_ID' => $id);
		$res   = $this->Crud->DeleteData('mata_pelajaran', $where);
		if ($res == 1) {
			redirect('Master/Mapel', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/mata_pelajaran', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$MAPEL_ID   = $_POST['MAPEL_ID'];
		$MAPEL_NAMA = $_POST['MAPEL_NAMA'];

		$data_insert = array(
			'MAPEL_ID'   => $MAPEL_ID,
			'MAPEL_NAMA' => $MAPEL_NAMA,
		);

		$res = $this->Crud->InsertData('mata_pelajaran', $data_insert);
		if ($res == 1) {
			redirect('Master/Mapel', 'refresh');
		}
	}

	public function update_data() {
		$MAPEL_ID   = $_POST['MAPEL_ID'];
		$MAPEL_NAMA = $_POST['MAPEL_NAMA'];

		$data_insert = array(
			'MAPEL_NAMA' => $MAPEL_NAMA,
			'MAPEL_ID'   => $MAPEL_ID,
		);

		$where = array('MAPEL_ID' => $MAPEL_ID);
		$res   = $this->Crud->UpdateData('mata_pelajaran', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Mapel', 'refresh');
		}
	}

	public function view_update_data($MAPEL_ID) {
		$temp = $this->Crud->GetMp(" where MAPEL_ID = '$MAPEL_ID'");
		$data = array(
			"MAPEL_NAMA" => $temp[0]['MAPEL_NAMA'],
			"MAPEL_ID"   => $temp[0]['MAPEL_ID'],

		);
		$this->load->view('header')->view('update/mata_pelajaran', $data)->view('footer');
	}

	public function view_delete($MAPEL_ID) {
		$temp = $this->Crud->GetMp(" where MAPEL_ID = '$MAPEL_ID'");
		$data = array(
			"MAPEL_NAMA" => $temp[0]['MAPEL_NAMA'],
			"MAPEL_ID"   => $temp[0]['MAPEL_ID'],

		);
		$this->load->view('header')->view('delete/mata_pelajaran', $data)->view('footer');
	}

}
