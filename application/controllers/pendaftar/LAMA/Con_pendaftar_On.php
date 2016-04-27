<?php
Class Con_pendaftar_On extends CI_Controller {

  function __construct()
  {
    parent::__construct();
        // Your own constructor code
    $this->load->model('pendaftar/Mod_pendaftar','',TRUE);
    $this->load->helper(array('url','form'));
    $this->load->library('session');  
}
 //parent::controller();



function index() {
   $data['hasil'] = $this->Mod_pendaftar->getallpendaftar();   
   //$data_pendaftar = $this->session->userdata('pendaftar');
  // $this->session->set_userdata('pendaftar', $data_pendaftar);
   $this->load->view('pendaftaran/form/index.php', $data);
}
/////////////////////////////////////////////////////////////////////////
/*DONT TOUCH THIS IF YOU DONT UNDERSTAND!*/
/*SRSLY IT TO HARD TO CODE*/
function debug() {
     $this->session->set_userdata('pendaftar', null); return;
}

function data() {
  $pendaftar = $this->session->userdata('pendaftar');
  echo $pendaftar['pendaftar_nama'].' </br>';
   
}

function pendaftar() {
   $data_pendaftar = $this->session->userdata('pendaftar');
   if(!isset($data_pendaftar) || !isset($data_pendaftar['state'])) {
     $data_pendaftar = [
       'state' => 'pendaftar_siswa'
     ];
     $this->session->set_userdata('pendaftar', $data_pendaftar); 
   }
   if($this->input->server('REQUEST_METHOD') == 'POST') {
     $data_pendaftar = array_merge($data_pendaftar, $this->input->post());
     $data_pendaftar['state'] = $this->nextState($data_pendaftar['state']);
     $this->session->set_userdata('pendaftar', $data_pendaftar);
   }
   
   $state = $data_pendaftar['state'];
   if(is_callable(array($this, $state))) {
       $this->$state();
   }
   

}

function nextState($state) {
  if($state == 'pendaftar_siswa') return 'datasiswa';
  //
  else if($state == 'datasiswa') return 'kelahiran';
  else if($state == 'kelahiran') return 'kesehatan';
  else if($state == 'kesehatan') return 'kesehatan2';
  //
}

function prevState($state) {
  if($state == 'datasiswa') return 'pendaftar_siswa';
  else if($state == 'kelahiran') return 'datasiswa';
}

function pendaftar_siswa() {
		$data['pendaftar']= $this->session->userdata('pendaftar');
    $this->load->view('pendaftaran/form/1', $data);
}

///////////////////////////////////////////////////////////////////////////


function datasiswa() {
    //
    $data['pendaftar']= $this->session->userdata('pendaftar');
    $this->load->view('pendaftaran/form/2a', $data);
}

function kelahiran() {
  $data['pendaftar']= $this->session->userdata('pendaftar');
  $this->load->view('pendaftaran/form/2b', $data);
}
function kesehatan() {
  //
  $data['pendaftar']= $this->session->userdata('pendaftar');
   $this->load->view('pendaftaran/form/2c', $data);
}

//tambah pendaftar insert table
function tambahpendaftar() {
  if($this->input->post('submit')) {
      //
      $pendaftar = $this->session->userdata('pendaftar');
     //
     $this->Mod_pendaftar->tambah($pendaftar);
     //redirect('Con_siswa');
           //$this->session->set_userdata('pendaftar', null); return;
 }
 $this->load->view('pendaftaran/form/2c_a');
}

////
function kesehatan2() {
  $data['pendaftar']= $this->session->userdata('pendaftar');
   $this->load->view('pendaftaran/form/2c_a', $data);
}
function kelainan() {
  $data['hasil'] = $this->Mod_pendaftar->getallpendaftar();
   redirect('Kt');
}
function imunisasi() {
  $data['hasil'] = $this->Mod_pendaftar->getallpendaftar();
   redirect('Imunisasi');
}


function saudara() {
  $data['hasil'] = $this->Mod_pendaftar->getallpendaftar();
   $this->load->view('create_sk', $data);
}

function cirikhas() {
  $data['hasil'] = $this->Mod_pendaftar->getallpendaftar();
   $this->load->view('pendaftaran/form/2e', $data);
}

function wali() {
  $data['hasil'] = $this->Mod_pendaftar->getallpendaftar();
   $this->load->view('create_walmur', $data);
}

function simpan() {
  $data['hasil'] = $this->Mod_pendaftar->getallpendaftar();
   redirect('Welcome');
}


// function tambahpendaftar() {
//   if($this->input->post('submit')) {
//      $this->Mod_pendaftar->tambah();
     
//  }
//  $this->load->view('pendaftaran/form');
// }

function updatependaftar($SW_ID) {
    if($this->input->post('submit')){
        $this->Mod_pendaftar->update($id);
        redirect('Con_pendaftar_On');
    }
    $data['hasil'] = $this->Mod_pendaftar->getById($SW_ID);
    $this->load->view('pendaftaran/update_pendaftar', $data);

}

function detailpendaftar($SW_ID) {
    if($this->input->post('submit')){
        $this->Mod_pendaftar->update($id);
        redirect('Con_pendaftar');
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
