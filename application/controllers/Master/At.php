<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class At extends CI_Controller {
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
		$data = $this->Crud->GetAt();
		$this->load->view('header')->view('read/alat_transportasi',array('data' => $data))->view('footer');
	}

		public function delete($id){
		$where = array('AT_ID' => $id);
		$res = $this->Crud->DeleteData('alat_transportasi',$where);
		if ($res==1)
		{
			redirect ('Master/at','refresh');
		}
	}


	public function view_create_data(){
		$this->load->view('header')->view('create/alat_transportasi')->view('footer');
	}

	public function create_data(){
		$AT_ID = $_POST['AT_ID'];
	    $AT_NAMAALATTRANS = $_POST['AT_NAMAALATTRANS'];

	    $data_insert = array(
	    	'AT_ID' => $AT_ID,
	    	'AT_NAMAALATTRANS' => $AT_NAMAALATTRANS,
	    );

	    $res = $this->Crud->InsertData('alat_transportasi',$data_insert);
	    if ($res==1)
		{
			redirect ('Master/at','refresh');
		}
	}

	public function update_data(){
		$AT_ID = $_POST['AT_ID'];
	    $AT_NAMAALATTRANS = $_POST['AT_NAMAALATTRANS'];

	    $data_insert = array(
	    	'AT_ID' => $AT_ID,
	    	'AT_NAMAALATTRANS' => $AT_NAMAALATTRANS,
	    );

	    $where = array('AT_ID' => $AT_ID);
	    $res = $this->Crud->UpdateData('alat_transportasi',$data_insert, $where);
	    if ($res==1)
		{
			redirect ('Master/at','refresh');
		}
	}

	public function view_update_data($AT_ID){
		$temp = $this->Crud->GetAt(" where AT_ID = '$AT_ID'");
		$data = array(
			"AT_ID" => $temp[0]['AT_ID'],
		    "AT_NAMAALATTRANS" => $temp[0]['AT_NAMAALATTRANS'],
		);
		$this->load->view('header')->view('update/alat_transportasi',$data)->view('footer');
	}

	public function view_delete($AT_ID){
		$temp = $this->Crud->GetAt(" where AT_ID = '$AT_ID'");
		$data = array(
			"AT_ID" => $temp[0]['AT_ID'],
		    "AT_NAMAALATTRANS" => $temp[0]['AT_NAMAALATTRANS'],
		);
		$this->load->view('header')->view('delete/alat_transportasi',$data)->view('footer');
	}
}
