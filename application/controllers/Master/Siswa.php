<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
function __construct(){
        parent::__construct();
        // Your own constructor code
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
	public function index()
	{
		$data = $this->Crud->GetSiswa();
		$this->load->view('header')->view('read/siswa',array('data' => $data))->view('footer');	
	}

	public function delete($id){
		$where = array('NISN' => $id);
		$res = $this->crud->DeleteData('siswa',$where);
	}

	
	public function view_create_data(){
		$this->load->view('create_djk');
	}

	public function create_data(){
		$DJK_ID = $_POST['DJK_ID'];
	    $MAPEL_ID = $_POST['MAPEL_ID'];
	    $JK_ID = $_POST['JK_ID'];
	    $DJK_TANGGAL = $_POST['DJK_TANGGAL'];
	    $DJK_MATERI = $_POST['DJK_MATERI'];
	    $DJK_KETERANGAN = $_POST['DJK_KETERANGAN'];

	    $data_insert = array(
	    	'DJK_ID' => $DJK_ID,
	    	'MAPEL_ID' => $MAPEL_ID,
	    	'JK_ID' => $JK_ID,
	    	'DJK_TANGGAL' => $DJK_TANGGAL,
	    	'DJK_MATERI' => $DJK_MATERI,
	    	'DJK_KETERANGAN' => $DJK_KETERANGAN,
	    );

	    $res = $this->crud->InsertData('detil_jurnal_kelas',$data_insert);
	}

	public function update_data()
	{
		$SW_ID = $_POST['SW_ID'];
		$PENDAFTAR_NAMA = $_POST['PENDAFTAR_NAMA'];
		$PENDAFTAR_STATUS = $_POST['PENDAFTAR_STATUS'];
		$PENDAFTAR_ALAMAT = $_POST['PENDAFTAR_ALAMAT'];
		$PENDAFTAR_TELP = $_POST['PENDAFTAR_TELP'];
		$SW_NAMA = $_POST['SW_NAMA'];

		$SW_NAMAPANGGIL = $_POST['SW_NAMAPANGGIL'];
		$SW_TEMPATLAHIR = $_POST['SW_TEMPATLAHIR'];
		$SW_TGLLAHIR = $_POST['SW_TGLLAHIR'];
		$SW_USIAPERMASUK = $_POST['SW_USIAPERMASUK'];
		$SW_JK = $_POST['SW_JK'];
		$PPI_ID = $_POST['PPI_ID'];
		//tabel agama
		$AG_ID = $_POST['AG_ID'];
		//tabel warganegara']
		$KWN_ID = $_POST['KWN_ID'];
		//tabel jenis_tinggal
		$JT_ID = $_POST['JT_ID'];
		$AT_ID = $_POST['AT_ID'];
		$SW_BAHASARUMAH = $_POST['SW_BAHASARUMAH'];
		$SW_ANAKKE = $_POST['SW_ANAKKE'];
		$SW_JMLBERSDR = $_POST['SW_JMLBERSDR'];
		$SW_TINGKATASALSEKOLAH = $_POST['SW_TINGKATASALSEKOLAH'];
		$SW_ASALSEKTHNMASUK = $_POST['SW_ASALSEKTHNMASUK'];
		$SW_ASALSEKTHNLULUS = $_POST['SW_ASALSEKTHNLULUS'];
		$SW_ALAMATASALSEK = $_POST['SW_ALAMATASALSEK'];
		$SW_AKTIVSUKA = $_POST['SW_AKTIVSUKA'];
		$SW_LAMAKANDUNGANBLN = $_POST['SW_LAMAKANDUNGANBLN'];
		$SW_LAMAKANDUNGANHARI = $_POST['SW_LAMAKANDUNGANHARI'];
		$SW_ALAMATRT = $_POST['SW_ALAMATRT'];
		$SW_ALAMATRW = $_POST['SW_ALAMATRW'];
		$SW_ALAMATDUSUN = $_POST['SW_ALAMATDUSUN'];
		$SW_ALAMATKEL = $_POST['SW_ALAMATKEL'];
		$SW_ALAMATKEC = $_POST['SW_ALAMATKEC'];
		$SW_KODEPOS = $_POST['SW_KODEPOS'];
		$SW_HP = $_POST['SW_HP'];
		$SW_EMAIL = $_POST['SW_EMAIL'];
		$SW_SKHUN = $_POST['SW_SKHUN'];
		$SW_PENERIMAKPS = $_POST['SW_PENERIMAKPS'];
		$SW_NOKPS = $_POST['SW_NOKPS'];
		$SW_LASTUPDATE = $_POST['SW_LASTUPDATE'];
		$SW_ALAMAT = $_POST['SW_ALAMAT'];
		$SW_TELP = $_POST['SW_TELP'];

		$SW_KEADAANKANDUNGAN = $_POST['SW_KEADAANKANDUNGAN'];
		$SW_KEADAANLAHIR = $_POST['SW_KEADAANLAHIR'];
		$SW_PROSESLAHIR = $_POST['SW_PROSESLAHIR'];
		$SW_YGMEMBANTULAHIR = $_POST['SW_YGMEMBANTULAHIR'];
		$SW_BERATLAHIR = $_POST['SW_BERATLAHIR'];
		$SW_PANJANGLAHIR = $_POST['SW_PANJANGLAHIR'];
		$SW_USIAIBUSAATLAHIR = $_POST['SW_USIAIBUSAATLAHIR'];
		$SW_BERATANAK = $_POST['SW_BERATANAK'];
		$SW_PANJANGANAK = $_POST['SW_PANJANGANAK'];
		$SW_GOLDAR = $_POST['SW_GOLDAR'];
		$SW_LAMAMINUMASI = $_POST['SW_LAMAMINUMASI'];
		$SW_DUABLNAWAL = $_POST['SW_DUABLNAWAL'];
		//tabel kelainantubuh
		//$siswa_kelainan;
		$SW_NAMAASALSEKOLAH = $_POST['SW_NAMAASALSEKOLAH'];
		$SW_MAKANANTAMBAHAN = $_POST['SW_MAKANANTAMBAHAN'];
		//tabel imunisasi
		//$siswa_imunisasi;

		$SW_ALERGI = $_POST['SW_ALERGI'];
		$SW_PENGLIHATAN = $_POST['SW_PENGLIHATAN'];
		$SW_PENDENGARAN = $_POST['SW_PENDENGARAN'];
		$SW_PENAMPILAN = $_POST['SW_PENAMPILAN'];
		//masukkan ke tabel saudara_kandung
		//$saudara_anak;

		//yg inin bener
		$SW_CIRIFISIK = $_POST['SW_CIRIFISIK'];
		//masukkan ke dalam tabel ciri_kepribadian']
		//$siswa_kepribadian;

		$SW_BAKATKHUSUS = $_POST['SW_BAKATKHUSUS'];
		$SW_PRESTASI = $_POST['SW_PRESTASI'];
//
		$data_insert = array(
			'SW_ID' => $SW_ID,

			'PENDAFTAR_NAMA' => $PENDAFTAR_NAMA,
			'PENDAFTAR_STATUS' => $PENDAFTAR_STATUS,
			'PENDAFTAR_ALAMAT' => $PENDAFTAR_ALAMAT,
			'PENDAFTAR_TELP' => $PENDAFTAR_TELP,
			'SW_NAMA' => $SW_NAMA,

			'SW_NAMAPANGGIL' => $SW_NAMAPANGGIL,
			'SW_TEMPATLAHIR' => $SW_TEMPATLAHIR,
			'SW_TGLLAHIR' => $SW_TGLLAHIR,
			'SW_USIAPERMASUK' => $SW_USIAPERMASUK,
			'SW_JK' => $SW_JK,
			'PPI_ID' => $PPI_ID,
			//tabel agama
			'AG_ID' => $AG_ID,
			//tabel warganegara
			'KWN_ID' => $KWN_ID,
			//tabel jenis_tinggal
			'JT_ID' => $JT_ID,
			'AT_ID' => $AT_ID,
			'SW_BAHASARUMAH' => $SW_BAHASARUMAH,
			'SW_ANAKKE' => $SW_ANAKKE,
			'SW_JMLBERSDR' => $SW_JMLBERSDR,
			'SW_TINGKATASALSEKOLAH' => $SW_TINGKATASALSEKOLAH,
			'SW_ASALSEKTHNMASUK' => $SW_ASALSEKTHNMASUK,
			'SW_ASALSEKTHNLULUS' => $SW_ASALSEKTHNLULUS,
			'SW_ALAMATASALSEK' => $SW_ALAMATASALSEK,
			'SW_AKTIVSUKA' => $SW_AKTIVSUKA,
			'SW_LAMAKANDUNGANBLN' => $SW_LAMAKANDUNGANBLN,
			'SW_LAMAKANDUNGANHARI' => $SW_LAMAKANDUNGANHARI,
			'SW_ALAMATRT' => $SW_ALAMATRT,
			'SW_ALAMATRW' => $SW_ALAMATRW,
			'SW_ALAMATDUSUN' => $SW_ALAMATDUSUN,
			'SW_ALAMATKEL' => $SW_ALAMATKEL,
			'SW_ALAMATKEC' => $SW_ALAMATKEC,
			'SW_KODEPOS' => $SW_KODEPOS,
			'SW_HP' => $SW_HP,
			'SW_EMAIL' => $SW_EMAIL,
			'SW_SKHUN' => $SW_SKHUN,
			'SW_PENERIMAKPS' => $SW_PENERIMAKPS,
			'SW_NOKPS' => $SW_NOKPS,
			'SW_LASTUPDATE' => $SW_LASTUPDATE,

			'SW_ALAMAT' => $SW_ALAMAT,
			'SW_TELP' => $SW_TELP,

			'SW_KEADAANKANDUNGAN' => $SW_KEADAANKANDUNGAN,
			'SW_KEADAANLAHIR' => $SW_KEADAANLAHIR,

			'SW_PROSESLAHIR' => $SW_PROSESLAHIR,
			'SW_YGMEMBANTULAHIR' => $SW_YGMEMBANTULAHIR,
			'SW_BERATLAHIR' => $SW_BERATLAHIR,
			'SW_PANJANGLAHIR' => $SW_PANJANGLAHIR,
			'SW_USIAIBUSAATLAHIR' => $SW_USIAIBUSAATLAHIR,
			'SW_BERATANAK' => $SW_BERATANAK,
			'SW_PANJANGANAK' => $SW_PANJANGANAK,
			'SW_GOLDAR' => $SW_GOLDAR,
			'SW_LAMAMINUMASI' => $SW_LAMAMINUMASI,
			'SW_DUABLNAWAL' => $SW_DUABLNAWAL,
			//tabel kelainantubuh
			//$siswa_kelainan,
			'SW_NAMAASALSEKOLAH' => $SW_NAMAASALSEKOLAH,
			'SW_MAKANANTAMBAHAN' => $SW_MAKANANTAMBAHAN,
			//tabel imunisasi
			//$siswa_imunisasi,

			'SW_ALERGI' => $SW_ALERGI,
			'SW_PENGLIHATAN' => $SW_PENGLIHATAN,
			'SW_PENDENGARAN' => $SW_PENDENGARAN,
			'SW_PENAMPILAN' => $SW_PENAMPILAN,
			//masukkan ke tabel saudara_kandung
			//$saudara_anak,

			//yg inin bener
			'SW_CIRIFISIK' => $SW_CIRIFISIK,
			//masukkan ke dalam tabel ciri_kepribadian
			//$siswa_kepribadian,

			'SW_BAKATKHUSUS' => $SW_BAKATKHUSUS,
			'SW_PRESTASI' => $SW_PRESTASI,

		);
		$where = array('NISN' => $NISN);
		$res = $this->Crud->UpdateData('siswa', $data_insert, $where);
		if ($res == 1) {
			redirect('Master/Pendaftar', 'refresh');
		}
	}


	public function view_update_data($NISN){
		$temp = $this->Crud->GetSiswa(" where NISN = '$NISN'");
		$data = array(
			'SW_ID' => $temp[0]['SW_ID'],

			'PENDAFTAR_NAMA' => $temp[0]['PENDAFTAR_NAMA'],
			'PENDAFTAR_STATUS' => $temp[0]['PENDAFTAR_STATUS'],
			'PENDAFTAR_ALAMAT' => $temp[0]['PENDAFTAR_ALAMAT'],
			'PENDAFTAR_TELP' => $temp[0]['PENDAFTAR_TELP'],
			'SW_NAMA' => $temp[0]['SW_NAMA'],
			'SW_NAMAPANGGIL' => $temp[0]['SW_NAMAPANGGIL'],
			'SW_TEMPATLAHIR' => $temp[0]['SW_TEMPATLAHIR'],
			'SW_TGLLAHIR' => $temp[0]['SW_TGLLAHIR'],
			'SW_USIAPERMASUK' => $temp[0]['SW_USIAPERMASUK'],
			'SW_JK' => $temp[0]['SW_JK'],
			'PPI_ID' => $temp[0]['PPI_ID'],
			//tabel agama
			'AG_ID' => $temp[0]['AG_ID'],
			//tabel warganegara']
			'KWN_ID' => $temp[0]['KWN_ID'],
			//tabel jenis_tinggal
			'JT_ID' => $temp[0]['JT_ID'],
			'AT_ID' => $temp[0]['AT_ID'],
			'SW_BAHASARUMAH' => $temp[0]['SW_BAHASARUMAH'],
			'SW_ANAKKE' => $temp[0]['SW_ANAKKE'],
			'SW_JMLBERSDR' => $temp[0]['SW_JMLBERSDR'],
			'SW_TINGKATASALSEKOLAH' => $temp[0]['SW_TINGKATASALSEKOLAH'],
			'SW_ASALSEKTHNMASUK' => $temp[0]['SW_ASALSEKTHNMASUK'],
			'SW_ASALSEKTHNLULUS' => $temp[0]['SW_ASALSEKTHNLULUS'],
			'SW_ALAMATASALSEK' => $temp[0]['SW_ALAMATASALSEK'],
			'SW_AKTIVSUKA' => $temp[0]['SW_AKTIVSUKA'],
			'SW_LAMAKANDUNGANBLN' => $temp[0]['SW_LAMAKANDUNGANBLN'],
			'SW_LAMAKANDUNGANHARI' => $temp[0]['SW_LAMAKANDUNGANHARI'],
			'SW_ALAMATRT' => $temp[0]['SW_ALAMATRT'],
			'SW_ALAMATRW' => $temp[0]['SW_ALAMATRW'],
			'SW_ALAMATDUSUN' => $temp[0]['SW_ALAMATDUSUN'],
			'SW_ALAMATKEL' => $temp[0]['SW_ALAMATKEL'],
			'SW_ALAMATKEC' => $temp[0]['SW_ALAMATKEC'],
			'SW_KODEPOS' => $temp[0]['SW_KODEPOS'],
			'SW_HP' => $temp[0]['SW_HP'],
			'SW_EMAIL' => $temp[0]['SW_EMAIL'],
			'SW_SKHUN' => $temp[0]['SW_SKHUN'],
			'SW_PENERIMAKPS' => $temp[0]['SW_PENERIMAKPS'],
			'SW_NOKPS' => $temp[0]['SW_NOKPS'],
			'SW_LASTUPDATE' => $temp[0]['SW_LASTUPDATE'],

			'SW_ALAMAT' => $temp[0]['SW_ALAMAT'],
			'SW_TELP' => $temp[0]['SW_TELP'],

			'SW_KEADAANKANDUNGAN' => $temp[0]['SW_KEADAANKANDUNGAN'],
			'SW_KEADAANLAHIR' => $temp[0]['SW_KEADAANLAHIR'],

			'SW_PROSESLAHIR' => $temp[0]['SW_PROSESLAHIR'],
			'SW_YGMEMBANTULAHIR' => $temp[0]['SW_YGMEMBANTULAHIR'],
			'SW_BERATLAHIR' => $temp[0]['SW_BERATLAHIR'],
			'SW_PANJANGLAHIR' => $temp[0]['SW_PANJANGLAHIR'],
			'SW_USIAIBUSAATLAHIR' => $temp[0]['SW_USIAIBUSAATLAHIR'],
			'SW_BERATANAK' => $temp[0]['SW_BERATANAK'],
			'SW_PANJANGANAK' => $temp[0]['SW_PANJANGANAK'],
			'SW_GOLDAR' => $temp[0]['SW_GOLDAR'],
			'SW_LAMAMINUMASI' => $temp[0]['SW_LAMAMINUMASI'],
			'SW_DUABLNAWAL' => $temp[0]['SW_DUABLNAWAL'],
			//tabel kelainantubuh
			//$siswa_kelainan,
			'SW_NAMAASALSEKOLAH' => $temp[0]['SW_NAMAASALSEKOLAH'],
			'SW_MAKANANTAMBAHAN' => $temp[0]['SW_MAKANANTAMBAHAN'],
			//tabel imunisasi
			//$siswa_imunisasi,

			'SW_ALERGI' => $temp[0]['SW_ALERGI'],
			'SW_PENGLIHATAN' => $temp[0]['SW_PENGLIHATAN'],
			'SW_PENDENGARAN' => $temp[0]['SW_PENDENGARAN'],
			'SW_PENAMPILAN' => $temp[0]['SW_PENAMPILAN'],
			//masukkan ke tabel saudara_kandung
			//$saudara_anak,

			//yg inin bener
			'SW_CIRIFISIK' => $temp[0]['SW_CIRIFISIK'],
			//masukkan ke dalam tabel ciri_kepribadian']
			//$siswa_kepribadian,

			'SW_BAKATKHUSUS' => $temp[0]['SW_BAKATKHUSUS'],
			'SW_PRESTASI' => $temp[0]['SW_PRESTASI'],
		);
		$this->load->view('header')->view('update/siswa', $data)->view('footer');
	}

	public function view_detail_siswa($NISN) {
		$temp = $this->Crud->GetSiswa(" where NISN = '$NISN'");
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



}
