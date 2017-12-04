<?php

class My_Model extends CI_Model {

	function insertUser($table,$data){
		$this->db->insert($table,$data);
	}

	function get_user($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();

	}

	function login_authen($email, $password){
		//$this->db->select('*');
		$sql = "select * from users where email = '$email' and password = '$password'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}
	function authen_user($email){
		$sql = "select authentication from users where email = '$email'";
		$query = $this->db->query($sql);

		if ($query->num_rows() == 1) {
			return $query->result_array();
		}else{
			return false;
		}
	}
	function wrong_password($email,$value){
		$sql = "update users set authentication = $value where email = '$email'";
		$query = $this->db->query($sql);
	}

	function get_paket_kon(){
		return $this->db->get('paket_konvensional');
	}

	function get_paket_el(){
		return $this->db->get('paket_elektrostatis');
	}

	function get_detail_kon($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();

		/*$sql = "select * from paket where id_pkt = '$id'";
		$query = $this->db->query($sql);*/

	}

	function get_detail_el($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();

		/*$sql = "select * from paket where id_pkt = '$id'";
		$query = $this->db->query($sql);*/

	}

	function insert_order($table,$data){
		$this->db->insert($table,$data);
	}

}

?>
