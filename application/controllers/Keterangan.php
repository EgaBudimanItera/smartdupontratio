<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keterangan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_lk','M_perusahaan','M_dupont','M_distribusi','M_keterangan','M_user'));
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
			'page'=>'keterangan/data',
			'link'=>'keterangan',
			'list' => $this->M_distribusi->listall()->result(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function datadetail($id){
		$data=array(
			'page'=>'keterangan/datadetail',
			'link'=>'keterangan',
			'idperiode'=>$id,
			'list'=>$this->M_distribusi->listtahundetail($id)->result(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function detaildistribusi($idperiode,$tahun){
		$data=array(
			'page'=>'keterangan/keterangandetail',
			'link'=>'keterangan',
			'idperiode'=>$idperiode,
			'tahun'=>$tahun,
			'listnpm'=>$this->M_keterangan->listket($idperiode,$tahun,'0')->result(),
			'listtato'=>$this->M_keterangan->listket($idperiode,$tahun,'1')->result(),
			'listroi'=>$this->M_keterangan->listket($idperiode,$tahun,'2')->result(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function editket($idperiode,$tahun,$id){
		$data=array(
			'page'=>'keterangan/editket',
			'link'=>'keterangan',
			'idperiode'=>$idperiode,
			'tahun'=>$tahun,
			'id'=>$id,
			'list'=>$this->M_keterangan->ambil($id)->row(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function prosesubah(){
		$idperiode=$this->input->post('idperiode',true);
		$tahun=$this->input->post('tahun',true);
		$id=$this->input->post('id',true);
		$ubah=$this->M_keterangan->ubahket($id);
		if($ubah){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
	        );
	        redirect(base_url().'keterangan/detaildistribusi/'.$idperiode.'/'.$tahun);
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal disimpan !</div>'
	        );
	        redirect(base_url().'keterangan/detaildistribusi/'.$idperiode.'/'.$tahun);
		}
	}
}