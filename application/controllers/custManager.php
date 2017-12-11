<?php

class CustManager extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('customer');
		$this->load->helper(array('form','url'));
		$this->load->library('email');
	
	}

	function index(){
		$this->load->view('home');

	}

	function login() {
		if(!isset($this->session->userdata['userid'])){
			$data['err_message'] = "";
			$this->load->view('login', $data);

		}else{
			redirect('custManager/index');
		}
		
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


	

	function input_email(){
		$this->load->view('send_mail');
	}


	function send_mail($email){
		
		$this->load->library('email');
		$get = get_instance();
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "panahcakrawala2@gmail.com";
        $config['smtp_pass'] = "cakra12345";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";


        $this->email->initialize($config);
       
		$this->email->to($email);
		$this->email->from('panahcakrawala2@gmail.com','Penangkal Petir Panah Cakrawala');
		$this->email->subject('Ganti Password');
		$data = array( 'email' => $email);

		$this->email->message($this->load->view('email_template', $data, true));
		
		$this->email->send();
		//$sent = $this->email->send();
		//var_dump($sent);
		
	}



	function forget_password(){
		$email = $this->input->post('email');
		$cekEmail = $this->customer->cek_email($email);
		
		if ($cekEmail == true){
			$this->send_mail($email);
			$this->set_sess($email);
		}

		redirect('custManager/index');

	}

	function set_sess($email){
		$this->session->set_userdata($email);
	}

	function form_password(){
		$this->load->view('input_pass');
	}

	function update_password(){
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]|alpha_numeric');
		$this->form_validation->set_rules('conpassword','Konfirmasi Password', 'required|matches[password]');

		$email = $this->session->userdata('email');

		if ($this->form_validation->run() !== FALSE){
			$password = $this->input->post('password');
			$data = array(
				'password' => sha1($password)
				
			);
			$this->customer->update_password('users',$email,$data);
			$this->login();
        }else{
        	$this->load->view('input_pass');

        }
	}



	


}

?>
