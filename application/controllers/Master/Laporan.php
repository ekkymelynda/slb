<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct() {
		parent::__construct();
		// Your own constructor code
		$this->load->model('Crud', '', TRUE);
		$this->load->helper(array('url', 'form'));
	}

	public function daftar_guru() {
		$data['guru'] = $this->Crud->GetGuru();
		$this->load->view('header')->view('laporan/read/daftar_guru', $data)->view('footer');
	}

	public function data_ptk() {
		$this->load->view('header')->view('laporan/read/data_ptk')->view('footer');
	}

	public function jumlah_ptk() {
		$this->load->view('header')->view('laporan/read/jumlah_ptk')->view('footer');
	}

	public function jumlah_peserta_didik() {
		$data['siswa_laki'] = $this->Crud->TotalRow('siswa','SW_JK','L');
		$data['siswa_perempuan'] = $this->Crud->TotalRow('siswa','SW_JK','P');
		// echo $data['siswa_laki'];
		$this->load->view('header')->view('laporan/read/jumlah_peserta_didik',$data)->view('footer');
	}
	public function siswa_menurut_usia() {
		$this->load->view('header')->view('laporan/read/siswa_menurut_usia')->view('footer');
	}

	public function siswa_menurut_agama() {
		$this->load->view('header')->view('laporan/read/siswa_menurut_agama')->view('footer');
	}

	public function siswa_menurut_penghasilan() {
		$this->load->view('header')->view('laporan/read/siswa_menurut_penghasilan')->view('footer');
	}

	public function data_rombongan_belajar() {
		$this->load->view('header')->view('laporan/read/data_rombongan_belajar')->view('footer');
	}

	public function data_peserta_didik() {
		$this->load->view('header')->view('laporan/read/data_peserta_didik')->view('footer');
	}

	public function data_asesmen_siswa() {
		$this->load->view('header')->view('laporan/read/data_asesmen_siswa')->view('footer');
	}
}