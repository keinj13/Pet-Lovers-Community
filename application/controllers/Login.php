<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['title'] = 'Login';

		$result = $this->login_model->check_em();
		$user['username'] = $result;
		$this->session->set_userdata('user', $result);
		if($result === 'Mismatch!'){
			echo $result;
		}
		else{
			$this->load->view('template/header');
			redirect('user');
			$this->load->view('template/footer');
		}
	}
}
?>
