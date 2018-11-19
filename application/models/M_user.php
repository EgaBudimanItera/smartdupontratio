<?php
class M_user extends CI_Model {
	function listall(){
    	$query = $this->db->get('user');
    	return $query;
    }
    function cek_login($where){
        return $this->db->get_where('user',$where);
    }
    function auth(){
    	$where=array(
    		'username'=>$this->input->post('username',true),
    		'password'=>$this->input->post('password',true)
    	);
    	$cek=$this->cek_login($where)->num_rows();
    	if($cek!=0){
    		$data_session = array(
	          	'username' => $this->input->post('username',true),
	          	'id'=>$this->cek_login($where)->row()->id,
	          	'status' => "login",
		    );

		    $this->session->set_userdata($data_session);
		     echo '<script>alert("user ditemukan!");window.location = "'.base_url().'dashboard";</script>';
		    
    	}else{
    		 echo '<script>alert("Maaf, username atau password salah!");window.location = "'.base_url().'user";</script>';
    	}
    }

    function logout(){
        $this->session->sess_destroy();
    }
}