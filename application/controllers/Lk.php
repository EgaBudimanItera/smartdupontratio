<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lk extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_lk','M_perusahaan'));
	}

	public function index(){
		$data=array(
			'page'=>'lk/data',
			'link'=>'lk',
			'list' => $this->M_lk->listlk()->result(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function formtambah(){
		$data=array(
			'page'=>'lk/formtambah',
			'link'=>'lk',
			'perusahaan' => $this->M_perusahaan->listall()->result(),
		);
		$this->load->view('template/wrapper',$data);	
	}

	public function prosessimpan(){
		$simpan=$this->M_lk->simpanlk();
		if($simpan){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
	        );
	        redirect(base_url().'lk');
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal disimpan !</div>'
	        );
	        redirect(base_url().'lk');
		}
	}
}