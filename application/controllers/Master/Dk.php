<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dk extends CI_Controller {
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
		$data = $this->Crud->GetDk();
		$this->load->view('header')->view('read/detil_kebutuhan', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('DETKEB_ID' => $id);
		$res   = $this->Crud->DeleteData('detil_kebutuhan', $where);
		if ($res == 1) {
			redirect('Master/Dk', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/detil_kebutuhan', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$DETKEB_ID          = $_POST['DETKEB_ID'];
		$PPI_ID             = $_POST['PPI_ID'];
		$DETKEB_ALAT        = $_POST['DETKEB_ALAT'];
		$DETKEB_PENYESUAIAN = $_POST['DETKEB_PENYESUAIAN'];

		$data_insert = array(
			'DETKEB_ID'          => $DETKEB_ID,
			'PPI_ID'             => $PPI_ID,
			'DETKEB_ALAT'        => $DETKEB_ALAT,
			'DETKEB_PENYESUAIAN' => $DETKEB_PENYESUAIAN,
		);

		$res = $this->Crud->InsertData('detil_kebutuhan', $data_insert);
		if ($res == 1) {
			redirect('Master/Dk', 'refresh');
		}
	}

	public function update_data() {
		$DETKEB_ID          = $_POST['DETKEB_ID'];
		$PPI_ID             = $_POST['PPI_ID'];
		$DETKEB_ALAT        = $_POST['DETKEB_ALAT'];
		$DETKEB_PENYESUAIAN = $_POST['DETKEB_PENYESUAIAN'];

		$data_insert = array(
			'DETKEB_ID'          => $DETKEB_ID,
			'PPI_ID'             => $PPI_ID,
			'DETKEB_ALAT'        => $DETKEB_ALAT,
			'DETKEB_PENYESUAIAN' => $DETKEB_PENYESUAIAN,
		);

		$where = array('DETKEB_ID' => $DETKEB_ID);
		$res   = $this->Crud->UpdateData('detil_kebutuhan', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Dk', 'refresh');
		}
	}

	public function view_update_data($DETKEB_ID) {
		$temp = $this->Crud->GetDk(" where DETKEB_ID = '$DETKEB_ID'");
		$data = array(
			"DETKEB_ID"          => $temp[0]['DETKEB_ID'],
			"PPI_ID"             => $temp[0]['PPI_ID'],
			"DETKEB_ALAT"        => $temp[0]['DETKEB_ALAT'],
			"DETKEB_PENYESUAIAN" => $temp[0]['DETKEB_PENYESUAIAN'],
		);
		$this->load->view('header')->view('update/detil_kebutuhan', $data)->view('footer');
	}

	public function view_delete($DETKEB_ID) {
		$temp = $this->Crud->GetDk(" where DETKEB_ID = '$DETKEB_ID'");
		$data = array(
			"DETKEB_ID"          => $temp[0]['DETKEB_ID'],
			"PPI_ID"             => $temp[0]['PPI_ID'],
			"DETKEB_ALAT"        => $temp[0]['DETKEB_ALAT'],
			"DETKEB_PENYESUAIAN" => $temp[0]['DETKEB_PENYESUAIAN'],
		);
		$this->load->view('header')->view('delete/detil_kebutuhan', $data)->view('footer');
	}

}
