<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warganegara extends CI_Controller {
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
		$data = $this->Crud->GetWarganegara();
		$this->load->view('header')->view('read/warganegara', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('KWN_ID' => $id);
		$res   = $this->Crud->DeleteData('warganegara', $where);
		if ($res == 1) {
			redirect('Master/warganegara', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/warganegara', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$KWN_ID    = $_POST['KWN_ID'];
		$KWN_JENIS = $_POST['KWN_JENIS'];

		$data_insert = array(
			'KWN_ID'    => $KWN_ID,
			'KWN_JENIS' => $KWN_JENIS,
		);

		$res = $this->Crud->InsertData('warganegara', $data_insert);
		if ($res == 1) {
			redirect('Master/warganegara', 'refresh');
		}
	}

	public function update_data() {
		$KWN_ID    = $_POST['KWN_ID'];
		$KWN_JENIS = $_POST['KWN_JENIS'];

		$data_insert = array(
			'KWN_ID'    => $KWN_ID,
			'KWN_JENIS' => $KWN_JENIS,
		);

		$where = array('KWN_ID' => $KWN_ID);
		$res   = $this->Crud->UpdateData('warganegara', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/warganegara', 'refresh');
		}
	}

	public function view_update_data($KWN_ID) {
		$temp = $this->Crud->GetWarganegara(" where KWN_ID = '$KWN_ID'");
		$data = array(
			"KWN_ID"    => $temp[0]['KWN_ID'],
			"KWN_JENIS" => $temp[0]['KWN_JENIS'],

		);
		$this->load->view('header')->view('update/warganegara', $data)->view('footer');
	}

	public function view_delete($KWN_ID) {
		$temp = $this->Crud->GetWarganegara(" where KWN_ID = '$KWN_ID'");
		$data = array(
			"KWN_ID"    => $temp[0]['KWN_ID'],
			"KWN_JENIS" => $temp[0]['KWN_JENIS'],

		);
		$this->load->view('header')->view('delete/warganegara', $data)->view('footer');
	}

}
