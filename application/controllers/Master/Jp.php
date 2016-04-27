<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jp extends CI_Controller {
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
		$data = $this->Crud->GetJp();
		$this->load->view('header')->view('read/jenjang_pendidikan', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('JP_ID' => $id);
		$res   = $this->Crud->DeleteData('jenjang_pendidikan', $where);
		if ($res == 1) {
			redirect('Master/Jp', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/jenjang_pendidikan', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$JP_ID      = $_POST['JP_ID'];
		$JP_JENJANG = $_POST['JP_JENJANG'];

		$data_insert = array(
			'JP_ID'      => $JP_ID,
			'JP_JENJANG' => $JP_JENJANG,

		);

		$res = $this->Crud->InsertData('jenjang_pendidikan', $data_insert);
		if ($res == 1) {
			redirect('Master/Jp', 'refresh');
		}
	}

	public function update_data() {
		$JP_ID      = $_POST['JP_ID'];
		$JP_JENJANG = $_POST['JP_JENJANG'];

		$data_insert = array(
			'JP_ID'      => $JP_ID,
			'JP_JENJANG' => $JP_JENJANG,

		);

		$where = array('JP_ID' => $JP_ID);
		$res   = $this->Crud->UpdateData('jenjang_pendidikan', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Jp', 'refresh');
		}
	}

	public function view_update_data($JP_ID) {
		$temp = $this->Crud->GetJp(" where JP_ID = '$JP_ID'");
		$data = array(
			"JP_ID"      => $temp[0]['JP_ID'],
			"JP_JENJANG" => $temp[0]['JP_JENJANG'],

		);
		$this->load->view('header')->view('update/jenjang_pendidikan', $data)->view('footer');
	}

	public function view_delete($JP_ID) {
		$temp = $this->Crud->GetJp(" where JP_ID = '$JP_ID'");
		$data = array(
			"JP_ID"      => $temp[0]['JP_ID'],
			"JP_JENJANG" => $temp[0]['JP_JENJANG'],

		);
		$this->load->view('header')->view('delete/jenjang_pendidikan', $data)->view('footer');
	}

}
