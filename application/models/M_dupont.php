<?php
class M_dupont extends CI_Model {

	function hitungdupont($id){
		$kas=0;
		$suratberharga=0;
		$piutang=0;
		$persediaan=0;
		$aktivatetap=0;
		$penjualan=0;
		$hpp=0;
		$biayaoperasi=0;
		$biayabunga=0;
		$pph=0;
		//0=kas 1=surat berharga 2=piutang dagang 3=persediaan 4=aktiva tetap 5=penjualan 6=hpp 7=biaya operasi 8=biaya bunga 9=pajak penghasilan 10=laba stlh pajak 11=laba bersih
		$this->db->select_sum('jumlah');
		$kas=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'0'))->row()->jumlah;
		$this->db->select_sum('jumlah');
		$suratberharga=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'1'))->row()->jumlah;
		$this->db->select_sum('jumlah');
		$piutang=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'2'))->row()->jumlah;
		$this->db->select_sum('jumlah');
		$persediaan=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'3'))->row()->jumlah;
		$this->db->select_sum('jumlah');
		$aktivatetap=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'4'))->row()->jumlah;
		$this->db->select_sum('jumlah');
		$penjualan=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'5'))->row()->jumlah;
		$this->db->select_sum('jumlah');
		$hpp=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'6'))->row()->jumlah;
		$this->db->select_sum('jumlah');
		$biayaoperasi=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'7'))->row()->jumlah;
		$this->db->select_sum('jumlah');
		$biayabunga=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'8'))->row()->jumlah;
		$this->db->select_sum('jumlah');
		$pph=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'9'))->row()->jumlah;
		// $this->db->select_sum('jumlah');
		// $laba=$this->db->get_where('detaillaporankeuangan',array('idlk'=>$id,'jenisakun'=>'10'))->row()->jumlah;
		$this->db->select('*')->from('laporankeuangan')->join('perusahaan','laporankeuangan.idperusahaan=perusahaan.idperusahaan')->where(array('laporankeuangan.id'=>$id));
		$haha=$this->db->get()->row();
		$namaperusahaan=$haha->namaperusahaan;
		$tahun=$haha->tahun;

		$aktivalancar=$kas+$suratberharga+$piutang+$persediaan;
		$totalaktiva=$aktivatetap+$aktivalancar;
		$totalbiaya=$hpp+$biayaoperasi+$biayabunga+$pph;
		$laba=$penjualan-$totalbiaya;
		if($penjualan==0){
			$persenlaba=0;
		}else{
			$persenlaba=$laba/$penjualan*100;	
		}
		if($totalaktiva==0){
			$tato=0;
		}else{
			$tato=$penjualan/$totalaktiva;	
		}
		
		$roi=$persenlaba*$tato;

		$hasil=array(
			'kas'=>$kas,
			'suratberharga'=>$suratberharga,
			'piutang'=>$piutang,
			'persediaan'=>$persediaan,
			'aktivatetap'=>$aktivatetap,
			'aktivalancar'=>$aktivalancar,
			'totalaktiva'=>$totalaktiva,
			'penjualan'=>$penjualan,
			'hpp'=>$hpp,
			'biayaoperasi'=>$biayaoperasi,
			'biayabunga'=>$biayabunga,
			'pph'=>$pph,
			'totalbiaya'=>$totalbiaya,
			'laba'=>$laba,
			'persenlaba'=>$persenlaba,
			'tato'=>$tato,
			'roi'=>$roi,
			'namaperusahaan'=>$namaperusahaan,
			'tahun'=>$tahun,
			'idlk'=>$id
		);

		return $hasil;
	}

	function simpan(){
		$data=array(
			'idlk'=>$this->input->post('idlk',true),
			'kas'=>$this->input->post('kas1',true),
			'suratberharga'=>$this->input->post('suratberharga1',true),
			'piutangdagang'=>$this->input->post('piutangdagang1',true),
			'persediaan'=>$this->input->post('persediaan1',true),
			'aktivatetap'=>$this->input->post('nilaibuku1',true),
			'penjualan'=>$this->input->post('totalpenjualan1',true),
			'hpp'=>$this->input->post('hpp1',true),
			'biayaoperasi'=>$this->input->post('biayaoperasi1',true),
			'biayabunga'=>$this->input->post('biayabunga1',true),
			'pph'=>$this->input->post('pph1',true),
			'labastlhpajak'=>$this->input->post('labasetelahpajak1',true),
			'persenlababersih'=>$this->input->post('plababersih1',true),
			'tato'=>$this->input->post('tato1',true),
			'roi'=>$this->input->post('roi1',true),
		);
		$dataupdate=array(
            'statushitung'=>'1',
        );
       
		if($this->input->post('roi1',true)==0 && $this->input->post('tato1',true)==0&&$this->input->post('plababersih1',true)==0){
			
        	return false;
		}else{
			$this->db->insert('rasiodupont', $data);
        	$this->db->where('id',$this->input->post('idlk',true));
        	$this->db->update('laporankeuangan',$dataupdate);
        	return true;
		}
		
	}
}