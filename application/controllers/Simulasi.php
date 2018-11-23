<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Simulasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
    }   

    public function index(){
      $data = array(
        'page'=>'simulasi',
        'link'=>'simulasi',
        'script'=>'simulasi_script'
      );
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebarsimulasi');
      $this->load->view('template/isi');
      $this->load->view('template/footer');
    }
}