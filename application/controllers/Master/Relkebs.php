<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relkebs extends CI_Controller {
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
		$data = $this->Crud->GetRkksw();
		$this->load->view('header')->view('read/relasi_kebutuhan_khusus_siswa', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$SW_ID = $_POST['SW_ID'];
		$KK_ID = $_POST['KK_ID'];

		$data_insert = array(
			'SW_ID' => $SW_ID,
			'KK_ID' => $KK_ID,
		);
		$res = $this->Crud->InsertData('rel_kebkhusus_sw', $data_insert);
		if ($res == 1) {
			redirect('Master/Relkebs', 'refresh');
		}
	}

	public function update_data() {
		$SW_ID = $_POST['SW_ID'];
		$KK_ID = $_POST['KK_ID'];

		$data_insert = array(
			'SW_ID' => $SW_ID,
			'KK_ID' => $KK_ID,
		);
		$where = array('SW_ID' => $SW_ID);
		$res   = $this->Crud->UpdateData('rel_kebkhusus_sw', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Relkebs', 'refresh');
		}
	}

	public function view_update_data($SW_ID) {
		$temp = $this->Crud->GetRkksw(" where SW_ID = '$SW_ID'");

		$data = array(
			'SW_ID' => $temp[0]['SW_ID'],
			'KK_ID' => $temp[0]['KK_ID'],
		);
		$this->load->view('header')->view('update/relasi_kebutuhan_khusus_siswa', $data)->view('footer');
	}

	public function view_delete($SW_ID) {
		$temp = $this->Crud->GetRkksw(" where SW_ID = '$SW_ID'");
		$data = array(
			"SW_ID" => $temp[0]['SW_ID'],
			"KK_ID" => $temp[0]['KK_ID'],
		);
		$this->load->view('header')->view('delete/relasi_kebutuhan_khusus_siswa', $data)->view('footer');
	}

	public function delete($SW_ID) {
		$where = array('SW_ID' => $SW_ID);
		$res   = $this->Crud->DeleteData('rel_kebkhusus_sw', $where);
		if ($res == 1) {
			redirect('Master/Relkebs', 'refresh');
		}
	}

}
