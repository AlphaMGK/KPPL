<?php

	class Order extends CI_Model {


		function insert_order($table,$data){
			
			$this->db->insert($table,$data);

		}

		function get_order(){

		$sql = "SELECT * FROM order_paket ORDER BY tanggal_order, validasi";
		return $this->db->query($sql);

		}

		function delete_order($where){

		$this->db->delete('order_paket',$where);

		}

		function validate($table,$where,$data){
			
		$this->db->update($table,$data,$where);

		}
	
	}


?>