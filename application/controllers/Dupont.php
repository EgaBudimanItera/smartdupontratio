<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dupont extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_lk','M_perusahaan','M_dupont'));
	}

	public function index(){
		$data=array(
			'page'=>'dupont/data',
			'link'=>'dupont',
			'list' => $this->M_lk->listlk()->result(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function formhitung($id){
		$data=array(
			'page'=>'dupont/formhitung',
			'link'=>'dupont',
			'rasio'=>$this->M_dupont->hitungdupont($id),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function formdetail($id){
		$data=array(
			'page'=>'dupont/formdetail',
			'link'=>'dupont',
			'rasio'=>$this->M_dupont->hitungdupont($id),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function prosessimpan(){
		$simpan=$this->M_dupont->simpan();
		if($simpan){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
	        );
	        redirect(base_url().'dupont');
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal disimpan !</div>'
	        );
	        redirect(base_url().'dupont');
		}
	}
}