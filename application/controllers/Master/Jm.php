<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jm extends CI_Controller {
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
		$data = $this->Crud->GetJm();
		$this->load->view('header')->view('read/jurnal_materi', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('JM_ID' => $id);
		$res   = $this->Crud->DeleteData('jurnal_materi', $where);
		if ($res == 1) {
			redirect('Master/Jm', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/jurnal_materi', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$JM_ID        = $_POST['JM_ID'];
		$MAPEL_ID     = $_POST['MAPEL_ID'];
		$GR_ID        = $_POST['GR_ID'];
		$JM_THNAJARAN = $_POST['JM_THNAJARAN'];
		$JM_SEMESTER  = $_POST['JM_SEMESTER'];

		$data_insert = array(
			'JM_ID'        => $JM_ID,
			'MAPEL_ID'     => $MAPEL_ID,
			'GR_ID'        => $GR_ID,
			'JM_SEMESTER'  => $JM_SEMESTER,
			'JM_THNAJARAN' => $JM_THNAJARAN,

		);

		$res = $this->Crud->InsertData('jurnal_materi', $data_insert);
		if ($res == 1) {
			redirect('Master/Jm', 'refresh');
		}
	}

	public function update_data() {
		$JM_ID        = $_POST['JM_ID'];
		$MAPEL_ID     = $_POST['MAPEL_ID'];
		$GR_ID        = $_POST['GR_ID'];
		$JM_THNAJARAN = $_POST['JM_THNAJARAN'];
		$JM_SEMESTER  = $_POST['JM_SEMESTER'];

		$data_insert = array(
			'JM_ID'        => $JM_ID,
			'MAPEL_ID'     => $MAPEL_ID,
			'GR_ID'        => $GR_ID,
			'JM_SEMESTER'  => $JM_SEMESTER,
			'JM_THNAJARAN' => $JM_THNAJARAN,

		);

		$where = array('JM_ID' => $JM_ID);
		$res   = $this->Crud->UpdateData('jurnal_materi', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Jm', 'refresh');
		}
	}

	public function view_update_data($JM_ID) {
		$temp = $this->Crud->GetJm(" where JM_ID = '$JM_ID'");
		$data = array(
			"JM_ID"        => $temp[0]['JM_ID'],
			"MAPEL_ID"     => $temp[0]['MAPEL_ID'],
			"GR_ID"        => $temp[0]['GR_ID'],
			"JM_THNAJARAN" => $temp[0]['JM_THNAJARAN'],
			"JM_SEMESTER"  => $temp[0]['JM_SEMESTER'],

		);
		$this->load->view('header')->view('update/jurnal_materi', $data)->view('footer');
	}

	public function view_delete($JM_ID) {
		$temp = $this->Crud->GetJm(" where JM_ID = '$JM_ID'");
		$data = array(
			"JM_ID"        => $temp[0]['JM_ID'],
			"MAPEL_ID"     => $temp[0]['MAPEL_ID'],
			"GR_ID"        => $temp[0]['GR_ID'],
			"JM_THNAJARAN" => $temp[0]['JM_THNAJARAN'],
			"JM_SEMESTER"  => $temp[0]['JM_SEMESTER'],

		);
		$this->load->view('header')->view('delete/jurnal_materi', $data)->view('footer');
	}

}
