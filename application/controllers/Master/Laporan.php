<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('laporan_model');
		$this->load->helper(array('url', 'form'));
	}

	public function daftar_guru()
    {
         $data['h'] = $this->laporan_model->laporan_daftar_guru();
         $this->load->view('header')->view('laporan/read/daftar_guru',$data)->view('footer');
    }

    public function jumlah_ptk() {
    	$data['h'] = $this->laporan_model->laporan_jumlah_ptk();
		$this->load->view('header')->view('laporan/read/jumlah_ptk',$data)->view('footer');
	}

	public function jumlah_peserta_didik() {
		$data['h'] = $this->laporan_model->laporan_jumlah_peserta_didik();
		$this->load->view('header')->view('laporan/read/jumlah_peserta_didik',$data)->view('footer');
	}

	public function siswa_menurut_usia() {
		$data['h'] = $this->laporan_model->laporan_siswa_usia1();
		$data['i'] = $this->laporan_model->laporan_siswa_usia2();
		$data['j'] = $this->laporan_model->laporan_siswa_usia3();
		$data['k'] = $this->laporan_model->laporan_siswa_usia4();
		$this->load->view('header')->view('laporan/read/siswa_menurut_usia',$data)->view('footer');
	}

	public function siswa_menurut_agama() {
		$data['h'] = $this->laporan_model->laporan_siswa_agama1();
		$data['i'] = $this->laporan_model->laporan_siswa_agama2();
		$data['j'] = $this->laporan_model->laporan_siswa_agama3();
		$this->load->view('header')->view('laporan/read/siswa_menurut_agama',$data)->view('footer');
	}

	public function siswa_menurut_penghasilan() {
		$data['h'] = $this->laporan_model->laporan_siswa_menurut_penghasilan1();
		$data['i'] = $this->laporan_model->laporan_siswa_menurut_penghasilan2();
		$data['j'] = $this->laporan_model->laporan_siswa_menurut_penghasilan3();
		$data['k'] = $this->laporan_model->laporan_siswa_menurut_penghasilan4();
		$data['l'] = $this->laporan_model->laporan_siswa_menurut_penghasilan5();
		$data['m'] = $this->laporan_model->laporan_siswa_menurut_penghasilan6();
		$data['n'] = $this->laporan_model->laporan_siswa_menurut_penghasilan7();
		$data['o'] = $this->laporan_model->laporan_siswa_menurut_penghasilan8();
		$this->load->view('header')->view('laporan/read/siswa_menurut_penghasilan',$data)->view('footer');
	}

	public function data_rombongan_belajar() {
		$data['h'] = $this->laporan_model->laporan_data_rombongan_belajar();
		$this->load->view('header')->view('laporan/read/data_rombongan_belajar')->view('footer');
	}

	public function data_peserta_didik() {
		$data['h'] = $this->laporan_model->data_peserta_didik();
		$this->load->view('header')->view('laporan/read/data_peserta_didik',$data)->view('footer');
	}

	/*public function daftar_guru() {
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
	}*/
}
?>