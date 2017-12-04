<?php

class AdmMod extends CI_Model {

	function get_user(){
		return $this->db->get('users');
	}

	function get_order(){
		$sql = "SELECT * FROM order_paket ORDER BY tanggal_order, validasi";
		return $this->db->query($sql);
	}

	function login_authen($email, $password){
		$sql = "select * from admins where email = '$email' and password = '$password'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}

	}
	
	function authen_admin($email){
		$sql = "select authentication from admins where email = '$email'";
		$query = $this->db->query($sql);

		if ($query->num_rows() == 1) {
			return $query->result_array();
		}else{
			return false;
		}

	}
	
	function wrong_password($email,$value){
		$sql = "update admins set authentication = $value where email = '$email'";
		$query = $this->db->query($sql);
	}

	function get_admin($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();

	}
	function delete_order($where){
		$this->db->delete('order_paket',$where);
	}

	function validate($table,$where,$data){
		$this->db->update($table,$data,$where);
	}
}
?>
