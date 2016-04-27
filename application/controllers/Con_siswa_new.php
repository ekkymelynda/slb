<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con_siswa_new extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Crud', '', TRUE);
		$this->load->helper(array('url', 'form'));
	}

	public function index() {
		$data['siswa'] = $this->Crud->GetSiswa();
		$this->load->view('header')->view('read/siswa', $data)->view('footer');
	}

	public function view() {
		$data['siswa'] = $this->Crud->ViewSiswa();
		$this->load->view('header')->view('read/siswa', $data)->view('footer');
	}

	public function view_detail_siswa($SW_ID) {
		$temp = $this->Crud->GetSiswa(" where SW_ID = '$SW_ID'");
		$data = array(
			"SW_ID"                 => $temp[0]['SW_ID'],

			//
			"PENDAFTAR_NAMA"        => $temp[0]['PENDAFTAR_NAMA'],
			'PENDAFTAR_STATUS'      => $temp[0]['PENDAFTAR_STATUS'],
			'PENDAFTAR_ALAMAT'      => $temp[0]['PENDAFTAR_ALAMAT'],
			'PENDAFTAR_TELP'        => $temp[0]['PENDAFTAR_TELP'],
			'SW_NAMA'               => $temp[0]['SW_NAMA'],
			'SW_NAMAPANGGIL'        => $temp[0]['SW_NAMAPANGGIL'],
			'SW_TEMPATLAHIR'        => $temp[0]['SW_TEMPATLAHIR'],
			'SW_TGLLAHIR'           => $temp[0]['SW_TGLLAHIR'],
			'SW_USIAPERMASUK'       => $temp[0]['SW_USIAPERMASUK'],
			'SW_JK'                 => $temp[0]['SW_JK'],
			//tabel agama
			'AG_ID'                 => $temp[0]['AG_ID'],
			//tabel warganegara
			'KWN_ID'                => $temp[0]['KWN_ID'],
			//tabel jenis_tinggal
			'JT_ID'                 => $temp[0]['JT_ID'],
			'AT_ID'                 => '1',
			'SW_BAHASARUMAH'        => $temp[0]['SW_BAHASARUMAH'],
			'SW_ANAKKE'             => $temp[0]['SW_ANAKKE'],
			'SW_JMLBERSDR'          => $temp[0]['SW_JMLBERSDR'],
			'SW_TINGKATASALSEKOLAH' => $temp[0]['SW_TINGKATASALSEKOLAH'],
			'SW_ASALSEKTHNMASUK'    => $temp[0]['SW_ASALSEKTHNMASUK'],
			'SW_ASALSEKTHNLULUS'    => $temp[0]['SW_ASALSEKTHNLULUS'],
			'SW_NAMAASALSEKOLAH'    => $temp[0]['SW_NAMAASALSEKOLAH'],
			'SW_ALAMATASALSEK'      => $temp[0]['SW_ALAMATASALSEK'],
			'SW_AKTIVSUKA'          => $temp[0]['SW_AKTIVSUKA'],
			'SW_LAMAKANDUNGANBLN'   => $temp[0]['SW_LAMAKANDUNGANBLN'],
			'SW_LAMAKANDUNGANHARI'  => $temp[0]['SW_LAMAKANDUNGANHARI'],

			'SW_KEADAANKANDUNGAN'   => $temp[0]['SW_KEADAANKANDUNGAN'],
			'SW_KEADAANLAHIR'       => $temp[0]['SW_KEADAANLAHIR'],

			'SW_PROSESLAHIR'        => $temp[0]['SW_PROSESLAHIR'],
			'SW_YGMEMBANTULAHIR'    => $temp[0]['SW_YGMEMBANTULAHIR'],
			'SW_BERATLAHIR'         => $temp[0]['SW_BERATLAHIR'],
			'SW_PANJANGLAHIR'       => $temp[0]['SW_PANJANGLAHIR'],
			'SW_USIAIBUSAATLAHIR'   => $temp[0]['SW_USIAIBUSAATLAHIR'],
			'SW_BERATANAK'          => $temp[0]['SW_BERATANAK'],
			'SW_PANJANGANAK'        => $temp[0]['SW_PANJANGANAK'],
			'SW_GOLDAR'             => $temp[0]['SW_GOLDAR'],
			'SW_LAMAMINUMASI'       => $temp[0]['SW_LAMAMINUMASI'],
			'SW_DUABLNAWAL'         => $temp[0]['SW_DUABLNAWAL'],
			//tabel kelainantubuh
			//$siswa_kelainan,

			'SW_MAKANANTAMBAHAN'    => $temp[0]['SW_MAKANANTAMBAHAN'],
			//tabel imunisasi
			//$siswa_imunisasi,

			'SW_ALERGI'             => $temp[0]['SW_ALERGI'],
			'SW_PENGLIHATAN'        => $temp[0]['SW_PENGLIHATAN'],
			'SW_PENDENGARAN'        => $temp[0]['SW_PENDENGARAN'],
			'SW_PENAMPILAN'         => $temp[0]['SW_PENAMPILAN'],
			//masukkan ke tabel saudara_kandung
			//$saudara_anak,

			//yg inin bener
			'SW_CIRIFISIK'          => $temp[0]['SW_CIRIFISIK'],
			//masukkan ke dalam tabel ciri_kepribadian
			//$siswa_kepribadian,

			'SW_BAKATKHUSUS'        => $temp[0]['SW_BAKATKHUSUS'],
			'SW_PRESTASI'           => $temp[0]['SW_PRESTASI'],

			//
		);
		//$this->load->view('header')->view('Detail/siswa',$data)->view('footer');
		//echo var_dump($data);
		$this->load->view('header')->view('detail/siswa', $data)->view('footer');

	}

	public function delete($SW_ID) {
		$where = array('SW_ID' => $SW_ID);
		$res   = $this->Crud->DeleteData('siswa', $where);
		if ($res == 1) {
			redirect('Con_siswa_new', 'refresh');
		}
	}

	public function view_create_data() {
		$this->load->view('header')->view('create/siswa')->view('footer');
	}

	// public function create_data(){
	// 	$SW_ID = $_POST['AG_ID'];
	//     $AG_NAMA = $_POST['AG_NAMA'];

	//     $data_insert = array(
	//     	'AG_ID' => $AG_ID,
	//     	'AG_NAMA' => $AG_NAMA,
	//     );

	//     $res = $this->Crud->InsertData('agama',$data_insert);
	//     if ($res==1)
	// 	{
	// 		redirect ('Master/agama','refresh');
	// 	}
	// }

	// public function update_data() {
	// 	$SW_ID   = $_POST['SW_ID'];
	// 	$SW_NAMA = $_POST['SW_NAMA'];

	// 	$data_insert = array(
	// 		'SW_ID'   => $SW_ID,
	// 		'SW_NAMA' => $SW_NAMA,
	// 	);

	// 	$where = array('SW_ID' => $SW_ID);
	// 	$res   = $this->Crud->UpdateData('siswa', $data_insert, $where);
	// 	if ($res == 1) {
	// 		redirect('Con_siswa_new', 'refresh');
	// 	}
	// }

	public function view_update_data($SW_ID) {
		$temp = $this->Crud->GetSiswa(" where SW_ID = '$SW_ID'");
		$data = array(
			"SW_ID"   => $temp[0]['SW_ID'],
			"SW_NAMA" => $temp[0]['SW_NAMA'],
		);
		$this->load->view('header')->view('update/siswa', $data)->view('footer');
	}

	// public function view_delete($AG_ID){
	// 	$temp = $this->Crud->GetAgama(" where AG_ID = '$AG_ID'");
	// 	$data = array(
	// 		"AG_ID" => $temp[0]['AG_ID'],
	// 	    "AG_NAMA" => $temp[0]['AG_NAMA'],
	// 	);
	// 	$this->load->view('header')->view('delete/agama',$data)->view('footer');
	// }

}
