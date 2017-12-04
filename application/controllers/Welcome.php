<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function home(){
		$this->load->view('home');
	}
	public function login(){
		$this->load->view('login');
	}
	public function single(){
		$this->load->view('single');
	}
	public function register(){
		$this->load->view('register');
	}

	
}
