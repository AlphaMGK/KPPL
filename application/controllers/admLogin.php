<?php

class AdmLogin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('admMod');
		$this->load->helper('url');
	}

	public function login(){
		$this->load->view('adm/login');
	}

	function do_login(){
		$email = $this->input->post('adm_mail');
		$password = $this->input->post('adm_password');

		$isLogin = $this->admMod->login_authen($email, $password);
		$i = $this->admMod->authen_admin($email);

		if ($isLogin == true && $i[0]['authentication']<3) {
			
 			$where = array('email' => $email);
			$admin = $this->admMod->get_admin('admins',$where);
			$data_session = array(
				'adminid' => $admin[0]['adminid'],
				'username' => $admin[0]['username'],
				'email' => $admin[0]['email']
			);

			$this->session->set_userdata($data_session);
 
			redirect('admControl/listOrder');
		}else{
			if ($i[0]['authentication']<3) {
				$update = $this->admMod->wrong_password($email, $i[0]['authentication']+1);
				 redirect('admLogin/login');
			}
		}
	}
}
?>