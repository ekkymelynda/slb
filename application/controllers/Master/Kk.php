<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kk extends CI_Controller {
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
		$data = $this->Crud->GetKk();
		$this->load->view('header')->view('read/kebutuhan_khusus', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('KK_ID' => $id);
		$res   = $this->Crud->DeleteData('kebutuhan_khusus', $where);
		if ($res == 1) {
			redirect('Master/Kk', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/kebutuhan_khusus', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$KK_ID    = $_POST['KK_ID'];
		$KK_JENIS = $_POST['KK_JENIS'];

		$data_insert = array(
			'KK_ID'    => $KK_ID,
			'KK_JENIS' => $KK_JENIS,

		);

		$res = $this->Crud->InsertData('kebutuhan_khusus', $data_insert);
		if ($res == 1) {
			redirect('Master/Kk', 'refresh');
		}
	}

	public function update_data() {
		$KK_ID    = $_POST['KK_ID'];
		$KK_JENIS = $_POST['KK_JENIS'];

		$data_insert = array(
			'KK_ID'    => $KK_ID,
			'KK_JENIS' => $KK_JENIS,

		);

		$where = array('KK_ID' => $KK_ID);
		$res   = $this->Crud->UpdateData('kebutuhan_khusus', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Kk', 'refresh');
		}
	}

	public function view_update_data($KK_ID) {
		$temp = $this->Crud->GetKk(" where KK_ID = '$KK_ID'");
		$data = array(
			"KK_ID"    => $temp[0]['KK_ID'],
			"KK_JENIS" => $temp[0]['KK_JENIS'],
		);
		$this->load->view('header')->view('update/kebutuhan_khusus', $data)->view('footer');
	}

	public function view_delete($KK_ID) {
		$temp = $this->Crud->GetKk(" where KK_ID = '$KK_ID'");
		$data = array(
			"KK_ID"    => $temp[0]['KK_ID'],
			"KK_JENIS" => $temp[0]['KK_JENIS'],
		);
		$this->load->view('header')->view('delete/kebutuhan_khusus', $data)->view('footer');
	}

}
