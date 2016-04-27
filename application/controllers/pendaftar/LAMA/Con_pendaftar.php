<?php
Class Con_pendaftar extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  $this->load->model('Crud','',TRUE);
        // Your own constructor code
    
    $this->load->model('pendaftar/Mod_pendaftar2','',TRUE);
    $this->load->helper(array('url','form'));
} 
 //parent::controller();

function formulir() {

}

function index() {
   //$data['hasil'] = $this->Mod_pendaftar2->getallpendaftar();
   $this->load->view('pendaftaran/index.php');
}

function syarat() {
    $this->load->view('pendaftaran/syarat.php');
}

function tambahpendaftar() {
  if($this->input->post('submit')) {
     $this->Mod_pendaftar2->tambah();
//     redirect('Pendaftar/Con_pendaftar2');
 }
 $this->load->view('pendaftaran/2c_a');
}

function updatependaftar($SW_ID) {
   $data['agama'] = $this->Crud->GetAgama();
   $data['kwn'] = $this->Crud->GetWarganegara();
    print_r($data['kwn']);
    if($this->input->post('submit')){
        $this->Mod_pendaftar2->update($id);
        //redirect('Con_pendaftar');
    }
    $data['hasil'] = $this->Mod_pendaftar2->getById($SW_ID);
    $this->load->view('pendaftaran/update_pendaftar', $data);

}

function lihatpendaftar($SW_ID) {
   $data['agama'] = $this->Crud->GetAgama();
   $data['kwn'] = $this->Crud->GetWarganegara();
    print_r($data['kwn']);
    if($this->input->post('submit')){
        $this->Mod_pendaftar2->update($id);
        //redirect('Con_pendaftar');
    }
    $data['hasil'] = $this->Mod_pendaftar2->getById($SW_ID);
    $this->load->view('pendaftaran/update_pendaftar', $data);

}


function detailpendaftar($SW_ID) {
    if($this->input->post('submit')){
        $this->Mod_pendaftar2->update($id);
        redirect('Con_pendaftar');
    }
    $data['hasil'] = $this->Mod_pendaftar2->getById($SW_ID);
    $this->load->view('pendaftaran/detail_pendaftar', $data);

}
function kelainan() {
  $data['hasil'] = $this->Mod_pendaftar2->getallpendaftar();
   redirect('Kt');
}
function imunisasi() {
  $data['hasil'] = $this->Mod_pendaftar2->getallpendaftar();
   redirect('Imunisasi');
}


function saudara() {
  $data['hasil'] = $this->Mod_pendaftar2->getallpendaftar();
   $this->load->view('create_sk', $data);
}

// function saudara($SW_ID) {
//     if($this->input->post('submit')){
//         $this->Mod_pendaftar2->update($id);
//        // redirect('Con_siswa');
//     }
//     $data['hasil'] = $this->Mod_pendaftar2->getById($SW_ID);
//     $this->load->view('create_sk', $data);

// }


function cirikhas() {
  $data['hasil'] = $this->Mod_pendaftar2->getallpendaftar();
   $this->load->view('pendaftaran/2e', $data);
}

function wali() {
  $data['hasil'] = $this->Mod_pendaftar2->getallpendaftar();
   $this->load->view('create_walmur', $data);
}

function simpan() {
  $data['hasil'] = $this->Mod_pendaftar2->getallpendaftar();
   redirect('Welcome');
}



}
?>
