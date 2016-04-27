<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ha extends CI_Controller {
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
		$data = $this->Crud->GetHa();
		$this->load->view('header')->view('read/hasil_asesmen', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('HA_ID' => $id);
		$res   = $this->Crud->DeleteData('hasil_asesmen', $where);
		if ($res == 1) {
			redirect('Master/Ha', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/hasil_asesmen', $data)->view('footer');
	}

	public function create_data() {
		$HA_ID        = $_POST['HA_ID'];
		$ASM_ID       = $_POST['ASM_ID'];
		$HA_RINGKASAN = $_POST['HA_RINGKASAN'];

		$data_insert = array(
			'HA_ID'        => $HA_ID,
			'ASM_ID'       => $ASM_ID,
			'HA_RINGKASAN' => $HA_RINGKASAN,
		);

		$res = $this->Crud->InsertData('hasil_asesmen', $data_insert);
		if ($res == 1) {
			redirect('Master/Ha', 'refresh');
		}
	}

	public function update_data() {
		$HA_ID        = $_POST['HA_ID'];
		$ASM_ID       = $_POST['ASM_ID'];
		$HA_RINGKASAN = $_POST['HA_RINGKASAN'];

		$data_insert = array(
			'HA_ID'        => $HA_ID,
			'ASM_ID'       => $ASM_ID,
			'HA_RINGKASAN' => $HA_RINGKASAN,
		);
		$where = array('HA_ID' => $HA_ID);
		$res   = $this->Crud->UpdateData('hasil_asesmen', $data_insert, $where);

		// $this->load->view('header')->view('update/hasil_asesmen',$data)->view('footer');

		if ($res == 1) {
			redirect('Master/Ha', 'refresh');
		}
	}

	public function view_update_data($HA_ID) {
		$temp = $this->Crud->GetHa(" where HA_ID = '$HA_ID'");
		$data = array(
			"HA_ID"        => $temp[0]['HA_ID'],
			"ASM_ID"       => $temp[0]['ASM_ID'],
			"HA_RINGKASAN" => $temp[0]['HA_RINGKASAN'],

		);
		$this->load->view('header')->view('update/hasil_asesmen', $data)->view('footer');
	}

	public function view_delete($HA_ID) {
		$temp = $this->Crud->GetHa(" where HA_ID = '$HA_ID'");
		$data = array(
			"HA_ID"        => $temp[0]['HA_ID'],
			"ASM_ID"       => $temp[0]['ASM_ID'],
			"HA_RINGKASAN" => $temp[0]['HA_RINGKASAN'],

		);
		$this->load->view('header')->view('delete/hasil_asesmen', $data)->view('footer');
	}

}
