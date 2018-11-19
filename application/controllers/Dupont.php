<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dupont extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_lk','M_perusahaan','M_dupont','M_user'));
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
			'list'=>$this->M_dupont->listall($id)->row(),
		);
		$this->load->view('template/wrapper',$data);
	}

	public function formupload($id){
		$data=array(
			'page'=>'dupont/formupload',
			'link'=>'dupont',
			'id'=>$id,
			'script'=>'dupont/script'
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

	public function viewlaporan(){
		$query=$this->db->query("SELECT CONCAT(namaperusahaan,'-',tahun)as perusahaan,persenlababersih,tato,roi from rasiodupont join laporankeuangan on idlk=laporankeuangan.id join perusahaan on perusahaan.idperusahaan=laporankeuangan.idperusahaan");
		$data=array(
			'page'=>'laporan/datadupont',
			'link'=>'lapdupont',
			'list'=>$query->result(),
			'script'=>'laporan/script',
		);
		$this->load->view('template/wrapper',$data);
	}

	public function prosesupload(){
		$gambar="";
		$config ['upload_path'] = './assets/file_upload/';
        $config ['allowed_types'] = 'jpg|png|jpeg';
        $config ['max_size'] = '3000000';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('gambar'))
        {
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name'];
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('msg', print_r($error, true));
            redirect('dupont');
            exit();
        }
        $update=$this->M_dupont->ubah($filename);
        if($update){
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