<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Da extends CI_Controller {
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
		$data = $this->Crud->GetDa();
		$this->load->view('header')->view('read/asesmen', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('ASM_ID' => $id);
		$res   = $this->Crud->DeleteData('data_asesmen', $where);
		if ($res == 1) {
			redirect('Master/Da', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/data_asesmen', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$ASM_ID         = $_POST['ASM_ID'];
		$PPI_ID         = $_POST['PPI_ID'];
		$ASM_SUMBERINFO = $_POST['ASM_SUMBERINFO'];
		$ASM_TGL        = $_POST['ASM_TGL'];

		$data_insert = array(
			'ASM_ID'         => $ASM_ID,
			'PPI_ID'         => $PPI_ID,
			'ASM_SUMBERINFO' => $ASM_SUMBERINFO,
			'ASM_TGL'        => $ASM_TGL,
		);

		$res = $this->Crud->InsertData('data_asesmen', $data_insert);
		if ($res == 1) {
			redirect('Master/Da', 'refresh');
		}
	}

	public function update_data() {
		$ASM_ID         = $_POST['ASM_ID'];
		$PPI_ID         = $_POST['PPI_ID'];
		$ASM_SUMBERINFO = $_POST['ASM_SUMBERINFO'];
		$ASM_TGL        = $_POST['ASM_TGL'];

		$data_insert = array(
			'ASM_ID'         => $ASM_ID,
			'PPI_ID'         => $PPI_ID,
			'ASM_SUMBERINFO' => $ASM_SUMBERINFO,
			'ASM_TGL'        => $ASM_TGL,
		);

		$where = array('ASM_ID' => $ASM_ID);
		$res   = $this->Crud->UpdateData('data_asesmen', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Da', 'refresh');
		}
	}

	public function view_update_data($ASM_ID) {
		$temp = $this->Crud->GetDa(" where ASM_ID = '$ASM_ID'");
		$data = array(
			"ASM_ID"         => $temp[0]['ASM_ID'],
			"PPI_ID"         => $temp[0]['PPI_ID'],
			"ASM_SUMBERINFO" => $temp[0]['ASM_SUMBERINFO'],
			"ASM_TGL"        => $temp[0]['ASM_TGL'],
		);
		$this->load->view('header')->view('update/data_asesmen', $data)->view('footer');
	}

	public function view_delete($ASM_ID) {
		$temp = $this->Crud->GetDa(" where ASM_ID = '$ASM_ID'");
		$data = array(
			"ASM_ID"         => $temp[0]['ASM_ID'],
			"PPI_ID"         => $temp[0]['PPI_ID'],
			"ASM_SUMBERINFO" => $temp[0]['ASM_SUMBERINFO'],
			"ASM_TGL"        => $temp[0]['ASM_TGL'],
		);
		$this->load->view('header')->view('delete/data_asesmen', $data)->view('footer');
	}
}
