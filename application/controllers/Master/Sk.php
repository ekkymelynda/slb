<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sk extends CI_Controller {
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
		$data = $this->Crud->GetSk();
		$this->load->view('header')->view('read/saudara_kandung', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('SK_ID' => $id);
		$res   = $this->Crud->DeleteData('saudara_kandung', $where);
		if ($res == 1) {
			redirect('Master/Sk', 'refresh');
		}
	}

	public function view_create_data() {
		$data['jenjang_pendidikan'] = $this->Crud->GetJp();
		$data['siswa'] = $this->Crud->GetSiswa();
		$this->load->view('header')->view('create/saudara_kandung', $data)->view('footer');
	}

	public function create_data() {
		// $SK_ID         = $_POST['SK_ID'];
		$JP_ID         = $_POST['JP_ID'];
		$SW_ID         = $_POST['SW_ID'];
		$SK_NAMA       = $_POST['SK_NAMA'];
		$SK_JK         = $_POST['SK_JK'];
		$SK_PENDIDIKAN = $_POST['SK_PENDIDIKAN'];

		$data_insert = array(
			// 'SK_ID'         => $SK_ID,
			'JP_ID'         => $JP_ID,
			'SW_ID'         => $SW_ID,
			'SK_NAMA'       => $SK_NAMA,
			'SK_JK'         => $SK_JK,
			'SK_PENDIDIKAN' => $SK_PENDIDIKAN,
		);

		$res = $this->Crud->InsertData('saudara_kandung', $data_insert);
		if ($res == 1) {
			redirect('Master/Sk', 'refresh');
		}
	}

	public function update_data() {
		$SK_ID         = $_POST['SK_ID'];
		$JP_ID         = $_POST['JP_ID'];
		// $SW_ID         = $_POST['SW_ID'];
		$SK_NAMA       = $_POST['SK_NAMA'];
		$SK_JK         = $_POST['SK_JK'];
		$SK_PENDIDIKAN = $_POST['SK_PENDIDIKAN'];

		$data_insert = array(
			'SK_ID'         => $SK_ID,
			'JP_ID'         => $JP_ID,
			// 'SW_ID'         => $SW_ID,
			'SK_NAMA'       => $SK_NAMA,
			'SK_JK'         => $SK_JK,
			'SK_PENDIDIKAN' => $SK_PENDIDIKAN,
		);

		$where = array('SK_ID' => $SK_ID);
		$res   = $this->Crud->UpdateData('saudara_kandung', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Sk', 'refresh');
		}
	}

	public function view_update_data($SK_ID) {
		$temp = $this->Crud->GetSk(" where SK_ID = '$SK_ID'");
		$data['jenjang_pendidikan'] = $this->Crud->GetJp();
		$data['saudara_kandung'] = $this->Crud->GetSk();
		$data['join_jp'] = $this->Crud->Join('saudara_kandung','jenjang_pendidikan','saudara_kandung.JP_ID = jenjang_pendidikan.JP_ID','SK_ID',$SK_ID);

		$data['sk'] = array(
			"SK_ID"         => $temp[0]['SK_ID'],
			"JP_ID"         => $temp[0]['JP_ID'],
			"SW_ID"         => $temp[0]['SW_ID'],
			"SK_NAMA"       => $temp[0]['SK_NAMA'],
			"SK_JK"         => $temp[0]['SK_JK'],
			"SK_PENDIDIKAN" => $temp[0]['SK_PENDIDIKAN'],

		);
		// $this->load->view('header')->view('update/saudara_kandung', array('data' => $data, 'join_jp' => $join_jp,'jenjang_pendidikan'=>$jenjang_pendidikan))->view('footer');
		$this->load->view('header')->view('update/saudara_kandung',$data)->view('footer');
	}

	public function view_delete($SK_ID) {
		$temp = $this->Crud->GetSk(" where SK_ID = '$SK_ID'");
		$data = array(
			"SK_ID"         => $temp[0]['SK_ID'],
			"JP_ID"         => $temp[0]['JP_ID'],
			"SW_ID"         => $temp[0]['SW_ID'],
			"SK_NAMA"       => $temp[0]['SK_NAMA'],
			"SK_JK"         => $temp[0]['SK_JK'],
			"SK_PENDIDIKAN" => $temp[0]['SK_PENDIDIKAN'],

		);
		$this->load->view('header')->view('delete/saudara_kandung', $data)->view('footer');
	}

}
