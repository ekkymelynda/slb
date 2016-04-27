<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Form extends CI_Controller {

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
	public function buku_pribadi_siswa()
	{
		$this->load->view('header')->view('form/detail/buku_pribadi_siswa')->view('footer');
	}

	public function jurnal_kelas()
	{
		$this->load->view('header')->view('form/detail/jurnal_kelas')->view('footer');
	}

	public function jurnal_pembelajaran()
	{
		$this->load->view('header')->view('form/detail/jurnal_pembelajaran')->view('footer');
	}

	public function data_asesmen_siswa()
	{
		$this->load->view('header')->view('form/detail/data_asesmen_siswa')->view('footer');
	}
}
