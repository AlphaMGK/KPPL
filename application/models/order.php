<?php

	class Order extends CI_Model {


		function insert_order($table,$data){
			
			$this->db->insert($table,$data);

		}

		function get_order(){

		$sql = "SELECT * FROM order_paket ORDER BY tanggal_order";
		return $this->db->query($sql);

		}

		function delete_order($where){

		$this->db->delete('order_paket',$where);

		}

		function update_status($table,$where,$data){
			
		$this->db->update($table,$data,$where);

		}

		function get_status($email){
			
			

			//$sql =  "select * from order_paket where email = '$email' ORDER BY tanggal_order";
			$sql = "SELECT order_paket.no_order, order_paket.harga_total, order_paket.status, paket.nama_pkt, order_paket.tanggal_order FROM order_paket INNER JOIN paket ON order_paket.kode_paket=paket.id_pkt WHERE email = '$email' ORDER BY tanggal_order";

			$data = $this->db->query($sql);
			return $data;

		}
	
	}


?>