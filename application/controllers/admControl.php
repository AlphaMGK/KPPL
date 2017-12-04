<?php

class AdmControl extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('admMod');
		$this->load->helper('url');
		if (!$this->session->userdata('adminid'))
        {
            redirect('admLogin/login');
        } 
	}

	public function index(){
		$this->load->view('adm/index');
	}
	

	function listUsers(){
		$data['user'] = $this->admMod->get_user()->result();
		$this->load->view('adm/list_users',$data);

	}

	function listOrder(){
		$data['order'] = $this->admMod->get_order()->result();
		$this->load->view('adm/list_order',$data);

	}

	function logout(){
		$this->session->sess_destroy();
		 redirect('admLogin/login');
	}
	
	function delete($id){
		$where = array(
			'no_order' => $id
			);
		$this->admMod->delete_order($where);
		redirect('admControl/listOrder');
	}
	
	function validasi($id){

		$data_update = array(
			'validasi' => 1
			);
		$where = array('no_order' => $id);
		$this->admMod->validate('order_paket',$where,$data_update);

		redirect('admControl/listOrder');
		
	}
	
}

?>
