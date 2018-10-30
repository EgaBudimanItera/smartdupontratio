<?php
class M_lk extends CI_Model {
	public $idperusahaan;
	public $tahun;
	public $namaakun;
	public $dk;
	public $jumlah;
	public $jenisakun;
	public $jenislaporan;


	function listlk(){
		$this->db->select('*')->from('laporankeuangan')->join('perusahaan','laporankeuangan.idperusahaan=perusahaan.idperusahaan');
		$query = $this->db->get();
    	return $query;
	}

	function simpanlk(){
		
		$data=array(
			'idperusahaan'=>$this->input->post('idperusahaan',true),
			'tahun'=>$this->input->post('tahun',true)
		);
		$this->db->insert('laporankeuangan', $data);
        return true;
	}
}