<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_user'));
	}

	public function index(){
		$this->load->view('login');
	}

	public function auth(){
		$this->M_user->auth();
	}

	public function logout(){
		$this->M_user->logout();
		echo '<script>alert("Terima Kasih");window.location = "'.base_url().'";</script>';
	}
}