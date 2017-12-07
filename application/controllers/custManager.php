<?php

class CustManager extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('customer');
		$this->load->helper(array('form','url'));
		

	}

	function index(){
		$this->load->view('home');

	}

	function login() {
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}

	function do_login(){
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$isLogin = $this->customer->login_authen($email, $password);
		$i = $this->customer->authen_user($email);

		if ($isLogin == true && $i[0]['authentication']<3) {
			$where = array('email' => $email);
			$user = $this->customer->get_user('users',$where);
			$data_session = array(
				'userid' => $user[0]['userid'],
				'email' => $user[0]['email'],
				'notelp' => $user[0]['notelp'],
				'first_name' => $user[0]['first_name'],
				'last_name' => $user[0]['last_name'],
				'usericon' => base_url('images/account.jpg'),
				'logout' => 'Log Out'
			);

			$this->session->set_userdata($data_session);

			redirect(base_url('index.php/custManager/'));

		}else{
			if ($i[0]['authentication']<3) {
				$update = $this->customer->wrong_password($email, $i[0]['authentication']+1);

				$data['err_message'] = "Email dan Password Salah";
				$this->load->view('login', $data);
			}else if($i[0]['authentication']>3){
				redirect(base_url('index.php/custManager/'));
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		 redirect('custManager/index');
	}

	public function register(){
			if ($this->session->userdata('userid'))
        {
            redirect('custManager/index');
        } else{

			$this->load->view('register');
		}
		}

	function registrasi(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]|alpha_numeric');
		$this->form_validation->set_rules('passwordcon','Konfirmasi Password', 'required|matches[password]');

		if ($this->form_validation->run() !== FALSE){
        	$firstName = $this->input->post('firstName');
			$lastName = $this->input->post('lastName');
			$gender = $this->input->post('gender');
			$noTelp = $this->input->post('notelp');
 			$email = $this->input->post('email');
			$password = $this->input->post('password');


			$data = array(
				'password' => sha1($password),
				'first_name' => $firstName,
				'last_name' => $lastName,
				'email' => $email,
				'notelp' => $noTelp,
				'gender' => $gender
			);
			$this->customer->insertUser('users',$data);
			//redirect('custManager/index');
			$this->do_login();
        }else{
        	$this->load->view('register');

        }


	}

}




?>
