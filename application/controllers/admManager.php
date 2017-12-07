<?php

class AdmManager extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('admMod');
		$this->load->helper('url');
	}

	public function view_login(){
		$this->load->view('adm/login');
	}

	function do_login(){
		$email = $this->input->post('adm_mail');
		$password = $this->input->post('adm_password');

		$isLogin = $this->admMod->login_authen($email, $password);
		$i = $this->admMod->authen_admin($email);

		if ($isLogin == true && $i[0]['authentication']<3) {
			
 			$where = array('email_admin' => $email);
			$admin = $this->admMod->get_admin('admins',$where);
			$data_session = array(
				'adminid' => $admin[0]['adminid'],
				'username' => $admin[0]['username'],
				'email_admin' => $admin[0]['email_admin']
			);

			$this->session->set_userdata($data_session);
 
			redirect('admControl/showListOrder');
		}else{
			if ($i[0]['authentication']<3) {
				$update = $this->admMod->wrong_password($email, $i[0]['authentication']+1);
				 redirect('admManager/login');
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		 redirect('admManager/view_login');
	}
}
?>