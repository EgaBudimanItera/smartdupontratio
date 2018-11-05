<?php
class M_distribusi extends CI_Model {

	function idperiode(){
        //K002
        $this->db->select('Right(idperiode,3) as kode',false);
        
        $this->db->order_by('idperiode','desc');
        $this->db->limit(1);
        $query = $this->db->get('hitungdistribusi');

        if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $idperiode  = "HD".$kodemax;
        return $idperiode;
    }

    function simpanhitungdistribusi(){
    	$data=array(
    		'idperiode'=>$this->idperiode(),
    		'tgldistribusi'=>date_format(date_create($this->input->post('tgldistribusi',true)),"Y-m-d"),
    		'ket'=>$this->input->post('ket',true),
    	);
    	$this->db->insert('hitungdistribusi', $data);
        return true;
    }

     function listall(){
    	// $this->db->select('hitungdistribusi.idperiode','tgldistribusi','ket','count(detailhitungdistribusi.id) as jumlah')->from('hitungdistribusi')->join('detailhitungdistribusi','hitungdistribusi.idperiode=detailhitungdistribusi.idperiode','left');
    	
    	$query=$this->db->query("SELECT hitungdistribusi.idperiode,tgldistribusi,ket,count(detailhitungdistribusi.id) AS jumlah FROM hitungdistribusi LEFT JOIN detailhitungdistribusi ON hitungdistribusi.idperiode=detailhitungdistribusi.idperiode");
    	return $query;
    }

    function listtahundetail($id){
    	$query=$this->db->query("SELECT tahun,(select count(*)from laporankeuangan a2 where a2.tahun=a1.tahun) as jumlahperusahaan,(select count(*)from laporankeuangan a3 where a3.tahun=a1.tahun and a3.statushitung='1') as jumlahdupont,(select GROUP_CONCAT(namaperusahaan) from laporankeuangan a4 join perusahaan on a4.idperusahaan=perusahaan.idperusahaan where a4.tahun=a1.tahun)as namaperusahaan,(select count(*) from detailhitungdistribusi a5 where a5.tahun=a1.tahun and a5.idperiode='$id') as distribusi from laporankeuangan a1 group by tahun");
    	return $query;
    }
}