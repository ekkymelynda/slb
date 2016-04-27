<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nav extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model('Crud','',TRUE);
			$this->load->helper(array('url','form'));
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
	
public function welcome()
	{
		$this->load->view('welcome2');
	}
	public function login()
	{
		$this->load->view('login/header')->view('login/content');
	}

	public function dashboard()
	{
		$this->load->view('header')->view('nav/dashboard')->view('footer');
	}

	public function predashboard()
	{
		$this->load->view('header')->view('nav/predashboard')->view('footer');
	}

	public function siswa()
	{
		$this->load->view('header')->view('nav/siswa')->view('footer');
	}

	public function guru()
	{
		$this->load->view('header')->view('nav/guru')->view('footer');
	}


	public function syarat()
	{
		$this->load->view('header')->view('pendaftaran/syarat');
	}

	public function pendaftaran()
	{
		$data['agama'] = $this->Crud->GetAgama();
		$data['kewarganegaraan'] = $this->Crud->GetWarganegara();
		$this->load->view('pendaftaran/index',$data);

	}

	public function form()
	{
		$this->load->view('header')->view('nav/form')->view('footer');
	}

	public function laporan()
	{
		$this->load->view('header')->view('nav/laporan')->view('footer');
	}

	public function profil_sekolah()
	{
		$this->load->view('header')->view('nav/profil_sekolah')->view('footer');
	}

	public function profil_pengguna()
	{
		$this->load->view('header')->view('nav/profil_pengguna')->view('footer');
	}

	public function grafik()
	{
		$this->load->view('header')->view('nav/grafik')->view('footer');
	}

	public function grafik_siswa()
	{
		$this->load->view('header')->view('nav/grafik_siswa')->view('footer');
	}

	public function grafik_guru()
	{
		$this->load->view('header')->view('nav/grafik_guru')->view('footer');
	}
}
