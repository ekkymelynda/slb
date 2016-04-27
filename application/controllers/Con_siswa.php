<?php
Class Con_siswa extends CI_Controller {

  function __construct()
  {
    parent::__construct();
        // Your own constructor code
    $this->load->model('pendaftar/Mod_pendaftar','',TRUE);
    $this->load->helper(array('url','form'));
}
 //parent::controller();

function formulir() {

}

function index() {
   $data['hasil'] = $this->Mod_pendaftar->getallpendaftar();
   $this->load->view('pendaftaran/old/view_pendaftar', $data);
}

function tambahpendaftar() {
  if($this->input->post('submit')) {
     $this->Mod_pendaftar->tambah();
     redirect('Con_siswa');
 }
 $this->load->view('pendaftaran/form');
}

function updatependaftar($SW_ID) {
    
    if($this->input->post('submit')){
        $this->Mod_pendaftar->update($id);
        redirect('Con_siswa');
    }
    $data['hasil'] = $this->Mod_pendaftar->getById($SW_ID);
    $this->load->view('pendaftaran/update_pendaftar', $data);

}

function detailpendaftar($SW_ID) {
    if($this->input->post('submit')){
        $this->Mod_pendaftar->update($id);
        redirect('Con_siswa');
    }
    $data['hasil'] = $this->Mod_pendaftar->getById($SW_ID);
    $this->load->view('pendaftaran/detail_pendaftar', $data);

}



// function read_siswa() {
//     $this->load->view('read_siswa');
// }


// function hapusdata($id) {
//    if($this->input->post('submit')) {
//       $this->Mod_pendaftar->hapusdata($id);
//       redirect('Con_pendaftar');
//     		//redirect('siswa/index/delete_success','refresh');

//   }
//     	//$data=$this->mod_siswa->getall();
//     	//$data['hasil']=$this->mod_siswa->getById($id);
//     	//$this->load->view('view_siswa','$data');
// }
}
?>
