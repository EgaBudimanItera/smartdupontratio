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

	public function formtambahdetail($id){
		$data=array(
			'page'=>'lk/formtambahdetail',
			'link'=>'lk',
			'id'=>$id,
		);
		$this->load->view('template/wrapper',$data);	
	}

	public function formdetaillk($id){
		$data=array(
			'page'=>'lk/detaillk',
			'link'=>'lk',
			'listlk'=>$this->M_lk->listlkwhere($id)->row(),
			'list' => $this->M_lk->detaillk($id)->result(),
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

	public function hapus($id){
		$hapus=$this->M_lk->hapuslk($id);
		if($hapus){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
	        );
	        redirect(base_url().'lk');
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal dihapus !</div>'
	        );
	        redirect(base_url().'lk');
		}
	}

	public function hapusdetail($idlk,$id){
		$hapus=$this->M_lk->hapusdetail($id);
		if($hapus){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
	        );
	        redirect(base_url().'lk/formdetaillk/'.$idlk);
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal dihapus !</div>'
	        );
	        redirect(base_url().'lk/formdetaillk/'.$idlk);
		}
	}

	public function prosessimpandetail(){
		$id=$this->input->post('idlk',true);
		$simpan=$this->M_lk->simpandetail();
		if($simpan){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil Disimpan !</div>'
	        );
	        redirect(base_url().'lk/formdetaillk/'.$id);
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal Disimpan !</div>'
	        );
	        redirect(base_url().'lk/formdetaillk/'.$id);
		}
	}
}