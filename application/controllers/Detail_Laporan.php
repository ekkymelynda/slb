<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Laporan extends CI_Controller {

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
	public function data_peserta_didik()
	{
		$this->load->view('header')->view('laporan/detail/data_peserta_didik')->view('footer');
	}

	public function data_ptk()
	{
		$this->load->view('header')->view('laporan/detail/data_ptk')->view('footer');
	}

	public function data_asesmen_siswa()
	{
		$this->load->view('header')->view('laporan/detail/data_asesmen_siswa')->view('footer');
	}
}
