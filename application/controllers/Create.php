<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Crud', '', TRUE);
		// Your own constructor code

		$this->load->model('pendaftar/Mod_pendaftar2', '', TRUE);
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
	public function agama() {
		$this->load->view('header')->view('create/agama')->view('footer');
	}

	public function alat_transportasi() {
		$this->load->view('header')->view('create/alat_transportasi')->view('footer');
	}

	public function based_line() {
		$this->load->view('header')->view('create/based_line')->view('footer');
	}

	public function ciri_kepribadian() {
		$this->load->view('header')->view('create/ciri_kepribadian')->view('footer');
	}

	public function asesmen() {
		$this->load->view('header')->view('create/asesmen')->view('footer');
	}

	public function detil_jurnal_kelas() {
		$this->load->view('header')->view('create/detil_jurnal_kelas')->view('footer');
	}

	public function detil_jurnal_materi() {
		$this->load->view('header')->view('create/detil_jurnal_materi')->view('footer');
	}

	public function detil_kebutuhan() {
		$this->load->view('header')->view('create/detil_kebutuhan')->view('footer');
	}

	public function detil_penempatan() {
		$this->load->view('header')->view('create/detil_penempatan')->view('footer');
	}

	public function detil_rombongan_belajar_siswa() {
		$this->load->view('header')->view('create/detil_rombongan_belajar_siswa')->view('footer');
	}

	public function guru() {
		$this->load->view('header')->view('create/guru')->view('footer');
	}

	public function guru2() {
		$this->load->view('header')->view('create/guru2')->view('footer');
	}

	public function hasil_asesmen() {
		$this->load->view('header')->view('create/hasil_asesmen')->view('footer');
	}

	public function indikator_keberhasilan() {
		$this->load->view('header')->view('create/indikator_keberhasilan')->view('footer');
	}

	public function imunisasi() {
		$this->load->view('header')->view('create/imunisasi')->view('footer');
	}

	public function jurnal_kelas() {
		$this->load->view('header')->view('create/jurnal_kelas')->view('footer');
	}

	public function jurnal_materi() {
		$this->load->view('header')->view('create/jurnal_materi')->view('footer');
	}

	public function jenjang_pendidikan() {
		$this->load->view('header')->view('create/jenjang_pendidikan')->view('footer');
	}

	public function jurnal_pribadi_siswa() {
		$this->load->view('header')->view('create/jurnal_pribadi_siswa')->view('footer');
	}

	public function jenis_tinggal() {
		$this->load->view('header')->view('create/jenis_tinggal')->view('footer');
	}

	public function kecakapan_kompensatoris() {
		$this->load->view('header')->view('create/kecakapan_kompensatoris')->view('footer');
	}

	public function kekuatan_siswa() {
		$this->load->view('header')->view('create/kekuatan_siswa')->view('footer');
	}

	public function kebutuhan_khusus() {
		$this->load->view('header')->view('create/kebutuhan_khusus')->view('footer');
	}

	public function kebutuhan_siswa() {
		$this->load->view('header')->view('create/kebutuhan_siswa')->view('footer');
	}

	public function kelainan_tubuh() {
		$this->load->view('header')->view('create/kelainan_tubuh')->view('footer');
	}

	public function mata_pelajaran() {
		$this->load->view('header')->view('create/mata_pelajaran')->view('footer');
	}

	public function pekerjaan() {
		$this->load->view('header')->view('create/pekerjaan')->view('footer');
	}

	public function penghasilan() {
		$this->load->view('header')->view('create/penghasilan')->view('footer');
	}

	public function program_layanan_kompensatoris() {
		$this->load->view('header')->view('create/program_layanan_kompensatoris')->view('footer');
	}

	public function ppi() {
		$this->load->view('header')->view('create/ppi')->view('footer');
	}

	public function personal_terlibat() {
		$this->load->view('header')->view('create/personal_terlibat')->view('footer');
	}

	public function relasi_kebutuhan_khusus_siswa() {
		$data['siswa']      = $this->Crud->GetSiswa();
		$data['keb_khusus'] = $this->Crud->GetKk();
		$this->load->view('header')->view('create/relasi_kebutuhan_khusus_siswa', $data)->view('footer');
	}

	public function relasi_kepribadian_dan_siswa() {
		$this->load->view('header')->view('create/relasi_kepribadian_dan_siswa')->view('footer');
	}

	public function rombongan_belajar() {
		$this->load->view('header')->view('create/rombongan_belajar')->view('footer');
	}

	public function siswa1() {
		$this->load->view('header')->view('create/siswa1')->view('footer');
	}

	public function siswa2() {
		$this->load->view('header')->view('create/siswa2')->view('footer');
	}

	public function siswa3() {
		$this->load->view('header')->view('create/siswa3')->view('footer');
	}

	public function siswa4() {
		$this->load->view('header')->view('create/siswa4')->view('footer');
	}

	public function siswa5() {
		$this->load->view('header')->view('create/siswa5')->view('footer');
	}

	public function siswa6() {
		$this->load->view('header')->view('create/siswa6')->view('footer');
	}

	public function siswa7() {
		$this->load->view('header')->view('create/siswa7')->view('footer');
	}

	public function saudara_kandung() {
		$this->load->view('header')->view('create/saudara_kandung')->view('footer');
	}

	public function tim_pengembang() {
		$this->load->view('header')->view('create/tim_pengembang')->view('footer');
	}

	public function uraian_kegiatan() {
		$this->load->view('header')->view('create/uraian_kegiatan')->view('footer');
	}

	public function wali_murid() {
		$this->load->view('header')->view('create/wali_murid')->view('footer');
	}

	public function wali_murid2() {
		$this->load->view('header')->view('create/wali_murid2')->view('footer');
	}

	public function warganegara() {
		$this->load->view('header')->view('create/warganegara')->view('footer');
	}

	public function pendaftar() {
		//$this->load->view('header')->view('create/warganegara')->view('footer');
		//$data['agama'] = $this->Crud->GetAgama();
		//var_dump($data);
		//this->load->view('pendaftaran/syarat',$data);
		if ($this->input->post('submit')) {
			$this->Mod_pendaftar2->tambah();
		}
		$this->load->view('pendaftaran/2c_a');
	}
}
