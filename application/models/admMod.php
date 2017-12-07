<?php

class AdmMod extends CI_Model {

	function get_user(){
		return $this->db->get('users');
	}

	

	function login_authen($email, $password){
		$sql = "select * from admins where email_admin = '$email' and password = '$password'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}

	}
	
	function authen_admin($email){
		$sql = "select authentication from admins where email_admin = '$email'";
		$query = $this->db->query($sql);

		if ($query->num_rows() == 1) {
			return $query->result_array();
		}else{
			return false;
		}

	}
	
	function wrong_password($email,$value){
		$sql = "update admins set authentication = $value where email_admin = '$email'";
		$query = $this->db->query($sql);
	}

	function get_admin($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();

	}
	
}
?>
