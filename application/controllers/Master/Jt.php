<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jt extends CI_Controller {
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
		$data = $this->Crud->GetJt();
		$this->load->view('header')->view('read/jenis_tinggal', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('JT_ID' => $id);
		$res   = $this->Crud->DeleteData('jenis_tinggal', $where);
		if ($res == 1) {
			redirect('Master/Jt', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/jenis_tinggal', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$JT_ID           = $_POST['JT_ID'];
		$JT_JENISTINGGAL = $_POST['JT_JENISTINGGAL'];

		$data_insert = array(
			'JT_ID'           => $JT_ID,
			'JT_JENISTINGGAL' => $JT_JENISTINGGAL,

		);

		$res = $this->Crud->InsertData('jenis_tinggal', $data_insert);
		if ($res == 1) {
			redirect('Master/Jt', 'refresh');
		}
	}

	public function update_data() {
		$JT_ID           = $_POST['JT_ID'];
		$JT_JENISTINGGAL = $_POST['JT_JENISTINGGAL'];

		$data_insert = array(
			'JT_ID'           => $JT_ID,
			'JT_JENISTINGGAL' => $JT_JENISTINGGAL,
		);

		$where = array('JT_ID' => $JT_ID);
		$res   = $this->Crud->UpdateData('jenis_tinggal', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Jt', 'refresh');
		}
	}

	public function view_update_data($JT_ID) {
		$temp = $this->Crud->GetJt(" where JT_ID = '$JT_ID'");
		$data = array(
			"JT_ID"           => $temp[0]['JT_ID'],
			"JT_JENISTINGGAL" => $temp[0]['JT_JENISTINGGAL'],

		);
		$this->load->view('header')->view('update/jenis_tinggal', $data)->view('footer');
	}

	public function view_delete($JT_ID) {
		$temp = $this->Crud->GetJt(" where JT_ID = '$JT_ID'");
		$data = array(
			"JT_ID"           => $temp[0]['JT_ID'],
			"JT_JENISTINGGAL" => $temp[0]['JT_JENISTINGGAL'],

		);
		$this->load->view('header')->view('delete/jenis_tinggal', $data)->view('footer');
	}

}
