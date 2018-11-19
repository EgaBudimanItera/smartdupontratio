<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model(array('M_user','M_perusahaan','M_lk','M_dupont'));
    if($this->session->userdata('status') != "login"){
            echo '<script>alert("Maaf, anda harus login terlebih dahulu");window.location = "'.base_url().'";</script>';
    }else{
        $username = $this->session->userdata('username');
        $where=array('username'=>$username);
        $cek=$this->M_user->cek_login($where)->num_rows(); 
        if($cek == 0){
            echo '<script>alert("User tidak ditemukan di database");window.location = "'.base_url().'";</script>';
        }
    }   
	

	}
    //pages back
    public function index(){
      $data = array(
        'page'=>'dashboard',
        'link'=>'dashboard',
        'perusahaan'=>$this->M_perusahaan->listall()->num_rows(),
        'lk'=>$this->M_lk->listlk()->num_rows(),
        'jum'=>$this->M_dupont->listjum()->num_rows(),
      );
      $this->load->view('template/wrapper',$data);
    }
}