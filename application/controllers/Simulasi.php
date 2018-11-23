<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Simulasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model(array('M_user','M_perusahaan','M_lk','M_dupont','M_distribusi'));
  }   

    public function index(){
      $data = array(
        'page'=>'dashboard',
        'link'=>'dashboard',
        'perusahaan'=>$this->M_perusahaan->listall()->num_rows(),
        'lk'=>$this->M_lk->listlk()->num_rows(),
        'jum'=>$this->M_dupont->listjum()->num_rows(),
      );
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebarsimulasi');
      $this->load->view('template/isi');
      $this->load->view('template/footer');
    }

    public function simulasi(){
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

    public function viewdupont(){
      $query=$this->db->query("SELECT CONCAT(namaperusahaan,'-',tahun)as perusahaan,persenlababersih,tato,roi from rasiodupont join laporankeuangan on idlk=laporankeuangan.id join perusahaan on perusahaan.idperusahaan=laporankeuangan.idperusahaan");
      $data=array(
        'page'=>'laporan/datadupont',
        'link'=>'dupontumum',
        'list'=>$query->result(),
        'script'=>'laporan/script',
      );
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebarsimulasi');
      $this->load->view('template/isi');
      $this->load->view('template/footer');
    }

    public function viewdistribusi(){
      $data=array(
        'page'=>'datadistribusi',
        'link'=>'distribusiumum',
        'list' => $this->M_distribusi->listall()->result(),
      );
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebarsimulasi');
      $this->load->view('template/isi');
      $this->load->view('template/footer');
    }

    public function ceklaporan($idperiode){
    $data=array(
      'page'=>'cekdistribusi',
      'link'=>'distribusiumum',
      'npm'=>$this->M_distribusi->viewketnpm($idperiode)->result(),
      'tato'=>$this->M_distribusi->viewkettato($idperiode)->result(),
      'roi'=>$this->M_distribusi->viewketroi($idperiode)->result(),
      'idperiode'=>$idperiode,
    );
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebarsimulasi');
      $this->load->view('template/isi');
      $this->load->view('template/footer');
    }
}