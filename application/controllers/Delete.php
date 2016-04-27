<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

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
	public function agama()
	{
		$this->load->view('header')->view('delete/agama')->view('footer');
	}

	public function alat_transportasi()
	{
		$this->load->view('header')->view('delete/alat_transportasi')->view('footer');
	}

	public function based_line()
	{
		$this->load->view('header')->view('delete/based_line')->view('footer');
	}

	public function ciri_kepribadian()
	{
		$this->load->view('header')->view('delete/ciri_kepribadian')->view('footer');
	}

	public function detil_jurnal_kelas()
	{
		$this->load->view('header')->view('delete/detil_jurnal_kelas')->view('footer');
	}

	public function detil_jurnal_materi()
	{
		$this->load->view('header')->view('delete/detil_jurnal_materi')->view('footer');
	}

	public function detil_kebutuhan()
	{
		$this->load->view('header')->view('delete/detil_kebutuhan')->view('footer');
	}

	public function detil_penempatan()
	{
		$this->load->view('header')->view('delete/detil_penempatan')->view('footer');
	}

	public function detil_rombongan_belajar_siswa()
	{
		$this->load->view('header')->view('delete/detil_rombongan_belajar_siswa')->view('footer');
	}

	public function guru()
	{
		$this->load->view('header')->view('delete/guru')->view('footer');
	}

	public function hasil_asesmen()
	{
		$this->load->view('header')->view('delete/hasil_asesmen')->view('footer');
	}

	public function imunisasi()
	{
		$this->load->view('header')->view('delete/imunisasi')->view('footer');
	}

	public function indikator_keberhasilan()
	{
		$this->load->view('header')->view('delete/indikator_keberhasilan')->view('footer');
	}

	public function jenis_tinggal()
	{
		$this->load->view('header')->view('delete/jenis_tinggal')->view('footer');
	}

	public function jenjang_pendidikan()
	{
		$this->load->view('header')->view('delete/jenjang_pendidikan')->view('footer');
	}

	public function jurnal_kelas()
	{
		$this->load->view('header')->view('delete/jurnal_kelas')->view('footer');
	}

	public function jurnal_materi()
	{
		$this->load->view('header')->view('delete/jurnal_materi')->view('footer');
	}

	public function jurnal_pribadi_siswa()
	{
		$this->load->view('header')->view('delete/jurnal_pribadi_siswa')->view('footer');
	}

	public function kebutuhan_khusus()
	{
		$this->load->view('header')->view('delete/kebutuhan_khusus')->view('footer');
	}

	public function kebutuhan_siswa()
	{
		$this->load->view('header')->view('delete/kebutuhan_siswa')->view('footer');
	}

	public function kecakapan_kompensatoris()
	{
		$this->load->view('header')->view('delete/kecakapan_kompensatoris')->view('footer');
	}

	public function kekuatan_siswa()
	{
		$this->load->view('header')->view('delete/kekuatan_siswa')->view('footer');
	}

	public function kelainan_tubuh()
	{
		$this->load->view('header')->view('delete/kelainan_tubuh')->view('footer');
	}

	public function mata_pelajaran()
	{
		$this->load->view('header')->view('delete/mata_pelajaran')->view('footer');
	}

	public function pekerjaan()
	{
		$this->load->view('header')->view('delete/pekerjaan')->view('footer');
	}

	public function penghasilan()
	{
		$this->load->view('header')->view('delete/penghasilan')->view('footer');
	}

	public function personal_terlibat()
	{
		$this->load->view('header')->view('delete/personal_terlibat')->view('footer');
	}

	public function ppi()
	{
		$this->load->view('header')->view('delete/ppi')->view('footer');
	}

	public function program_layanan_kompensatoris()
	{
		$this->load->view('header')->view('delete/program_layanan_kompensatoris')->view('footer');
	}

	public function relasi_kebutuhan_khusus_siswa()
	{
		$this->load->view('header')->view('delete/relasi_kebutuhan_khusus_siswa')->view('footer');
	}

	public function relasi_kepribadian_dan_siswa()
	{
		$this->load->view('header')->view('delete/relasi_kepribadian_dan_siswa')->view('footer');
	}

	public function rombongan_belajar()
	{
		$this->load->view('header')->view('delete/rombongan_belajar')->view('footer');
	}

	public function saudara_kandung()
	{
		$this->load->view('header')->view('delete/saudara_kandung')->view('footer');
	}

	public function siswa()
	{
		$this->load->view('header')->view('delete/siswa')->view('footer');
	}

	public function tim_pengembang()
	{
		$this->load->view('header')->view('delete/tim_pengembang')->view('footer');
	}

	public function uraian_kegiatan()
	{
		$this->load->view('header')->view('delete/uraian_kegiatan')->view('footer');
	}

	public function wali_murid()
	{
		$this->load->view('header')->view('delete/wali_murid')->view('footer');
	}

	public function warganegara()
	{
		$this->load->view('header')->view('delete/warganegara')->view('footer');
	}
}
