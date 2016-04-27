<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

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
		$this->load->view('header')->view('update/agama')->view('footer');
	}

	public function alat_transportasi()
	{
		$this->load->view('header')->view('update/alat_transportasi')->view('footer');
	}

	public function based_line()
	{
		$this->load->view('header')->view('update/based_line')->view('footer');
	}

	public function ciri_kepribadian()
	{
		$this->load->view('header')->view('update/ciri_kepribadian')->view('footer');
	}

	public function asesmen()
	{
		$this->load->view('header')->view('update/asesmen')->view('footer');
	}

	public function detil_jurnal_kelas()
	{
		$this->load->view('header')->view('update/detil_jurnal_kelas')->view('footer');
	}

	public function detil_jurnal_materi()
	{
		$this->load->view('header')->view('update/detil_jurnal_materi')->view('footer');
	}

	public function detil_kebutuhan()
	{
		$this->load->view('header')->view('update/detil_kebutuhan')->view('footer');
	}

	public function detil_penempatan()
	{
		$this->load->view('header')->view('update/detil_penempatan')->view('footer');
	}

	public function detil_rombongan_belajar_siswa()
	{
		$this->load->view('header')->view('update/detil_rombongan_belajar_siswa')->view('footer');
	}

	public function guru1()
	{
		$this->load->view('header')->view('update/guru1')->view('footer');
	}

	public function guru2()
	{
		$this->load->view('header')->view('update/guru2')->view('footer');
	}

	public function hasil_asesmen()
	{
		$this->load->view('header')->view('update/hasil_asesmen')->view('footer');
	}

	public function indikator_keberhasilan()
	{
		$this->load->view('header')->view('update/indikator_keberhasilan')->view('footer');
	}

	public function imunisasi()
	{
		$this->load->view('header')->view('update/imunisasi')->view('footer');
	}

	public function jurnal_kelas()
	{
		$this->load->view('header')->view('update/jurnal_kelas')->view('footer');
	}

	public function jurnal_materi()
	{
		$this->load->view('header')->view('update/jurnal_materi')->view('footer');
	}

	public function jenjang_pendidikan()
	{
		$this->load->view('header')->view('update/jenjang_pendidikan')->view('footer');
	}

	public function jurnal_pribadi_siswa()
	{
		$this->load->view('header')->view('update/jurnal_pribadi_siswa')->view('footer');
	}

	public function jenis_tinggal()
	{
		$this->load->view('header')->view('update/jenis_tinggal')->view('footer');
	}

	public function kecakapan_kompensatoris()
	{
		$this->load->view('header')->view('update/kecakapan_kompensatoris')->view('footer');
	}

	public function kekuatan_siswa()
	{
		$this->load->view('header')->view('update/kekuatan_siswa')->view('footer');
	}

	public function kebutuhan_khusus()
	{
		$this->load->view('header')->view('update/kebutuhan_khusus')->view('footer');
	}

	public function kebutuhan_siswa()
	{
		$this->load->view('header')->view('update/kebutuhan_siswa')->view('footer');
	}

	public function kelainan_tubuh()
	{
		$this->load->view('header')->view('update/kelainan_tubuh')->view('footer');
	}

	public function mata_pelajaran()
	{
		$this->load->view('header')->view('update/mata_pelajaran')->view('footer');
	}

	public function pekerjaan()
	{
		$this->load->view('header')->view('update/pekerjaan')->view('footer');
	}

	public function penghasilan()
	{
		$this->load->view('header')->view('update/penghasilan')->view('footer');
	}

	public function program_layanan_kompensatoris()
	{
		$this->load->view('header')->view('update/program_layanan_kompensatoris')->view('footer');
	}

	public function ppi()
	{
		$this->load->view('header')->view('update/ppi')->view('footer');
	}

	public function personal_terlibat()
	{
		$this->load->view('header')->view('update/personal_terlibat')->view('footer');
	}

	public function relasi_kebutuhan_khusus_siswa()
	{
		$this->load->view('header')->view('update/relasi_kebutuhan_khusus_siswa')->view('footer');
	}

	public function relasi_kepribadian_dan_siswa()
	{
		$this->load->view('header')->view('update/relasi_kepribadian_dan_siswa')->view('footer');
	}

	public function rombongan_belajar()
	{
		$this->load->view('header')->view('update/rombongan_belajar')->view('footer');
	}

	public function siswa1()
	{
		$this->load->view('header')->view('update/siswa1')->view('footer');
	}

	public function siswa2()
	{
		$this->load->view('header')->view('update/siswa2')->view('footer');
	}

	public function siswa3()
	{
		$this->load->view('header')->view('update/siswa3')->view('footer');
	}

	public function siswa4()
	{
		$this->load->view('header')->view('update/siswa4')->view('footer');
	}

	public function siswa5()
	{
		$this->load->view('header')->view('update/siswa5')->view('footer');
	}

	public function siswa6()
	{
		$this->load->view('header')->view('update/siswa6')->view('footer');
	}

	public function siswa7()
	{
		$this->load->view('header')->view('update/siswa7')->view('footer');
	}

	public function saudara_kandung()
	{
		$this->load->view('header')->view('update/saudara_kandung')->view('footer');
	}

	public function tim_pengembang()
	{
		$this->load->view('header')->view('update/tim_pengembang')->view('footer');
	}

	public function uraian_kegiatan()
	{
		$this->load->view('header')->view('update/uraian_kegiatan')->view('footer');
	}

	public function wali_murid1()
	{
		$this->load->view('header')->view('update/wali_murid1')->view('footer');
	}

	public function wali_murid2()
	{
		$this->load->view('header')->view('update/wali_murid2')->view('footer');
	}

	public function warganegara()
	{
		$this->load->view('header')->view('update/warganegara')->view('footer');
	}
}
