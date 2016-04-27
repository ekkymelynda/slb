<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Djk extends CI_Controller {
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
		$data = $this->Crud->GetDjk();
		$this->load->view('header')->view('read/detil_jurnal_kelas', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('DJK_ID' => $id);
		$res   = $this->Crud->DeleteData('detil_jurnal_kelas', $where);
		if ($res == 1) {
			redirect('Master/Djk', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/detil_jurnal_kelas', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$DJK_ID         = $_POST['DJK_ID'];
		$MAPEL_ID       = $_POST['MAPEL_ID'];
		$JK_ID          = $_POST['JK_ID'];
		$DJK_TANGGAL    = $_POST['DJK_TANGGAL'];
		$DJK_MATERI     = $_POST['DJK_MATERI'];
		$DJK_KETERANGAN = $_POST['DJK_KETERANGAN'];

		$data_insert = array(
			'DJK_ID'         => $DJK_ID,
			'MAPEL_ID'       => $MAPEL_ID,
			'JK_ID'          => $JK_ID,
			'DJK_TANGGAL'    => $DJK_TANGGAL,
			'DJK_MATERI'     => $DJK_MATERI,
			'DJK_KETERANGAN' => $DJK_KETERANGAN,
		);

		$res = $this->Crud->InsertData('detil_jurnal_kelas', $data_insert);
		if ($res == 1) {
			redirect('Master/Djk', 'refresh');
		}
	}

	public function update_data() {
		$DJK_ID         = $_POST['DJK_ID'];
		$MAPEL_ID       = $_POST['MAPEL_ID'];
		$JK_ID          = $_POST['JK_ID'];
		$DJK_TANGGAL    = $_POST['DJK_TANGGAL'];
		$DJK_MATERI     = $_POST['DJK_MATERI'];
		$DJK_KETERANGAN = $_POST['DJK_KETERANGAN'];

		$data_insert = array(
			'DJK_ID'         => $DJK_ID,
			'MAPEL_ID'       => $MAPEL_ID,
			'JK_ID'          => $JK_ID,
			'DJK_TANGGAL'    => $DJK_TANGGAL,
			'DJK_MATERI'     => $DJK_MATERI,
			'DJK_KETERANGAN' => $DJK_KETERANGAN,
		);

		$where = array('DJK_ID' => $DJK_ID);
		$res   = $this->Crud->UpdateData('detil_jurnal_kelas', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Djk', 'refresh');
		}
	}

	public function view_update_data($DJK_ID) {
		$temp = $this->Crud->GetDjk(" where DJK_ID = '$DJK_ID'");
		$data = array(
			"DJK_ID"         => $temp[0]['DJK_ID'],
			"MAPEL_ID"       => $temp[0]['MAPEL_ID'],
			"JK_ID"          => $temp[0]['JK_ID'],
			"DJK_TANGGAL"    => $temp[0]['DJK_TANGGAL'],
			"DJK_MATERI"     => $temp[0]['DJK_MATERI'],
			"DJK_KETERANGAN" => $temp[0]['DJK_KETERANGAN'],

		);
		$this->load->view('header')->view('update/detil_jurnal_kelas', $data)->view('footer');
	}

	public function view_delete($DJK_ID) {
		$temp = $this->Crud->GetDjk(" where DJK_ID = '$DJK_ID'");
		$data = array(
			"DJK_ID"         => $temp[0]['DJK_ID'],
			"MAPEL_ID"       => $temp[0]['MAPEL_ID'],
			"JK_ID"          => $temp[0]['JK_ID'],
			"DJK_TANGGAL"    => $temp[0]['DJK_TANGGAL'],
			"DJK_MATERI"     => $temp[0]['DJK_MATERI'],
			"DJK_KETERANGAN" => $temp[0]['DJK_KETERANGAN'],

		);
		$this->load->view('header')->view('delete/detil_jurnal_kelas', $data)->view('footer');
	}

}
