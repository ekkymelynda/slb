<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walmur extends CI_Controller {
	function __construct() {
		parent::__construct();
		// Your own constructor code
		$this->load->model('Crud', '', TRUE);
		$this->load->helper(array('url', 'form'));
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
	public function index() {
		$data = $this->Crud->GetWm();
		$this->load->view('header')->view('read/wali_murid', array('data' => $data))->view('footer');
	}

	public function delete($id) {
		$where = array('WM_ID' => $id);
		$res   = $this->Crud->DeleteData('wali_murid', $where);
	}

	public function view_create_data() {
		$data['warganegara'] = $this->Crud->GetWarganegara();
		$data['pekerjaan'] = $this->Crud->GetPekerjaan();
		$data['penghasilan'] = $this->Crud->GetPenghasilan();
		$data['keb_khusus'] = $this->Crud->GetKk();
		$data['jenjang_pendidikan'] = $this->Crud->GetJp();
		$data['siswa'] = $this->Crud->GetSiswa();
		$this->load->view('header')->view('create/wali_murid',$data)->view('footer');
	}

	public function create_data() {
		//$WM_ID = $_POST['WM_ID'];
		$KWN_ID = $_POST['KWN_ID'];
		$PK_ID  = $_POST['PK_ID'];
		$PH_ID  = $_POST['PH_ID'];
		$KK_ID  = $_POST['KK_ID'];

		$JP_ID          = $_POST['JP_ID'];
		$SW_ID          = $_POST['SW_ID'];
		$WM_SEBAGAI     = $_POST['WM_SEBAGAI'];
		$WM_NAMA        = $_POST['WM_NAMA'];
		$WM_TEMPATLAHIR = $_POST['WM_TEMPATLAHIR'];

		$WM_TGLLAHIR         = $_POST['WM_TGLLAHIR'];
		$WM_INSKERJA         = $_POST['WM_INSKERJA'];
		$WM_JABATANKERJA     = $_POST['WM_JABATANKERJA'];
		$WM_PANGKAT          = $_POST['WM_PANGKAT'];
		$WM_LAMAKERJAPERHARI = $_POST['WM_LAMAKERJAPERHARI'];

		$WM_JMLTANGGUNG  = $_POST['WM_JMLTANGGUNG'];
		$WM_ALAMATRUMAH  = $_POST['WM_ALAMATRUMAH'];
		$WM_ALAMATKANTOR = $_POST['WM_ALAMATKANTOR'];
		$WM_TELP         = $_POST['WM_TELP'];
		$WM_USIANIKAH    = $_POST['WM_USIANIKAH'];

		$WM_KESEMPATANKOM = $_POST['WM_KESEMPATANKOM'];

		$data_insert = array(
			//'WM_ID' => $WM_ID,
			'KWN_ID'              => $KWN_ID,
			'PK_ID'               => $PK_ID,
			'PH_ID'               => $PH_ID,
			'KK_ID'               => $KK_ID,

			'JP_ID'               => $JP_ID,
			'SW_ID'               => $SW_ID,
			'WM_SEBAGAI'          => $WM_SEBAGAI,
			'WM_NAMA'             => $WM_NAMA,
			'WM_TEMPATLAHIR'      => $WM_TEMPATLAHIR,

			'WM_TGLLAHIR'         => $WM_TGLLAHIR,
			'WM_INSKERJA'         => $WM_INSKERJA,
			'WM_JABATANKERJA'     => $WM_JABATANKERJA,
			'WM_PANGKAT'          => $WM_PANGKAT,
			'WM_LAMAKERJAPERHARI' => $WM_LAMAKERJAPERHARI,

			'WM_JMLTANGGUNG'      => $WM_JMLTANGGUNG,
			'WM_ALAMATRUMAH'      => $WM_ALAMATRUMAH,
			'WM_ALAMATKANTOR'     => $WM_ALAMATKANTOR,
			'WM_TELP'             => $WM_TELP,
			'WM_USIANIKAH'        => $WM_USIANIKAH,

			'WM_KESEMPATANKOM'    => $WM_KESEMPATANKOM,
		);

		$res = $this->Crud->InsertData('wali_murid', $data_insert);
		redirect('Master/Walmur/index');
	}

	public function update_data() {
		$WM_ID  = $_POST['WM_ID'];
		$KWN_ID = $_POST['KWN_ID'];
		$PK_ID  = $_POST['PK_ID'];
		$PH_ID  = $_POST['PH_ID'];
		$KK_ID  = $_POST['KK_ID'];

		$JP_ID          = $_POST['JP_ID'];
		$SW_ID          = $_POST['SW_ID'];
		$WM_SEBAGAI     = $_POST['WM_SEBAGAI'];
		$WM_NAMA        = $_POST['WM_NAMA'];
		$WM_TEMPATLAHIR = $_POST['WM_TEMPATLAHIR'];

		$WM_TGLLAHIR         = $_POST['WM_TGLLAHIR'];
		$WM_INSKERJA         = $_POST['WM_INSKERJA'];
		$WM_JABATANKERJA     = $_POST['WM_JABATANKERJA'];
		$WM_PANGKAT          = $_POST['WM_PANGKAT'];
		$WM_LAMAKERJAPERHARI = $_POST['WM_LAMAKERJAPERHARI'];

		$WM_JMLTANGGUNG  = $_POST['WM_JMLTANGGUNG'];
		$WM_ALAMATRUMAH  = $_POST['WM_ALAMATRUMAH'];
		$WM_ALAMATKANTOR = $_POST['WM_ALAMATKANTOR'];
		$WM_TELP         = $_POST['WM_TELP'];
		$WM_USIANIKAH    = $_POST['WM_USIANIKAH'];

		$WM_KESEMPATANKOM = $_POST['WM_KESEMPATANKOM'];

		$data_insert = array(
			'WM_ID'               => $WM_ID,
			'KWN_ID'              => $KWN_ID,
			'PK_ID'               => $PK_ID,
			'PH_ID'               => $PH_ID,
			'KK_ID'               => $KK_ID,

			'JP_ID'               => $JP_ID,
			'SW_ID'               => $SW_ID,
			'WM_SEBAGAI'          => $WM_SEBAGAI,
			'WM_NAMA'             => $WM_NAMA,
			'WM_TEMPATLAHIR'      => $WM_TEMPATLAHIR,

			'WM_TGLLAHIR'         => $WM_TGLLAHIR,
			'WM_INSKERJA'         => $WM_INSKERJA,
			'WM_JABATANKERJA'     => $WM_JABATANKERJA,
			'WM_PANGKAT'          => $WM_PANGKAT,
			'WM_LAMAKERJAPERHARI' => $WM_LAMAKERJAPERHARI,

			'WM_JMLTANGGUNG'      => $WM_JMLTANGGUNG,
			'WM_ALAMATRUMAH'      => $WM_ALAMATRUMAH,
			'WM_ALAMATKANTOR'     => $WM_ALAMATKANTOR,
			'WM_TELP'             => $WM_TELP,
			'WM_USIANIKAH'        => $WM_USIANIKAH,

			'WM_KESEMPATANKOM'    => $WM_KESEMPATANKOM,
		);

		$where = array('WM_ID' => $WM_ID);
		$res   = $this->Crud->UpdateData('wali_murid', $data_insert, $where);
	}

	public function view_update_data($WM_ID) {
		// $warganegara_join = $this->Crud->warganegara();
		$data['warganegara'] = $this->Crud->GetWarganegara();
		$data['pekerjaan'] = $this->Crud->GetPekerjaan();
		$data['penghasilan'] = $this->Crud->GetPenghasilan();
		$data['keb_khusus'] = $this->Crud->GetKk();
		$data['jenjang_pendidikan'] = $this->Crud->GetJp();
		$data['siswa'] = $this->Crud->GetSiswa();
		
		$temp = $this->Crud->GetWm(" where WM_ID = '$WM_ID'");
		$data = array(
			"WM_ID"               => $temp[0]['WM_ID'],
			"KWN_ID"              => $temp[0]['KWN_ID'],
			"PK_ID"               => $temp[0]['PK_ID'],
			"PH_ID"               => $temp[0]['PH_ID'],
			"KK_ID"               => $temp[0]['KK_ID'],

			"JP_ID"               => $temp[0]['JP_ID'],
			"SW_ID"               => $temp[0]['SW_ID'],
			"WM_SEBAGAI"          => $temp[0]['WM_SEBAGAI'],
			"WM_NAMA"             => $temp[0]['WM_NAMA'],
			"WM_TEMPATLAHIR"      => $temp[0]['WM_TEMPATLAHIR'],

			"WM_TGLLAHIR"         => $temp[0]['WM_TGLLAHIR'],
			"WM_INSKERJA"         => $temp[0]['WM_INSKERJA'],
			"WM_JABATANKERJA"     => $temp[0]['WM_JABATANKERJA'],
			"WM_PANGKAT"          => $temp[0]['WM_PANGKAT'],
			"WM_LAMAKERJAPERHARI" => $temp[0]['WM_LAMAKERJAPERHARI'],

			"WM_JMLTANGGUNG"      => $temp[0]['WM_JMLTANGGUNG'],
			"WM_ALAMATRUMAH"      => $temp[0]['WM_ALAMATRUMAH'],
			"WM_ALAMATKANTOR"     => $temp[0]['WM_ALAMATKANTOR'],
			"WM_TELP"             => $temp[0]['WM_TELP'],
			"WM_USIANIKAH"        => $temp[0]['WM_USIANIKAH'],

			"WM_KESEMPATANKOM"    => $temp[0]['WM_KESEMPATANKOM'],

		);
		$this->load->view('header')->view('update/wali_murid', $data)->view('footer');
	}

	public function view_delete($WM_ID) {
		$temp = $this->Crud->GetWm(" where WM_ID = '$WM_ID'");
		$data = array(
			"WM_ID"               => $temp[0]['WM_ID'],
			"KWN_ID"              => $temp[0]['KWN_ID'],
			"PK_ID"               => $temp[0]['PK_ID'],
			"PH_ID"               => $temp[0]['PH_ID'],
			"KK_ID"               => $temp[0]['KK_ID'],

			"JP_ID"               => $temp[0]['JP_ID'],
			"SW_ID"               => $temp[0]['SW_ID'],
			"WM_SEBAGAI"          => $temp[0]['WM_SEBAGAI'],
			"WM_NAMA"             => $temp[0]['WM_NAMA'],
			"WM_TEMPATLAHIR"      => $temp[0]['WM_TEMPATLAHIR'],

			"WM_TGLLAHIR"         => $temp[0]['WM_TGLLAHIR'],
			"WM_INSKERJA"         => $temp[0]['WM_INSKERJA'],
			"WM_JABATANKERJA"     => $temp[0]['WM_JABATANKERJA'],
			"WM_PANGKAT"          => $temp[0]['WM_PANGKAT'],
			"WM_LAMAKERJAPERHARI" => $temp[0]['WM_LAMAKERJAPERHARI'],

			"WM_JMLTANGGUNG"      => $temp[0]['WM_JMLTANGGUNG'],
			"WM_ALAMATRUMAH"      => $temp[0]['WM_ALAMATRUMAH'],
			"WM_ALAMATKANTOR"     => $temp[0]['WM_ALAMATKANTOR'],
			"WM_TELP"             => $temp[0]['WM_TELP'],
			"WM_USIANIKAH"        => $temp[0]['WM_USIANIKAH'],

			"WM_KESEMPATANKOM"    => $temp[0]['WM_KESEMPATANKOM'],

		);
		$this->load->view('header')->view('delete/wali_murid', array('data' => $data))->view('footer');
	}

}
