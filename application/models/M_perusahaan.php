<?php
class M_perusahaan extends CI_Model {
	public $idperusahaan;
	public $namaperusahaan;
	public $keterangan;
	public $username;
	public $password;

	function idperusahaan(){
        //K002
        $this->db->select('Right(idperusahaan,3) as kode',false);
        
        $this->db->order_by('idperusahaan','desc');
        $this->db->limit(1);
        $query = $this->db->get('perusahaan');

        if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $idperusahaan  = "P".$kodemax;
        return $idperusahaan;
    }

    function simpan(){
        $this->idperusahaan=$this->idperusahaan();
        $this->namaperusahaan=$this->input->post('namaperusahaan',true);
        $this->keterangan=$this->input->post('keterangan',true);
        $this->username=$this->input->post('username',true);
        $this->password='123';
        $this->db->insert('perusahaan', $this);
        return true;
    }

    function listall(){
    	$query = $this->db->get('perusahaan');
    	return $query;
    }

    function listwhere($id){
    	$query = $this->db->get_where('perusahaan',array('idperusahaan'=>$id));
    	return $query;
    }
}