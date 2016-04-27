<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ck extends CI_Controller {
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
		$data = $this->Crud->GetCk();
		$this->load->view('header')->view('read/ciri_kepribadian', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('CK_ID' => $id);
		$res   = $this->Crud->DeleteData('ciri_kepribadian', $where);
		if ($res == 1) {
			redirect('master/Ck', 'refresh');
		}
	}

	public function view_create_data() {
		$data['ck'] = $this->Crud->getLastPagination('ciri_kepribadian','CK_ID');
		$this->load->view('header')->view('create/ciri_kepribadian',$data)->view('footer');
	}

	public function create_data() {
		// $data = $this->Crud->getLastPagination('ciri_kepribadian','CK_ID');
		$CK_ID         = $_POST['CK_ID'];
		$CK_KETERANGAN = $_POST['CK_KETERANGAN'];

		$data_insert = array(
			'CK_ID'         => $CK_ID,
			'CK_KETERANGAN' => $CK_KETERANGAN,
		);

		$res = $this->Crud->InsertData('ciri_kepribadian', $data_insert);
		if ($res == 1) {
			redirect('Master/Ck', 'refresh');
		}
	}

	public function update_data() {
		$CK_ID         = $_POST['CK_ID'];
		$CK_KETERANGAN = $_POST['CK_KETERANGAN'];

		$data_insert = array(
			'CK_ID'         => $CK_ID,
			'CK_KETERANGAN' => $CK_KETERANGAN,
		);

		$where = array('CK_ID' => $CK_ID);
		$res   = $this->Crud->UpdateData('ciri_kepribadian', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Ck', 'refresh');
		}
	}

	public function view_update_data($CK_ID) {
		$temp = $this->Crud->GetCk(" where CK_ID = '$CK_ID'");
		$data = array(
			"CK_ID"         => $temp[0]['CK_ID'],
			"CK_KETERANGAN" => $temp[0]['CK_KETERANGAN'],
		);
		$this->load->view('header')->view('update/ciri_kepribadian', $data)->view('footer');
	}

	public function view_delete($CK_ID) {
		$temp = $this->Crud->GetCk(" where CK_ID = '$CK_ID'");
		$data = array(
			"CK_ID"         => $temp[0]['CK_ID'],
			"CK_KETERANGAN" => $temp[0]['CK_KETERANGAN'],
		);
		$this->load->view('header')->view('delete/ciri_kepribadian', $data)->view('footer');
	}

}
