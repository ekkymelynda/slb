<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jps extends CI_Controller {
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
		$data = $this->Crud->GetJps();
		$this->load->view('header')->view('read/jurnal_pribadi_siswa', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('JPSW_ID' => $id);
		$res   = $this->Crud->DeleteData('jurnal_pribadi_siswa', $where);
		if ($res == 1) {
			redirect('Master/Jps', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/jurnal_pribadi_siswa', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$JPSW_ID           = $_POST['JPSW_ID'];
		$RM_ID             = $_POST['RM_ID'];
		$SW_ID             = $_POST['SW_ID'];
		$JPSW_TANGGAL      = $_POST['JPSW_TANGGAL'];
		$JPSW_PERKEMBANGAN = $_POST['JPSW_PERKEMBANGAN'];
		$JPSW_KETERANGAN   = $_POST['JPSW_KETERANGAN'];

		$data_insert = array(
			'JPSW_ID'           => $JPSW_ID,
			'RM_ID'             => $RM_ID,
			'SW_ID'             => $SW_ID,
			'JPSW_KETERANGAN'   => $JPSW_KETERANGAN,
			'JPSW_TANGGAL'      => $JPSW_TANGGAL,
			'JPSW_PERKEMBANGAN' => $JPSW_PERKEMBANGAN,
		);

		$res = $this->Crud->InsertData('jurnal_pribadi_siswa', $data_insert);
		if ($res == 1) {
			redirect('Master/Jps', 'refresh');
		}
	}

	public function update_data() {
		$JPSW_ID           = $_POST['JPSW_ID'];
		$RM_ID             = $_POST['RM_ID'];
		$SW_ID             = $_POST['SW_ID'];
		$JPSW_TANGGAL      = $_POST['JPSW_TANGGAL'];
		$JPSW_PERKEMBANGAN = $_POST['JPSW_PERKEMBANGAN'];
		$JPSW_KETERANGAN   = $_POST['JPSW_KETERANGAN'];

		$data_insert = array(
			'JPSW_ID'           => $JPSW_ID,
			'RM_ID'             => $RM_ID,
			'SW_ID'             => $SW_ID,
			'JPSW_KETERANGAN'   => $JPSW_KETERANGAN,
			'JPSW_TANGGAL'      => $JPSW_TANGGAL,
			'JPSW_PERKEMBANGAN' => $JPSW_PERKEMBANGAN,
		);

		$where = array('JPSW_ID' => $JPSW_ID);
		$res   = $this->Crud->UpdateData('jurnal_pribadi_siswa', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Jps', 'refresh');
		}
	}

	public function view_update_data($JPSW_ID) {
		$temp = $this->Crud->GetJps(" where JPSW_ID = '$JPSW_ID'");
		$data = array(
			"JPSW_ID"           => $temp[0]['JPSW_ID'],
			"RM_ID"             => $temp[0]['RM_ID'],
			"SW_ID"             => $temp[0]['SW_ID'],
			"JPSW_TANGGAL"      => $temp[0]['JPSW_TANGGAL'],
			"JPSW_KETERANGAN"   => $temp[0]['JPSW_KETERANGAN'],
			"JPSW_PERKEMBANGAN" => $temp[0]['JPSW_PERKEMBANGAN'],

		);
		$this->load->view('header')->view('update/jurnal_pribadi_siswa', $data)->view('footer');
	}

	public function view_delete($JPSW_ID) {
		$temp = $this->Crud->GetJps(" where JPSW_ID = '$JPSW_ID'");
		$data = array(
			"JPSW_ID"           => $temp[0]['JPSW_ID'],
			"RM_ID"             => $temp[0]['RM_ID'],
			"SW_ID"             => $temp[0]['SW_ID'],
			"JPSW_TANGGAL"      => $temp[0]['JPSW_TANGGAL'],
			"JPSW_KETERANGAN"   => $temp[0]['JPSW_KETERANGAN'],
			"JPSW_PERKEMBANGAN" => $temp[0]['JPSW_PERKEMBANGAN'],

		);
		$this->load->view('header')->view('delete/jurnal_pribadi_siswa', $data)->view('footer');
	}
}