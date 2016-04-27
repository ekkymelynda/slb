<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bl extends CI_Controller {
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
		$data = $this->Crud->GetBl();
		$this->load->view('header')->view('read/based_line',array('data' => $data))->view('footer');
	}

		public function delete($id){
		$where = array('BASELINE_ID' => $id);
		$res = $this->Crud->DeleteData('based_line',$where);
	}


	public function view_create_data(){
		$this->load->view('header')->view('create/based_line',array('data' => $data))->view('footer');
	}

	public function create_data(){
		$BASELINE_ID = $_POST['BASELINE_ID'];
	    $PLK_ID = $_POST['PLK_ID'];
	    $BASELINE_KET = $_POST['BASELINE_KET'];
	    
	    $data_insert = array(
	    	'BASELINE_ID' => $BASELINE_ID,
	    	'PLK_ID' => $PLK_ID,
	    	'BASELINE_KET' => $BASELINE_KET,
	    );

	    $res = $this->Crud->InsertData('based_line',$data_insert);
	}

	public function update_data(){
		$BASELINE_ID = $_POST['BASELINE_ID'];
	    $PLK_ID = $_POST['PLK_ID'];
	    $BASELINE_KET = $_POST['BASELINE_KET'];

	    $data_insert = array(
	    	'BASELINE_ID' => $BASELINE_ID,
	    	'PLK_ID' => $PLK_ID,
	    	'BASELINE_KET' => $BASELINE_KET,
	    );

	    $where = array('BASELINE_ID' => $BASELINE_ID);
	    $res = $this->Crud->UpdateData('based_line',$data_insert, $where);
	}

	public function view_update_data($BASELINE_ID){
		$temp = $this->Crud->GetBl(" where BASELINE_ID = '$BASELINE_ID'");
		$data = array(
			"BASELINE_ID" => $temp[0]['BASELINE_ID'],
		    "PLK_ID" => $temp[0]['PLK_ID'],
		    "BASELINE_KET" => $temp[0]['BASELINE_KET'],

		);
		$this->load->view('header')->view('update/based_line',array('data' => $data))->view('footer');
	}

	public function view_delete($BASELINE_ID){
		$temp = $this->Crud->GetBl(" where BASELINE_ID = '$BASELINE_ID'");
		$data = array(
			"BASELINE_ID" => $temp[0]['BASELINE_ID'],
		    "PLK_ID" => $temp[0]['PLK_ID'],
		    "BASELINE_KET" => $temp[0]['BASELINE_KET'],

		);
		$this->load->view('header')->view('delete/based_line',array('data' => $data))->view('footer');
	}


}
