<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plk extends CI_Controller {
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
		$data = $this->Crud->GetPlk();
		$this->load->view('header')->view('read/program_layanan_kompensatoris', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('PLK_ID' => $id);
		$res   = $this->Crud->DeleteData('program_layanan_kompensatoris', $where);
		if ($res == 1) {
			redirect('Master/Plk', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/program_layanan_kompensatoris', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$PLK_ID               = $_POST['PLK_ID'];
		$PPI_ID               = $_POST['PPI_ID'];
		$PLK_NAMAKETERAMPILAN = $_POST['PLK_NAMAKETERAMPILAN'];

		$data_insert = array(
			'PLK_ID'               => $PLK_ID,
			'PPI_ID'               => $PPI_ID,
			'PLK_NAMAKETERAMPILAN' => $PLK_NAMAKETERAMPILAN,
		);

		$res = $this->Crud->InsertData('program_layanan_kompensatoris', $data_insert);
		if ($res == 1) {
			redirect('Master/Plk', 'refresh');
		}
	}

	public function update_data() {
		$PLK_ID               = $_POST['PLK_ID'];
		$PPI_ID               = $_POST['PPI_ID'];
		$PLK_NAMAKETERAMPILAN = $_POST['PLK_NAMAKETERAMPILAN'];

		$data_insert = array(
			'PLK_ID'               => $PLK_ID,
			'PPI_ID'               => $PPI_ID,
			'PLK_NAMAKETERAMPILAN' => $PLK_NAMAKETERAMPILAN,
		);

		$where = array('PLK_ID' => $PLK_ID);
		$res   = $this->Crud->UpdateData('program_layanan_kompensatoris', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Plk', 'refresh');
		}
	}

	public function view_update_data($PLK_ID) {
		$temp = $this->Crud->GetPlk(" where PLK_ID = '$PLK_ID'");
		$data = array(
			"PLK_ID"               => $temp[0]['PLK_ID'],
			"PPI_ID"               => $temp[0]['PPI_ID'],
			"PLK_NAMAKETERAMPILAN" => $temp[0]['PLK_NAMAKETERAMPILAN'],

		);
		$this->load->view('header')->view('update/program_layanan_kompensatoris', $data)->view('footer');
	}

	public function view_delete($PLK_ID) {
		$temp = $this->Crud->GetPlk(" where PLK_ID = '$PLK_ID'");
		$data = array(
			"PLK_ID"               => $temp[0]['PLK_ID'],
			"PPI_ID"               => $temp[0]['PPI_ID'],
			"PLK_NAMAKETERAMPILAN" => $temp[0]['PLK_NAMAKETERAMPILAN'],

		);
		$this->load->view('header')->view('delete/program_layanan_kompensatoris', $data)->view('footer');
	}

}
