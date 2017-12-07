<?php
	class Paket extends CI_Model {
		

		function insert_paket($table,$data){
			$this->db->insert($table,$data);
		}

		function update_paket($table,$where,$data){
		$this->db->update($table,$data,$where);
	}

		function get_paket($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();
		}


		function delete_paket($table,$where){
		$this->db->delete($table, $where);
	}



	}


?>