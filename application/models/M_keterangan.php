<?php
class M_keterangan extends CI_Model {
	function listket($idperiode,$tahun,$rasio){
        $query=$this->db->query("SELECT * FROM ketdistribusi where rasio='$rasio' and idperiodehitung='$idperiode' and tahun='$tahun'");
        return $query;
    }
    function ambil($id){
    	$query=$this->db->query("SELECT * FROM ketdistribusi where id='$id'");
    	return $query;
    }

    function ubahket($id){
    	$ket=$this->input->post('ket');
    	$query=$this->db->query("UPDATE ketdistribusi set ket='$ket' where id='$id'");
    	return true;
    }
}