<?php

class My_Model extends CI_Model {

	function insert_order($table,$data){
			
			$this->db->insert($table,$data);

		}

	function get_paket($where){
		$data = $this->db->get_where('paket',$where);
		return $data;
	}

	

	function get_detail($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();

		/*$sql = "select * from paket where id_pkt = '$id'";
		$query = $this->db->query($sql);*/

	}
	

}

?>
