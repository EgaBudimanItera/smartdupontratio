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

    function insertbatch($table,$insert) {
         $this->db->insert_batch($table,$insert);
         return true;
    }

    function simpandetail(){
        $idperiode=$this->input->post('idperiode',true);
        $tahun=$this->input->post('tahun',true);
        $data=$this->listanak($tahun);
        $datanpm=array(
            'idperiode'=>$idperiode,
            'rasio'=>'0',
            'tahun'=>$tahun,
            'k'=>$data['k'],
            'r'=>$data['rnpm'],
            'c'=>$data['cnpm'],
        );
        $this->db->insert('detailhitungdistribusi', $datanpm);

        $n1npm=$data['n1npm'];
        $n2npm=$data['cnpm']+$n1npm;
        for($a=1;$a<=$data['k'];$a++){
            $insnpm[$a]['idperiodehitung'] = $idperiode;
            $insnpm[$a]['tahun'] = $tahun;
            $insnpm[$a]['rasio'] = '0';
            $insnpm[$a]['ket'] = $a;
            $insnpm[$a]['n1'] = $n1npm;
            $insnpm[$a]['n2'] = $n2npm;
            $n1npm=$n1npm+$data['cnpm'];
            $n2npm=$n2npm+$data['cnpm'];
        };

        $this->db->insert_batch('ketdistribusi', $insnpm);
        
        $datatato=array(
            'idperiode'=>$idperiode,
            'rasio'=>'1',
            'tahun'=>$tahun,
            'k'=>$data['k'],
            'r'=>$data['rtato'],
            'c'=>$data['ctato'],
        );

        $n1tato=$data['n1tato'];
        $n2tato=$data['ctato']+$n1tato;
        for($a=1;$a<=$data['k'];$a++){
            $instato[$a]['idperiodehitung'] = $idperiode;
            $instato[$a]['tahun'] = $tahun;
            $instato[$a]['rasio'] = '1';
            $instato[$a]['ket'] = $a;
            $instato[$a]['n1'] = $n1tato;
            $instato[$a]['n2'] = $n2tato;
            $n1tato=$n1tato+$data['ctato'];
            $n2tato=$n2tato+$data['ctato'];
        };
        $this->db->insert_batch('ketdistribusi', $instato);


        $this->db->insert('detailhitungdistribusi', $datatato);
        $dataroi=array(
            'idperiode'=>$idperiode,
            'rasio'=>'2',
            'tahun'=>$tahun,
            'k'=>$data['k'],
            'r'=>$data['rroi'],
            'c'=>$data['croi'],
        );
        $this->db->insert('detailhitungdistribusi', $dataroi);

        $n1roi=$data['n1roi'];
        $n2roi=$data['cnpm']+$n1roi;
        for($a=1;$a<=$data['k'];$a++){
            $insroi[$a]['idperiodehitung'] = $idperiode;
            $insroi[$a]['tahun'] = $tahun;
            $insroi[$a]['rasio'] = '2';
            $insroi[$a]['ket'] = $a;
            $insroi[$a]['n1'] = $n1roi;
            $insroi[$a]['n2'] = $n2roi;
            $n1roi=$n1roi+$data['croi'];
            $n2roi=$n2roi+$data['croi'];
        }
        $this->db->insert_batch('ketdistribusi', $insroi);

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

    function listnpm($tahun){
        $query=$this->db->query("SELECT rasiodupont.id,idlk,persenlababersih,laporankeuangan.idperusahaan,tahun,statushitung,namaperusahaan FROM rasiodupont JOIN laporankeuangan on idlk=laporankeuangan.id join perusahaan on laporankeuangan.idperusahaan=perusahaan.idperusahaan WHERE tahun='$tahun' and statushitung='1'");
        return $query;
    }

    function listtato($tahun){
        $query=$this->db->query("SELECT rasiodupont.id,idlk,tato,laporankeuangan.idperusahaan,tahun,statushitung,namaperusahaan FROM rasiodupont JOIN laporankeuangan on idlk=laporankeuangan.id join perusahaan on laporankeuangan.idperusahaan=perusahaan.idperusahaan WHERE tahun='$tahun' and statushitung='1'");
        return $query;
    }

    function listroi($tahun){
        $query=$this->db->query("SELECT rasiodupont.id,idlk,roi,laporankeuangan.idperusahaan,tahun,statushitung,namaperusahaan FROM rasiodupont JOIN laporankeuangan on idlk=laporankeuangan.id join perusahaan on laporankeuangan.idperusahaan=perusahaan.idperusahaan WHERE tahun='$tahun' and statushitung='1'");
        return $query;
    }

    function listanak($tahun){
        $nilai=$this->db->query("SELECT count(*) as jumlah,min(persenlababersih)as n1npm,max(persenlababersih) as n2npm,min(tato) as n1tato,MAX(tato) as n2tato,min(roi) as n1roi,max(roi) as n2roi from rasiodupont join laporankeuangan on idlk=laporankeuangan.id WHERE tahun='2012' and statushitung='1'")->row();
        $n1npm=$nilai->n1npm;
        $n2npm=$nilai->n2npm;
        $n1tato=$nilai->n1tato;
        $n2tato=$nilai->n2tato;
        $n1roi=$nilai->n1roi;
        $n2roi=$nilai->n2roi;
        $jumlahperusahaan=$nilai->jumlah;
        $l=log($jumlahperusahaan);
        $k=round(1+(3.322*log($jumlahperusahaan)));
        $rnpm=$n2npm-$n1npm;
        $rtato=$n2tato-$n1tato;
        $rroi=$n2roi-$n1roi;

        $cnpm=$rnpm/$k;
        $ctato=$rtato/$k;
        $croi=$rroi/$k;
        $isicnpm=array();
       

        $datahasil=array(
            'n1npm'=>$n1npm,
            'n2npm'=>$n2npm,
            'n1tato'=>$n1tato,
            'n2tato'=>$n2tato,
            'n1roi'=>$n1roi,
            'n2roi'=>$n2roi,

            'k'=>$k,
            'l'=>$l,
            'rnpm'=>$rnpm,
            'rtato'=>$rtato,
            'rroi'=>$rroi,

            'cnpm'=>$cnpm,
            'ctato'=>$ctato,
            'croi'=>$croi,
        );
        return $datahasil;
    }
}