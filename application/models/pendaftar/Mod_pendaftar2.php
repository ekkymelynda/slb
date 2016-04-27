<?php class Mod_pendaftar2 extends CI_Model {
   private $table_name='siswa';
   function __construct() {
    parent:: __construct();
  }

  function getallpendaftar() {
    $this->db->select('*');
    $this->db->from('siswa');
    // $this->db->join('detil_rombel_siswa','detil_rombel_siswa.RM_ID = siswa.SW_ID','left');
    // $this->db->join('rombel','rombel.RM_ID = siswa.SW_ID','left');
    $this->db->join('agama','agama.AG_ID = siswa.SW_ID','left');
    $ambildata = $this->db->get();
    //jika data ada (lebih dari 0)
    if ($ambildata->num_rows() > 0 ) {
     foreach ($ambildata->result() as $data) {
       $hasil[] = $data;
     }
     return $hasil;
   }
 }

 function tambah() {
   /*
   $sdata['name'] = $this->input->post('name');
      //Auto-increment, auto-generate roll, for each entry
      $sdata['roll'] = '20141000';
      for($i = 0; $i < 8; $i++)
      {
          $sdata['roll']++;
          if(substr($sdata['roll'], 5) == '100')
          {
              continue;
          }
      }
      */
      $pendaftar_nama = $this->input->post('pendaftar_nama');
      $pendaftar_status = $this->input->post('pendaftar_status');
      $pendaftar_rumah = $this->input->post('pendaftar_rumah');
      $pendaftar_telepon = $this->input->post('pendaftar_telepon');
      $siswa_nama = $this->input->post('siswa_nama');
      $siswa_namapanggilan = $this->input->post('siswa_namapanggilan');
      $siswa_tempat_lahir = $this->input->post('siswa_tempat_lahir');
      $siswa_tanggal_lahir = $this->input->post('siswa_tanggal_lahir');
      $siswa_usia = $this->input->post('siswa_usia');
      $jenis_kelamin = $this->input->post('jenis_kelamin');
      $siswa_agama = $this->input->post('siswa_agama');
      $siswa_warganegara = $this->input->post('siswa_warganegara');
      $siswa_tinggal = $this->input->post('siswa_tinggal_bersama');
      $siswa_transport = $this->input->post('siswa_transport');
      $siswa_bahasa = $this->input->post('siswa_bahasa');
      $siswa_anakke = $this->input->post('siswa_anakke');
      $siswa_anakke_dari = $this->input->post('siswa_anakke_dari');
      $siswa_sekolahasal = $this->input->post('siswa_sekolahasal');
      $siswa_masuktahun = $this->input->post('siswa_masuktahun');
      $siswa_lulus = $this->input->post('siswa_lulus');
      $siswa_alamat_sekolah = $this->input->post('siswa_alamat_sekolah');
      $siswa_aktifitas = $this->input->post('siswa_aktifitas');
      $siswa_lama_kandungan_bulan = $this->input->post('siswa_lama_kandungan_bulan');
      $siswa_lama_kandungan_hari = $this->input->post('siswa_lama_kandungan_hari');
      $siswa_keadaan_kandungan = $this->input->post('siswa_keadaan_kandungan');
      $siswa_keadaan_lahir = $this->input->post('siswa_keadaan_lahir');
      $siswa_proses_kelahiran = $this->input->post('siswa_proses_kelahiran');
      $siswa_membantu_kelahiran = $this->input->post('siswa_membantu_kelahiran');
      $siswa_berat_lahir = $this->input->post('siswa_berat_lahir');
      $siswa_panjang_lahir = $this->input->post('siswa_panjang_lahir');
      $siswa_usiaibu_lahir = $this->input->post('siswa_usiaibu_lahir');
      $siswa_berat = $this->input->post('siswa_berat');
      $siswa_tinggi = $this->input->post('siswa_tinggi');
      $siswa_golongan = $this->input->post('siswa_golongan');
      $siswa_asi = $this->input->post('siswa_asi');
      $siswa_perkembangan = $this->input->post('siswa_perkembangan');

      $siswa_kelainan = $this->input->post('siswa_kelainan');

      $siswa_makanan_4bln = $this->input->post('siswa_makanan_4bln');

      $siswa_imunisasi = $this->input->post('siswa_imunisasi');

      $siswa_alergi = $this->input->post('siswa_alergi');
      $siswa_penglihatan = $this->input->post('siswa_penglihatan');
      $siswa_pendengaran = $this->input->post('siswa_pendengaran');
      $siswa_penampilan = $this->input->post('siswa_penampilan');

      $saudara_anak = $this->input->post('saudara_anak');

        //yg inin bener
      $siswa_ciri = $this->input->post('siswa_ciri');

      $siswa_kepribadianl = $this->input->post('siswa_kepribadian');

      $siswa_bakat = $this->input->post('siswa_bakat');
      $siswa_prestasi = $this->input->post('siswa_prestasi');

        //masukkan ke dalam tabel wali_murid
        //$email = $this->input->post('ayah_nama');
        //$email = $this->input->post('ayah_tempat_lahir');

      $data = array (

        'PENDAFTAR_NAMA' => $pendaftar_nama,
        'PENDAFTAR_STATUS' => $pendaftar_status,
        'PENDAFTAR_ALAMAT' => $pendaftar_rumah,
        'PENDAFTAR_TELP' => $pendaftar_telepon,
        'SW_NAMA' => $siswa_nama,
        'SW_NAMAPANGGIL' => $siswa_namapanggilan,
        'SW_TEMPATLAHIR' => $siswa_tempat_lahir,
        'SW_TGLLAHIR' => $siswa_tanggal_lahir,
        'SW_USIAPERMASUK' =>$siswa_usia,
        'SW_JK' => $jenis_kelamin,
            //tabel agama
        'AG_ID' => $siswa_agama,
            //tabel warganegara
        'KWN_ID' => $siswa_warganegara,
            //tabel jenis_tinggal
        'JT_ID' => $siswa_tinggal,
        'AT_ID' => '1',
        'SW_BAHASARUMAH' => $siswa_bahasa,
        'SW_ANAKKE' => $siswa_anakke,
        'SW_JMLBERSDR' => $siswa_anakke_dari,
        'SW_TINGKATASALSEKOLAH' => $siswa_sekolahasal,
        'SW_ASALSEKTHNMASUK' => $siswa_masuktahun,
        'SW_ASALSEKTHNLULUS' => $siswa_lulus,
        'SW_ALAMATASALSEK' => $siswa_alamat_sekolah,
        'SW_AKTIVSUKA' => $siswa_aktifitas,
        'SW_LAMAKANDUNGANBLN' => $siswa_lama_kandungan_bulan,
        'SW_LAMAKANDUNGANHARI' => $siswa_lama_kandungan_hari,

        'SW_KEADAANKANDUNGAN' => $siswa_keadaan_kandungan,
        'SW_KEADAANLAHIR' => $siswa_keadaan_lahir,

        'SW_PROSESLAHIR' => $siswa_proses_kelahiran,
        'SW_YGMEMBANTULAHIR' => $siswa_membantu_kelahiran,
        'SW_BERATLAHIR' => $siswa_berat_lahir,
        'SW_PANJANGLAHIR' => $siswa_panjang_lahir,
        'SW_USIAIBUSAATLAHIR' => $siswa_usiaibu_lahir,
        'SW_BERATANAK' => $siswa_berat,
        'SW_PANJANGANAK' => $siswa_tinggi,
        'SW_GOLDAR' => $siswa_golongan,
        'SW_LAMAMINUMASI' => $siswa_asi,
        'SW_DUABLNAWAL' => $siswa_perkembangan,
            //tabel kelainantubuh
            //$siswa_kelainan,

        'SW_MAKANANTAMBAHAN' => $siswa_makanan_4bln,
            //tabel imunisasi
            //$siswa_imunisasi,

        'SW_ALERGI' => $siswa_alergi,
        'SW_PENGLIHATAN' => $siswa_penglihatan,
        'SW_PENDENGARAN' => $siswa_pendengaran,
        'SW_PENAMPILAN' => $siswa_penampilan,
            //masukkan ke tabel saudara_kandung
            //$saudara_anak,

            //yg inin bener
        'SW_CIRIFISIK' => $siswa_ciri,
            //masukkan ke dalam tabel ciri_kepribadian
            //$siswa_kepribadian,

        'SW_BAKATKHUSUS' => $siswa_bakat,
        'SW_PRESTASI' => $siswa_prestasi,


        );
  $this->db->insert('siswa',$data);
}

public function getById($SW_ID) {

    // $this->db->select('*');
    // $this->db->from('siswa');
    // $this->db->where('SW_ID', $SW_ID);
    // $this->db->limit(1);
    // $query = $this->db->get();
  return $this->db->get_where('siswa', array('SW_ID' => $SW_ID))->row();
    // if($query->num_rows()==1)
    //     return $query;
    // else return false;
}

function update($SW_ID) {
  $pendaftar_nama = $this->input->post('pendaftar_nama');
      $pendaftar_status = $this->input->post('pendaftar_status');
      $pendaftar_rumah = $this->input->post('pendaftar_rumah');
      $pendaftar_telepon = $this->input->post('pendaftar_telepon');
      $siswa_nama = $this->input->post('siswa_nama');
      $siswa_namapanggilan = $this->input->post('siswa_namapanggilan');
      $siswa_tempat_lahir = $this->input->post('siswa_tempat_lahir');
      $siswa_tanggal_lahir = $this->input->post('siswa_tanggal_lahir');
      $siswa_usia = $this->input->post('siswa_usia');
      $jenis_kelamin = $this->input->post('jenis_kelamin');
      $siswa_agama = $this->input->post('siswa_agama');
      $siswa_warganegara = $this->input->post('siswa_warganegara');
      $siswa_tinggal = $this->input->post('siswa_tinggal_bersama');
      $siswa_transport = $this->input->post('siswa_transport');
      $siswa_bahasa = $this->input->post('siswa_bahasa');
      $siswa_anakke = $this->input->post('siswa_anakke');
      $siswa_anakke_dari = $this->input->post('siswa_anakke_dari');
      $siswa_sekolahasal = $this->input->post('siswa_sekolahasal');
      $siswa_masuktahun = $this->input->post('siswa_masuktahun');
      $siswa_lulus = $this->input->post('siswa_lulus');
      $siswa_alamat_sekolah = $this->input->post('siswa_alamat_sekolah');
      $siswa_aktifitas = $this->input->post('siswa_aktifitas');
      $siswa_lama_kandungan_bulan = $this->input->post('siswa_lama_kandungan_bulan');
      $siswa_lama_kandungan_hari = $this->input->post('siswa_lama_kandungan_hari');
      $siswa_keadaan_kandungan = $this->input->post('siswa_keadaan_kandungan');
      $siswa_keadaan_lahir = $this->input->post('siswa_keadaan_lahir');
      $siswa_proses_kelahiran = $this->input->post('siswa_proses_kelahiran');
      $siswa_membantu_kelahiran = $this->input->post('siswa_membantu_kelahiran');
      $siswa_berat_lahir = $this->input->post('siswa_berat_lahir');
      $siswa_panjang_lahir = $this->input->post('siswa_panjang_lahir');
      $siswa_usiaibu_lahir = $this->input->post('siswa_usiaibu_lahir');
      $siswa_berat = $this->input->post('siswa_berat');
      $siswa_tinggi = $this->input->post('siswa_tinggi');
      $siswa_golongan = $this->input->post('siswa_golongan');
      $siswa_asi = $this->input->post('siswa_asi');
      $siswa_perkembangan = $this->input->post('siswa_perkembangan');

      $siswa_kelainan = $this->input->post('siswa_kelainan');

      $siswa_makanan_4bln = $this->input->post('siswa_makanan_4bln');

      $siswa_imunisasi = $this->input->post('siswa_imunisasi');

      $siswa_alergi = $this->input->post('siswa_alergi');
      $siswa_penglihatan = $this->input->post('siswa_penglihatan');
      $siswa_pendengaran = $this->input->post('siswa_pendengaran');
      $siswa_penampilan = $this->input->post('siswa_penampilan');

      $saudara_anak = $this->input->post('saudara_anak');

        //yg inin bener
      $siswa_ciri = $this->input->post('siswa_ciri');

      $siswa_kepribadianl = $this->input->post('siswa_kepribadian');

      $siswa_bakat = $this->input->post('siswa_bakat');
      $siswa_prestasi = $this->input->post('siswa_prestasi');

        //masukkan ke dalam tabel wali_murid
        //$email = $this->input->post('ayah_nama');
        //$email = $this->input->post('ayah_tempat_lahir');

      $data = array (

        'PENDAFTAR_NAMA' => $pendaftar_nama,
        'PENDAFTAR_STATUS' => $pendaftar_status,
        'PENDAFTAR_ALAMAT' => $pendaftar_rumah,
        'PENDAFTAR_TELP' => $pendaftar_telepon,
        'SW_NAMA' => $siswa_nama,
        'SW_NAMAPANGGIL' => $siswa_namapanggilan,
        'SW_TEMPATLAHIR' => $siswa_tempat_lahir,
        'SW_TGLLAHIR' => $siswa_tanggal_lahir,
        'SW_USIAPERMASUK' =>$siswa_usia,
        'SW_JK' => $jenis_kelamin,
            //tabel agama
        'AG_ID' => $siswa_agama,
            //tabel warganegara
        'KWN_ID' => $siswa_warganegara,
            //tabel jenis_tinggal
        'JT_ID' => $siswa_tinggal,
        'AT_ID' => '1',
        'SW_BAHASARUMAH' => $siswa_bahasa,
        'SW_ANAKKE' => $siswa_anakke,
        'SW_JMLBERSDR' => $siswa_anakke_dari,
        'SW_TINGKATASALSEKOLAH' => $siswa_sekolahasal,
        'SW_ASALSEKTHNMASUK' => $siswa_masuktahun,
        'SW_ASALSEKTHNLULUS' => $siswa_lulus,
        'SW_ALAMATASALSEK' => $siswa_alamat_sekolah,
        'SW_AKTIVSUKA' => $siswa_aktifitas,
        'SW_LAMAKANDUNGANBLN' => $siswa_lama_kandungan_bulan,
        'SW_LAMAKANDUNGANHARI' => $siswa_lama_kandungan_hari,

        'SW_KEADAANKANDUNGAN' => $siswa_keadaan_kandungan,
        'SW_KEADAANLAHIR' => $siswa_keadaan_lahir,

        'SW_PROSESLAHIR' => $siswa_proses_kelahiran,
        'SW_YGMEMBANTULAHIR' => $siswa_membantu_kelahiran,
        'SW_BERATLAHIR' => $siswa_berat_lahir,
        'SW_PANJANGLAHIR' => $siswa_panjang_lahir,
        'SW_USIAIBUSAATLAHIR' => $siswa_usiaibu_lahir,
        'SW_BERATANAK' => $siswa_berat,
        'SW_PANJANGANAK' => $siswa_tinggi,
        'SW_GOLDAR' => $siswa_golongan,
        'SW_LAMAMINUMASI' => $siswa_asi,
        'SW_DUABLNAWAL' => $siswa_perkembangan,
            //tabel kelainantubuh
            //$siswa_kelainan,

        'SW_MAKANANTAMBAHAN' => $siswa_makanan_4bln,
            //tabel imunisasi
            //$siswa_imunisasi,

        'SW_ALERGI' => $siswa_alergi,
        'SW_PENGLIHATAN' => $siswa_penglihatan,
        'SW_PENDENGARAN' => $siswa_pendengaran,
        'SW_PENAMPILAN' => $siswa_penampilan,
            //masukkan ke tabel saudara_kandung
            //$saudara_anak,

            //yg inin bener
        'SW_CIRIFISIK' => $siswa_ciri,
            //masukkan ke dalam tabel ciri_kepribadian
            //$siswa_kepribadian,

        'SW_BAKATKHUSUS' => $siswa_bakat,
        'SW_PRESTASI' => $siswa_prestasi,
    );
  $this->db->where('SW_ID', $SW_ID);
  $this->db->update('siswa', $data);
}

function hapusdata($id) {
  $this->db->where('id',$id);
        //$this->db->delete('tb_siswa',array('id'=>$id));
        //$this->db->delete('tb_siswa', $data);
  $this->db->delete($this->table_name);

}


}
