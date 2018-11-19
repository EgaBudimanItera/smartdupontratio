<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distribusi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_lk','M_perusahaan','M_dupont','M_distribusi','M_user'));
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
			'page'=>'distribusi/data',
			'link'=>'distribusi',
			'list' => $this->M_distribusi->listall()->result(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function viewlaporan(){
		$data=array(
			'page'=>'laporan/datadistribusi',
			'link'=>'lapdistribusi',
			'list' => $this->M_distribusi->listall()->result(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function ceklaporan($idperiode){
		$data=array(
			'page'=>'laporan/cekdistribusi',
			'link'=>'lapdistribusi',
			'npm'=>$this->M_distribusi->viewketnpm($idperiode)->result(),
			'tato'=>$this->M_distribusi->viewkettato($idperiode)->result(),
			'roi'=>$this->M_distribusi->viewketroi($idperiode)->result(),
			'idperiode'=>$idperiode,
		);
		$this->load->view('template/wrapper',$data);
	}

	public function formtambah(){
		$data=array(
			'page'=>'distribusi/formtambah',
			'link'=>'distribusi',
			'idperiode'=>$this->M_distribusi->idperiode(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function datadetail($id){
		$data=array(
			'page'=>'distribusi/datadetail',
			'link'=>'distribusi',
			'idperiode'=>$id,
			'list'=>$this->M_distribusi->listtahundetail($id)->result(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function formhitungdistribusi($id,$tahun){
		$data=array(
			'page'=>'distribusi/formhitungdistribusi',
			'link'=>'distribusi',
			'idperiode'=>$id,
			'listnpm'=>$this->M_distribusi->listnpm($tahun)->result(),
			'listtato'=>$this->M_distribusi->listtato($tahun)->result(),
			'listroi'=>$this->M_distribusi->listroi($tahun)->result(),
			'id'=>$id,
			'tahun'=>$tahun,
			'jumlahperusahaan'=>$this->M_distribusi->listnpm($tahun)->num_rows(),
			'la'=>$this->M_distribusi->listanak($tahun),
		);
		$this->load->view('template/wrapper',$data);
	}	

	public function detailhitungdistribusi($id,$tahun){
		$data=array(
			'page'=>'distribusi/detailhitungdistribusi',
			'link'=>'distribusi',
			'idperiode'=>$id,
			'listnpm'=>$this->M_distribusi->listnpm($tahun)->result(),
			'listtato'=>$this->M_distribusi->listtato($tahun)->result(),
			'listroi'=>$this->M_distribusi->listroi($tahun)->result(),
			'id'=>$id,
			'tahun'=>$tahun,
			'jumlahperusahaan'=>$this->M_distribusi->listnpm($tahun)->num_rows(),
			'la'=>$this->M_distribusi->listanak($tahun),
		);
		$this->load->view('template/wrapper',$data);
	}	

	public function prosessimpanhitungdistribusi(){
		$simpan=$this->M_distribusi->simpanhitungdistribusi();
		if($simpan){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
	        );
	        redirect(base_url().'distribusi');
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal disimpan !</div>'
	        );
	        redirect(base_url().'distribusi');
		}
	}

	public function simpandetail(){
		$simpan=$this->M_distribusi->simpandetail();
		if($simpan){
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan !</div>'
	        );
	        redirect(base_url().'distribusi');
		}else{
			$this->session->set_flashdata(
	            'msg', 
	            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal!</strong> Data gagal disimpan !</div>'
	        );
	        redirect(base_url().'distribusi');
		}
	}
}