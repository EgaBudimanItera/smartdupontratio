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

	function listlkwhere($id){
		$this->db->select('*')->from('laporankeuangan')->join('perusahaan','laporankeuangan.idperusahaan=perusahaan.idperusahaan')->where(array('id'=>$id));
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

	function hapuslk($id){
		$this->db->delete('laporankeuangan', array('id' => $id)); 
        return true;
	}

	function detaillk($id){
		$query = $this->db->get_where('detaillaporankeuangan',array('id'=>$id));
    	return $query;
	}
}