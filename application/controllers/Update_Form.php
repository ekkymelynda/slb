<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_Form extends CI_Controller {

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
		$this->load->view('header')->view('form/update/buku_pribadi_siswa')->view('footer');
	}

	public function jurnal_kelas()
	{
		$this->load->view('header')->view('form/update/jurnal_kelas')->view('footer');
	}

	public function jurnal_pembelajaran()
	{
		$this->load->view('header')->view('form/update/jurnal_pembelajaran')->view('footer');
	}

	public function data_asesmen_siswa1()
	{
		$this->load->view('header')->view('form/update/data_asesmen_siswa1')->view('footer');
	}

	public function data_asesmen_siswa2()
	{
		$this->load->view('header')->view('form/update/data_asesmen_siswa2')->view('footer');
	}

	public function data_asesmen_siswa3()
	{
		$this->load->view('header')->view('form/update/data_asesmen_siswa3')->view('footer');
	}

	public function data_asesmen_siswa4()
	{
		$this->load->view('header')->view('form/update/data_asesmen_siswa4')->view('footer');
	}

	public function data_asesmen_siswa5()
	{
		$this->load->view('header')->view('form/update/data_asesmen_siswa5')->view('footer');
	}

	public function data_asesmen_siswa6()
	{
		$this->load->view('header')->view('form/update/data_asesmen_siswa6')->view('footer');
	}

	public function data_asesmen_siswa7()
	{
		$this->load->view('header')->view('form/update/data_asesmen_siswa7')->view('footer');
	}

	public function data_asesmen_siswa8()
	{
		$this->load->view('header')->view('form/update/data_asesmen_siswa8')->view('footer');
	}

	public function data_asesmen_siswa9()
	{
		$this->load->view('header')->view('form/update/data_asesmen_siswa9')->view('footer');
	}
}
