<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
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
		$data = $this->Crud->GetGuru();
		$this->load->view('header')->view('read/guru', array('data' => $data))->view('footer');
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/guru', array('data' => $data))->view('footer');
	}

	public function create_data() {
		$GR_ID            = $_POST['GR_ID'];
		$JP_ID            = $_POST['JP_ID'];
		$GR_NIP           = $_POST['GR_NIP'];
		$GR_NAMA          = $_POST['GR_NAMA'];
		$GR_GELAR         = $_POST['GR_GELAR'];
		$GR_JK            = $_POST['GR_JK'];
		$GR_JURUSAN       = $_POST['GR_JURUSAN'];
		$GR_SERTIFIKASI   = $_POST['GR_SERTIFIKASI'];
		$GR_KEPEGAWAIAN   = $_POST['GR_KEPEGAWAIAN'];
		$GR_JABATAN       = $_POST['GR_JABATAN'];
		$GR_TMTKERJA      = $_POST['GR_TMTKERJA'];
		$GR_TGSTAMBAH     = $_POST['GR_TGSTAMBAH'];
		$GR_MENGAJAR      = $_POST['GR_MENGAJAR'];
		$GR_JAMPERMGG     = $_POST['GR_JAMPERMGG'];
		$GR_NOIJAZAH      = $_POST['GR_NOIJAZAH'];
		$GR_NOSERTIFIKASI = $_POST['GR_NOSERTIFIKASI'];

		$data_insert = array(
			'GR_ID'            => $GR_ID,
			'JP_ID'            => $JP_ID,
			'GR_NIP'           => $GR_NIP,
			'GR_NAMA'          => $GR_NAMA,
			'GR_GELAR'         => $GR_GELAR,
			'GR_JK'            => $GR_JK,
			'GR_JURUSAN'       => $GR_JURUSAN,
			'GR_SERTIFIKASI'   => $GR_SERTIFIKASI,
			'GR_KEPEGAWAIAN'   => $GR_KEPEGAWAIAN,
			'GR_JABATAN'       => $GR_JABATAN,
			'GR_TMTKERJA'      => $GR_TMTKERJA,
			'GR_TGSTAMBAH'     => $GR_TGSTAMBAH,
			'GR_MENGAJAR'      => $GR_MENGAJAR,
			'GR_JAMPERMGG'     => $GR_JAMPERMGG,
			'GR_NOIJAZAH'      => $GR_NOIJAZAH,
			'GR_NOSERTIFIKASI' => $GR_NOSERTIFIKASI,
		);

		$res = $this->Crud->InsertData('guru', $data_insert);
		if ($res == 1) {
			redirect('Master/Guru', 'refresh');
		}
	}

	public function update_data() {
		$GR_ID            = $_POST['GR_ID'];
		$JP_ID            = $_POST['JP_ID'];
		$GR_NIP           = $_POST['GR_NIP'];
		$GR_NAMA          = $_POST['GR_NAMA'];
		$GR_GELAR         = $_POST['GR_GELAR'];
		$GR_JK            = $_POST['GR_JK'];
		$GR_JURUSAN       = $_POST['GR_JURUSAN'];
		$GR_SERTIFIKASI   = $_POST['GR_SERTIFIKASI'];
		$GR_KEPEGAWAIAN   = $_POST['GR_KEPEGAWAIAN'];
		$GR_JABATAN       = $_POST['GR_JABATAN'];
		$GR_TMTKERJA      = $_POST['GR_TMTKERJA'];
		$GR_TGSTAMBAH     = $_POST['GR_TGSTAMBAH'];
		$GR_MENGAJAR      = $_POST['GR_MENGAJAR'];
		$GR_JAMPERMGG     = $_POST['GR_JAMPERMGG'];
		$GR_NOIJAZAH      = $_POST['GR_NOIJAZAH'];
		$GR_NOSERTIFIKASI = $_POST['GR_NOSERTIFIKASI'];

		$data_insert = array(
			'GR_ID'            => $GR_ID,
			'JP_ID'            => $JP_ID,
			'GR_NIP'           => $GR_NIP,
			'GR_NAMA'          => $GR_NAMA,
			'GR_GELAR'         => $GR_GELAR,
			'GR_JK'            => $GR_JK,
			'GR_JURUSAN'       => $GR_JURUSAN,
			'GR_SERTIFIKASI'   => $GR_SERTIFIKASI,
			'GR_KEPEGAWAIAN'   => $GR_KEPEGAWAIAN,
			'GR_JABATAN'       => $GR_JABATAN,
			'GR_TMTKERJA'      => $GR_TMTKERJA,
			'GR_TGSTAMBAH'     => $GR_TGSTAMBAH,
			'GR_MENGAJAR'      => $GR_MENGAJAR,
			'GR_JAMPERMGG'     => $GR_JAMPERMGG,
			'GR_NOIJAZAH'      => $GR_NOIJAZAH,
			'GR_NOSERTIFIKASI' => $GR_NOSERTIFIKASI,
		);
		$where = array('GR_ID' => $GR_ID);
		$res   = $this->Crud->UpdateData('guru', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Guru', 'refresh');
		}
	}

	public function view_update_data($GR_ID) {
		$temp = $this->Crud->GetGuru(" where GR_ID = '$GR_ID'");
		$data = array(
			"GR_ID"            => $temp[0]['GR_ID'],
			"JP_ID"            => $temp[0]['JP_ID'],
			"GR_NIP"           => $temp[0]['GR_NIP'],
			"GR_NAMA"          => $temp[0]['GR_NAMA'],
			"GR_GELAR"         => $temp[0]['GR_GELAR'],
			"GR_JK"            => $temp[0]['GR_JK'],
			"GR_JURUSAN"       => $temp[0]['GR_JURUSAN'],
			"GR_SERTIFIKASI"   => $temp[0]['GR_SERTIFIKASI'],
			"GR_KEPEGAWAIAN"   => $temp[0]['GR_KEPEGAWAIAN'],
			"GR_JABATAN"       => $temp[0]['GR_JABATAN'],
			"GR_TMTKERJA"      => $temp[0]['GR_TMTKERJA'],
			"GR_TGSTAMBAH"     => $temp[0]['GR_TGSTAMBAH'],
			"GR_MENGAJAR"      => $temp[0]['GR_MENGAJAR'],
			"GR_JAMPERMGG"     => $temp[0]['GR_JAMPERMGG'],
			"GR_NOIJAZAH"      => $temp[0]['GR_NOIJAZAH'],
			"GR_NOSERTIFIKASI" => $temp[0]['GR_NOSERTIFIKASI'],
		);
		$this->load->view('header')->view('update/guru', $data)->view('footer');
	}

	public function delete($id) {
		$where = array('GR_ID' => $id);
		$res   = $this->Crud->DeleteData('guru', $where);
		if ($res == 1) {
			redirect('Master/Guru', 'refresh');
		}
	}

	public function view_delete($GR_ID) {
		$temp = $this->Crud->GetGuru(" where GR_ID = '$GR_ID'");
		$data = array(
			"GR_ID"            => $temp[0]['GR_ID'],
			"JP_ID"            => $temp[0]['JP_ID'],
			"GR_NIP"           => $temp[0]['GR_NIP'],
			"GR_NAMA"          => $temp[0]['GR_NAMA'],
			"GR_GELAR"         => $temp[0]['GR_GELAR'],
			"GR_JK"            => $temp[0]['GR_JK'],
			"GR_JURUSAN"       => $temp[0]['GR_JURUSAN'],
			"GR_SERTIFIKASI"   => $temp[0]['GR_SERTIFIKASI'],
			"GR_KEPEGAWAIAN"   => $temp[0]['GR_KEPEGAWAIAN'],
			"GR_JABATAN"       => $temp[0]['GR_JABATAN'],
			"GR_TMTKERJA"      => $temp[0]['GR_TMTKERJA'],
			"GR_TGSTAMBAH"     => $temp[0]['GR_TGSTAMBAH'],
			"GR_MENGAJAR"      => $temp[0]['GR_MENGAJAR'],
			"GR_JAMPERMGG"     => $temp[0]['GR_JAMPERMGG'],
			"GR_NOIJAZAH"      => $temp[0]['GR_NOIJAZAH'],
			"GR_NOSERTIFIKASI" => $temp[0]['GR_NOSERTIFIKASI'],
		);
		$this->load->view('header')->view('delete/guru', $data)->view('footer');
	}

	public function view_detail($GR_ID) {
		$temp = $this->Crud->GetGuru("where GR_ID = '$GR_ID'");
		$data = array(
			"GR_ID"            => $temp[0]['GR_ID'],
			"JP_ID"            => $temp[0]['JP_ID'],
			"GR_NIP"           => $temp[0]['GR_NIP'],
			"GR_NAMA"          => $temp[0]['GR_NAMA'],
			"GR_GELAR"         => $temp[0]['GR_GELAR'],
			"GR_JK"            => $temp[0]['GR_JK'],
			"GR_JURUSAN"       => $temp[0]['GR_JURUSAN'],
			"GR_SERTIFIKASI"   => $temp[0]['GR_SERTIFIKASI'],
			"GR_KEPEGAWAIAN"   => $temp[0]['GR_KEPEGAWAIAN'],
			"GR_JABATAN"       => $temp[0]['GR_JABATAN'],
			"GR_TMTKERJA"      => $temp[0]['GR_TMTKERJA'],
			"GR_TGSTAMBAH"     => $temp[0]['GR_TGSTAMBAH'],
			"GR_MENGAJAR"      => $temp[0]['GR_MENGAJAR'],
			"GR_JAMPERMGG"     => $temp[0]['GR_JAMPERMGG'],
			"GR_NOIJAZAH"      => $temp[0]['GR_NOIJAZAH'],
			"GR_NOSERTIFIKASI" => $temp[0]['GR_NOSERTIFIKASI'],
		);
		$this->load->view('header')->view('Detail/guru', $data)->view('footer');
	}
}
