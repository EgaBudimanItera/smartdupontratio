<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distribusi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_lk','M_perusahaan','M_dupont','M_distribusi'));
	}

	public function index(){
		$data=array(
			'page'=>'distribusi/data',
			'link'=>'distribusi',
			'list' => $this->M_distribusi->listall()->result(),
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
			'listnpm'=>'',
			'listtato'=>'',
			'listroi'=>'',
			'id'=>$id,
			'tahun'=>$tahun,
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
}