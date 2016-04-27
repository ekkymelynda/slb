<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller {
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
		$data = $this->Crud->GetAgama();
		$this->load->view('header')->view('read/agama', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('AG_ID' => $id);
		$res   = $this->Crud->DeleteData('agama', $where);
		if ($res == 1) {
			redirect('Master/agama', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/agama')->view('footer');
	}

	public function create_data() {
		$AG_ID   = $_POST['AG_ID'];
		$AG_NAMA = $_POST['AG_NAMA'];

		$data_insert = array(
			'AG_ID'   => $AG_ID,
			'AG_NAMA' => $AG_NAMA,
		);

		$res = $this->Crud->InsertData('agama', $data_insert);
		if ($res == 1) {
			redirect('Master/agama', 'refresh');
		}
	}

	public function update_data() {
		$AG_ID   = $_POST['AG_ID'];
		$AG_NAMA = $_POST['AG_NAMA'];

		$data_insert = array(
			'AG_ID'   => $AG_ID,
			'AG_NAMA' => $AG_NAMA,
		);

		$where = array('AG_ID' => $AG_ID);
		$res   = $this->Crud->UpdateData('agama', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/agama', 'refresh');
		}
	}

	public function view_update_data($AG_ID) {
		$temp = $this->Crud->GetAgama(" where AG_ID = '$AG_ID'");
		$data = array(
			"AG_ID"   => $temp[0]['AG_ID'],
			"AG_NAMA" => $temp[0]['AG_NAMA'],
		);
		$this->load->view('header')->view('update/agama', $data)->view('footer');
	}

	public function view_delete($AG_ID) {
		$temp = $this->Crud->GetAgama(" where AG_ID = '$AG_ID'");
		$data = array(
			"AG_ID"   => $temp[0]['AG_ID'],
			"AG_NAMA" => $temp[0]['AG_NAMA'],
		);
		$this->load->view('header')->view('delete/agama', $data)->view('footer');
	}
}