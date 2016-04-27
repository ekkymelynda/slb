<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Read extends CI_Controller {
	function __construct() {
	parent::__construct();
	$this->load->model('Crud','',TRUE);
	$this->load->helper(array('url','form'));
	}

	public function agama()
	{
		$this->load->view('header')->view('read/agama')->view('footer');
	}

	public function alat_transportasi()
	{
		$this->load->view('header')->view('read/alat_transportasi')->view('footer');
	}

	public function asesmen()
	{
		$this->load->view('header')->view('read/asesmen')->view('footer');
	}

	public function based_line()
	{
		$this->load->view('header')->view('read/based_line')->view('footer');
	}

	public function ciri_kepribadian()
	{
		$this->load->view('header')->view('read/ciri_kepribadian')->view('footer');
	}

	public function detil_jurnal_kelas()
	{
		$this->load->view('header')->view('read/detil_jurnal_kelas')->view('footer');
	}

	public function detil_jurnal_materi()
	{
		$this->load->view('header')->view('read/detil_jurnal_materi')->view('footer');
	}

	public function detil_kebutuhan()
	{
		$this->load->view('header')->view('read/detil_kebutuhan')->view('footer');
	}

	public function detil_penempatan()
	{
		$this->load->view('header')->view('read/detil_penempatan')->view('footer');
	}

	public function detil_rombongan_belajar_siswa()
	{
		$this->load->view('header')->view('read/detil_rombongan_belajar_siswa')->view('footer');
	}

	public function guru()
	{
		$this->load->view('header')->view('read/guru')->view('footer');
	}

	public function hasil_asesmen()
	{
		$this->load->view('header')->view('read/hasil_asesmen')->view('footer');
	}

	public function imunisasi()
	{
		$this->load->view('header')->view('read/imunisasi')->view('footer');
	}

	public function indikator_keberhasilan()
	{
		$this->load->view('header')->view('read/indikator_keberhasilan')->view('footer');
	}

	public function jenis_tinggal()
	{
		$this->load->view('header')->view('read/jenis_tinggal')->view('footer');
	}

	public function jenjang_pendidikan()
	{
		$this->load->view('header')->view('read/jenjang_pendidikan')->view('footer');
	}

	public function jurnal_kelas()
	{
		$this->load->view('header')->view('read/jurnal_kelas')->view('footer');
	}

	public function jurnal_materi()
	{
		$this->load->view('header')->view('read/jurnal_materi')->view('footer');
	}

	public function jurnal_pribadi_siswa()
	{
		$this->load->view('header')->view('read/jurnal_pribadi_siswa')->view('footer');
	}

	public function kebutuhan_khusus()
	{
		$this->load->view('header')->view('read/kebutuhan_khusus')->view('footer');
	}

	public function kebutuhan_siswa()
	{
		$this->load->view('header')->view('read/kebutuhan_siswa')->view('footer');
	}

	public function kecakapan_kompensatoris()
	{
		$this->load->view('header')->view('read/kecakapan_kompensatoris')->view('footer');
	}

	public function kekuatan_siswa()
	{
		$this->load->view('header')->view('read/kekuatan_siswa')->view('footer');
	}

	public function kelainan_tubuh()
	{
		$this->load->view('header')->view('read/kelainan_tubuh')->view('footer');
	}

	public function mata_pelajaran()
	{
		$this->load->view('header')->view('read/mata_pelajaran')->view('footer');
	}

	public function pekerjaan()
	{
		$this->load->view('header')->view('read/pekerjaan')->view('footer');
	}

	public function penghasilan()
	{
		$this->load->view('header')->view('read/penghasilan')->view('footer');
	}

	public function personal_terlibat()
	{
		$this->load->view('header')->view('read/personal_terlibat')->view('footer');
	}

	public function ppi()
	{
		$this->load->view('header')->view('read/ppi')->view('footer');
	}

	public function program_layanan_kompensatoris()
	{
		$this->load->view('header')->view('read/program_layanan_kompensatoris')->view('footer');
	}

	public function relasi_kebutuhan_khusus_siswa()
	{
		$this->load->view('header')->view('read/relasi_kebutuhan_khusus_siswa')->view('footer');
	}

	public function relasi_kepribadian_dan_siswa()
	{
		$this->load->view('header')->view('read/relasi_kepribadian_dan_siswa')->view('footer');
	}

	public function rombongan_belajar()
	{
		$this->load->view('header')->view('read/rombongan_belajar')->view('footer');
	}

	public function saudara_kandung()
	{
		$this->load->view('header')->view('read/saudara_kandung')->view('footer');
	}

	public function siswa()
	{
		$data['siswa'] = $this->Crud->GetSiswa();
		$this->load->view('header')->view('read/siswa',$data)->view('footer');
	}

	public function tim_pengembang()
	{
		$this->load->view('header')->view('read/tim_pengembang')->view('footer');
	}

	public function uraian_kegiatan()
	{
		$this->load->view('header')->view('read/uraian_kegiatan')->view('footer');
	}

	public function wali_murid()
	{
		$this->load->view('header')->view('read/wali_murid')->view('footer');
	}

	public function warganegara()
	{
		$this->load->view('header')->view('read/warganegara')->view('footer');
	}

	public function pendaftar()
	{
		
     	//$this->load->model('pendaftar/Mod_pendaftar2','',TRUE);
  		// $row = $this->Mod_pendaftar2->getById($SW_ID);
  		// if($row==false) echo 'SALAH WOY';
  		// else
  		// echo var_dump($row);
		$data['pendaftar'] = $this->Crud->GetPendaftar();

		$this->load->view('header')->view('read/pendaftar',$data)->view('footer');
	}
}
