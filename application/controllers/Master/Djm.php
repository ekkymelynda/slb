<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Djm extends CI_Controller {
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
		$data = $this->Crud->GetDjm();
		$this->load->view('header')->view('read/detil_jurnal_materi', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('DJM_ID' => $id);
		$res   = $this->Crud->DeleteData('detil_jurnal_materi', $where);
		if ($res == 1) {
			redirect('Master/Djm', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/detil_jurnal_materi', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$DJM_ID                 = $_POST['DJM_ID'];
		$JM_ID                  = $_POST['JM_ID'];
		$RM_ID                  = $_POST['RM_ID'];
		$DJM_TANGGAL            = $_POST['DJM_TANGGAL'];
		$DJM_JAMKE              = $_POST['DJM_JAMKE'];
		$DJM_MATERIPEMBELAJARAN = $_POST['DJM_MATERIPEMBELAJARAN'];
		$DJM_JMLSWHADIR         = $_POST['DJM_JMLSWHADIR'];
		$DJM_JMLSWTAKHADIR      = $_POST['DJM_JMLSWTAKHADIR'];
		$DJM_NAMAKETTAKHADIR    = $_POST['DJM_NAMAKETTAKHADIR'];

		$DJM_CATATAN = $_POST['DJM_CATATAN'];

		$data_insert = array(
			'DJM_ID'                 => $DJM_ID,
			'JM_ID'                  => $JM_ID,
			'RM_ID'                  => $RM_ID,
			'DJM_TANGGAL'            => $DJM_TANGGAL,
			'DJM_JAMKE'              => $DJM_JAMKE,
			'DJM_MATERIPEMBELAJARAN' => $DJM_MATERIPEMBELAJARAN,
			'DJM_JMLSWHADIR'         => $DJM_JMLSWHADIR,
			'DJM_JMLSWTAKHADIR'      => $DJM_JMLSWTAKHADIR,
			'DJM_NAMAKETTAKHADIR'    => $DJM_NAMAKETTAKHADIR,
			'DJM_CATATAN'            => $DJM_CATATAN,
		);
		$res = $this->Crud->InsertData('detil_jurnal_materi', $data_insert);
		if ($res == 1) {
			redirect('Master/Djm');
		}
	}

	public function update_data() {
		$DJM_ID                 = $_POST['DJM_ID'];
		$JM_ID                  = $_POST['JM_ID'];
		$RM_ID                  = $_POST['RM_ID'];
		$DJM_TANGGAL            = $_POST['DJM_TANGGAL'];
		$DJM_MATERIPEMBELAJARAN = $_POST['DJM_MATERIPEMBELAJARAN'];
		$DJM_JMLSWHADIR         = $_POST['DJM_JMLSWHADIR'];
		$DJM_JMLSWTAKHADIR      = $_POST['DJM_JMLSWTAKHADIR'];
		$DJM_NAMAKETTAKHADIR    = $_POST['DJM_NAMAKETTAKHADIR'];
		$DJM_CATATAN            = $_POST['DJM_CATATAN'];
		$DJM_JAMKE              = $_POST['DJM_JAMKE'];

		$data_insert = array(
			'DJM_ID'                 => $DJM_ID,
			'JM_ID'                  => $JM_ID,
			'RM_ID'                  => $RM_ID,
			'DJM_TANGGAL'            => $DJM_TANGGAL,
			'DJM_JAMKE'              => $DJM_JAMKE,
			'DJM_MATERIPEMBELAJARAN' => $DJM_MATERIPEMBELAJARAN,
			'DJM_JMLSWHADIR'         => $DJM_JMLSWHADIR,
			'DJM_JMLSWTAKHADIR'      => $DJM_JMLSWTAKHADIR,
			'DJM_NAMAKETTAKHADIR'    => $DJM_NAMAKETTAKHADIR,
			'DJM_CATATAN'            => $DJM_CATATAN,
		);

		$where = array('DJM_ID' => $DJM_ID);
		$res   = $this->Crud->UpdateData('detil_jurnal_materi', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Djm');
		}
	}

	public function view_update_data($DJM_ID) {
		$temp = $this->Crud->GetDjm(" where DJM_ID = '$DJM_ID'");
		$data = array(
			"DJM_ID"                 => $temp[0]['DJM_ID'],
			"JM_ID"                  => $temp[0]['JM_ID'],
			"RM_ID"                  => $temp[0]['RM_ID'],
			"DJM_JAMKE"              => $temp[0]['DJM_JAMKE'],
			"DJM_TANGGAL"            => $temp[0]['DJM_TANGGAL'],
			"DJM_MATERIPEMBELAJARAN" => $temp[0]['DJM_MATERIPEMBELAJARAN'],
			"DJM_JMLSWHADIR"         => $temp[0]['DJM_JMLSWHADIR'],
			"DJM_JMLSWTAKHADIR"      => $temp[0]['DJM_JMLSWTAKHADIR'],
			"DJM_NAMAKETTAKHADIR"    => $temp[0]['DJM_NAMAKETTAKHADIR'],
			"DJM_CATATAN"            => $temp[0]['DJM_CATATAN'],

		);
		$this->load->view('header')->view('update/detil_jurnal_materi', $data)->view('footer');
	}

	public function view_delete($DJM_ID) {
		$temp = $this->Crud->GetDjm(" where DJM_ID = '$DJM_ID'");
		$data = array(
			"DJM_ID"                 => $temp[0]['DJM_ID'],
			"JM_ID"                  => $temp[0]['JM_ID'],
			"RM_ID"                  => $temp[0]['RM_ID'],
			"DJM_JAMKE"              => $temp[0]['DJM_JAMKE'],
			"DJM_TANGGAL"            => $temp[0]['DJM_TANGGAL'],
			"DJM_MATERIPEMBELAJARAN" => $temp[0]['DJM_MATERIPEMBELAJARAN'],
			"DJM_JMLSWHADIR"         => $temp[0]['DJM_JMLSWHADIR'],
			"DJM_JMLSWTAKHADIR"      => $temp[0]['DJM_JMLSWTAKHADIR'],
			"DJM_NAMAKETTAKHADIR"    => $temp[0]['DJM_NAMAKETTAKHADIR'],
			"DJM_CATATAN"            => $temp[0]['DJM_CATATAN'],

		);
		$this->load->view('header')->view('delete/detil_jurnal_materi', $data)->view('footer');
	}

	public function view_detail($DJM_ID) {
		$temp = $this->Crud->GetDjm(" where DJM_ID = '$DJM_ID'");
		$data = array(
			"DJM_ID"                 => $temp[0]['DJM_ID'],
			"JM_ID"                  => $temp[0]['JM_ID'],
			"RM_ID"                  => $temp[0]['RM_ID'],
			"DJM_JAMKE"              => $temp[0]['DJM_JAMKE'],
			"DJM_TANGGAL"            => $temp[0]['DJM_TANGGAL'],
			"DJM_MATERIPEMBELAJARAN" => $temp[0]['DJM_MATERIPEMBELAJARAN'],
			"DJM_JMLSWHADIR"         => $temp[0]['DJM_JMLSWHADIR'],
			"DJM_JMLSWTAKHADIR"      => $temp[0]['DJM_JMLSWTAKHADIR'],
			"DJM_NAMAKETTAKHADIR"    => $temp[0]['DJM_NAMAKETTAKHADIR'],
			"DJM_CATATAN"            => $temp[0]['DJM_CATATAN'],

		);
		$this->load->view('header')->view('Detail/detil_jurnal_materi', $data)->view('footer');
	}

}
