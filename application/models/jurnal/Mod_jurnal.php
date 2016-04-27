<?php class Mod_jurnal extends CI_Model {
 private $table_name='jurnal_materi';
 function __construct() {
		parent:: __construct();
	}

 function getall() {
    $this->db->select('*');
    $this->db->from('jurnal_materi');
    //$this->db->join('detil_rombel_siswa','detil_rombel_siswa.RM_ID = siswa.SW_ID','left');
    //$this->db->join('rombel','rombel.RM_ID = siswa.SW_ID','left');
    //$this->db->join('agama','agama.AG_ID = siswa.SW_ID','left');
 $ambildata = $this->db->get();
 //jika data ada
 if ($ambildata->num_rows() > 0 ) {
    foreach ($ambildata->result() as $data) {
    $hasil[] = $data;
    }
    return $hasil;
    }
 }

function tambah(){
    $id_jurnal_materi = $this->input->post('id_jurnal_materi');
    $id_mata_pelajaran = $this->input->post('id_mata_pelajaran');
    $id_guru = $this->input->post('id_guru');
    $tahun_ajaran_jurnal_materi = $this->input->post('tahun_ajar_jm');
    $semester_jurnal_materi = $this->input->post('smt_jm');
    $data = array (
        'JM_ID' => $id_jurnal_materi,
        'MAPEL_ID' => $id_mata_pelajaran,
        'GR_ID' => $id_guru,
        'JM_THNAJARAN' => $tahun_ajaran_jurnal_materi,
        'JM_SEMESTER' => $semester_jurnal_materi,
        );
    $this->db->insert('jurnal_materi',$data);
}

function update() {

}















}
