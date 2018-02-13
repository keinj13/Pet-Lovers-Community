<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$user =  $this->session->usermail('email');

		if( empty($user) )
			redirect(' ','refresh');
	}

	public function index(){

		$this->load->view('user');
	}

}
