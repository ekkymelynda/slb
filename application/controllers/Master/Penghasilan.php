<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghasilan extends CI_Controller {
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
		$data = $this->Crud->GetPenghasilan();
		$this->load->view('header')->view('read/penghasilan', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('PH_ID' => $id);
		$res   = $this->Crud->DeleteData('penghasilan', $where);
		if ($res == 1) {
			redirect('Master/Penghasilan', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/penghasilan', $data)->view('footer');
	}

	public function create_data() {
		$PH_ID      = $_POST['PH_ID'];
		$PH_BESARAN = $_POST['PH_BESARAN'];

		$data_insert = array(
			'PH_ID'      => $PH_ID,
			'PH_BESARAN' => $PH_BESARAN,
		);

		$res = $this->Crud->InsertData('penghasilan', $data_insert);
		if ($res == 1) {
			redirect('Master/Penghasilan', 'refresh');
		}
	}

	public function update_data() {
		$PH_ID      = $_POST['PH_ID'];
		$PH_BESARAN = $_POST['PH_BESARAN'];

		$data_insert = array(
			'PH_ID'      => $PH_ID,
			'PH_BESARAN' => $PH_BESARAN,
		);

		$where = array('PH_ID' => $PH_ID);
		$res   = $this->Crud->UpdateData('penghasilan', $data_insert, $where);
		// if ($res == 1) {
		// 	redirect('Master/Penghasilan', 'refresh');
		// }
	}

	public function view_update_data($PH_ID) {
		$temp = $this->Crud->GetPenghasilan(" where PH_ID = '$PH_ID'");
		$data = array(
			"PH_ID"      => $temp[0]['PH_ID'],
			"PH_BESARAN" => $temp[0]['PH_BESARAN'],
		);
		$this->load->view('header')->view('update/penghasilan', $data)->view('footer');
	}

	public function view_delete($PH_ID) {
		$temp = $this->Crud->GetPenghasilan(" where PH_ID = '$PH_ID'");
		$data = array(
			"PH_ID"      => $temp[0]['PH_ID'],
			"PH_BESARAN" => $temp[0]['PH_BESARAN'],
		);
		$this->load->view('header')->view('delete/penghasilan', $data)->view('footer');
	}

}
