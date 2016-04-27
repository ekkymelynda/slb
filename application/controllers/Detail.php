<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

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
	public function detil_jurnal_materi()
	{
		$this->load->view('header')->view('detail/detil_jurnal_materi')->view('footer');
	}

	public function guru()
	{
		$this->load->view('header')->view('detail/guru')->view('footer');
	}

	public function ppi()
	{
		$this->load->view('header')->view('detail/ppi')->view('footer');
	}

	public function siswa()
	{
		$this->load->view('header')->view('detail/siswa')->view('footer');
	}

	public function wali_murid()
	{
		$this->load->view('header')->view('detail/wali_murid')->view('footer');
	}
}
