<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_perusahaan','M_user'));
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

	public function index(){
		$data=array(
			'page'=>'perusahaan/data',
			'link'=>'perusahaan',
			'list' => $this->M_perusahaan->listall()->result(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function formtambah(){
		$data=array(
			'page'=>'perusahaan/formtambah',
			'link'=>'perusahaan',
			'idperusahaan' => $this->M_perusahaan->idperusahaan(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function formubah($id){
		$data=array(
			'page'=>'perusahaan/formubah',
			'link'=>'perusahaan',
			'list' => $this->M_perusahaan->listwhere($id)->row(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function prosessimpan(){
		$simpan=$this->M_perusahaan->simpan();
		if($simpan){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
	        );
	        redirect(base_url().'perusahaan');
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal disimpan !</div>'
	        );
	        redirect(base_url().'perusahaan');
		}
	}

	public function prosesubah(){
		$ubah=$this->M_perusahaan->ubah();
		if($ubah){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diubah !</div>'
	        );
	        redirect(base_url().'perusahaan');
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal diubah !</div>'
	        );
	        redirect(base_url().'perusahaan');
		}
	}

	public function hapus($id){
		$hapus=$this->M_perusahaan->hapus($id);
		if($hapus){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
	        );
	        redirect(base_url().'perusahaan');
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal dihapus !</div>'
	        );
	        redirect(base_url().'perusahaan');
		}
	}
}