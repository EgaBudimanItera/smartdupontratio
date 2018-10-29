<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model(array('Nasabah_Model','Pembiayaan_Model'));
	}
    //pages back
    public function index(){
      $data = array(
        'page'=>'dashboardega',
        'link'=>'dashboard',
      );
      $this->load->view('template/wrapper',$data);
    }
}