<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ik extends CI_Controller {
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
		$data = $this->Crud->GetIk();
		$this->load->view('header')->view('read/indikator_keberhasilan', array('data' => $data))->view('footer');
	}
	public function delete($id) {
		$where = array('INDI_ID' => $id);
		$res   = $this->Crud->DeleteData('indikator_keberhasilan', $where);
		if ($res == 1) {
			redirect('Master/Ik', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/indikator_keberhasilan', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$INDI_ID  = $_POST['INDI_ID'];
		$PLK_ID   = $_POST['PLK_ID'];
		$INDI_KET = $_POST['INDI_KET'];

		$data_insert = array(
			'INDI_ID'  => $INDI_ID,
			'PLK_ID'   => $PLK_ID,
			'INDI_KET' => $INDI_KET,
		);

		$res = $this->Crud->InsertData('indikator_keberhasilan', $data_insert);
		if ($res == 1) {
			redirect('Master/Ik', 'refresh');
		}
	}

	public function update_data() {
		$INDI_ID  = $_POST['INDI_ID'];
		$PLK_ID   = $_POST['PLK_ID'];
		$INDI_KET = $_POST['INDI_KET'];

		$data_insert = array(
			'INDI_ID'  => $INDI_ID,
			'PLK_ID'   => $PLK_ID,
			'INDI_KET' => $INDI_KET,
		);
		$where = array('INDI_ID' => $INDI_ID);
		$res   = $this->Crud->UpdateData('indikator_keberhasilan', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Ik', 'refresh');
		}
	}

	public function view_update_data($INDI_ID) {
		$temp = $this->Crud->GetIk(" where INDI_ID = '$INDI_ID'");
		$data = array(
			"INDI_ID"  => $temp[0]['INDI_ID'],
			"PLK_ID"   => $temp[0]['PLK_ID'],
			"INDI_KET" => $temp[0]['INDI_KET'],
		);
		$this->load->view('header')->view('update/indikator_keberhasilan', $data)->view('footer');
	}

	public function view_delete($INDI_ID) {
		$temp = $this->Crud->GetIk(" where INDI_ID = '$INDI_ID'");
		$data = array(
			"INDI_ID"  => $temp[0]['INDI_ID'],
			"PLK_ID"   => $temp[0]['PLK_ID'],
			"INDI_KET" => $temp[0]['INDI_KET'],
		);
		$this->load->view('header')->view('delete/indikator_keberhasilan', $data)->view('footer');
	}

}
