<?php

class AdmControl extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('paket');
		$this->load->model('order');
		$this->load->helper(array('form','url'));
		if (!$this->session->userdata('adminid'))
        {
            redirect('admManager/view_login');
        } 
	}

	public function index(){
		$this->load->view('adm/list_order');
	}
	


	function showListOrder(){
		$data['order'] = $this->order->get_order()->result();
		$this->load->view('adm/list_order',$data);

	}

	
	function deleteOrder($id){
		$where = array(
			'no_order' => $id
			);
		$this->order->delete_order($where);
		redirect('admControl/showListOrder');
	}
	
	function update_status($id,$status){

		$data_update = array(
			'status' => $status
			);
		$where = array('no_order' => $id);
		$this->order->update_status('order_paket',$where,$data_update);

		redirect('admControl/showListOrder');
		
	}

	function form_tambah () {
		$this->load->view('adm/create_paket');
	}


	function show_paket($kategori){
		$where = array('kategori_pkt' => $kategori);

		$data['paket'] = $this->paket->get_paket('paket', $where)->result();

		$this->load->view('adm/list_paket',$data);


	}
	

	function tambah_paket(){

			$this->load->library('upload');
			$fileUpload = array();

			$fileGambar = array(
				'upload_path' => './images/',
				'allowed_types' => 'gif|jpg|png'
			);

			$this->upload->initialize($fileGambar);

			if ($this->upload->do_upload('gambar_pkt')) {

				$fileUpload= $this->upload->data();

				
				$id_pkt = $this->input->post('id_pkt');
				$nama_pkt = $this->input->post('nama_pkt');
				$kategori_pkt = $this->input->post('kategori_pkt');
				$deskripsi_pkt = $this->input->post('deskripsi_pkt');
				$harga_pkt = $this->input->post('harga_pkt');
				$gambar_pkt = $fileUpload['file_name'];


				$data = array(
					
					'id_pkt' => $id_pkt,
					'nama_pkt' => $nama_pkt,
					'kategori_pkt' => $kategori_pkt,
					'deskripsi_pkt' => $deskripsi_pkt,
					'harga_pkt' => $harga_pkt,
					'gambar_pkt' => $gambar_pkt
					

				);

				$this->paket->insert_paket('paket',$data);
				
				redirect('admControl/show_paket/'.$kategori_pkt);
			}

		


		
	}


	function show_data($id_pkt){
		$where = array('id_pkt' => $id_pkt);
		$paket = $this->paket->get_paket('paket',$where)->result_array();
		$data = array(
			'id_pkt' => $paket[0]['id_pkt'],
			'nama_pkt' => $paket[0]['nama_pkt'],
			'kategori_pkt' => $paket[0]['kategori_pkt'],
			'deskripsi_pkt' => $paket[0]['deskripsi_pkt'],
			'harga_pkt' => $paket[0]['harga_pkt'],
			'gambar_pkt' => $paket[0]['gambar_pkt']

			);

		$this->load->view('adm/update_paket',$data);

	}



	function update_data(){

		$this->load->library('upload');
		$fileUpload = array();

		$fileGambar = array(
				'upload_path' => './images/',
				'allowed_types' => 'gif|jpg|png'
		);

		$this->upload->initialize($fileGambar);
		
		if($this->upload->do_upload('gambar_pkt')){
			$fileUpload= $this->upload->data();


			$id_pkt = $this->input->post('id_pkt');
			$nama_pkt = $this->input->post('nama_pkt');
			$kategori_pkt = $this->input->post('kategori_pkt');
			$deskripsi_pkt = $this->input->post('deskripsi_pkt');
 			$harga_pkt = $this->input->post('harga_pkt');
			$gambar_pkt = $fileUpload['file_name'];
		
 			$data = array(
					
					'id_pkt' => $id_pkt,
					'nama_pkt' => $nama_pkt,
					'kategori_pkt' => $kategori_pkt,
					'deskripsi_pkt' => $deskripsi_pkt,
					'harga_pkt' => $harga_pkt,
					'gambar_pkt' => $gambar_pkt
					

				);
		
			$where = array('id_pkt' => $id_pkt);
			$this->paket->update_paket('paket',$where,$data);

		redirect('admControl/index');
		}

	}

	function delete_paket($kategori_pkt,$id_pkt){
		$where = array('id_pkt' => $id_pkt);
		$this->paket->delete_paket('paket',$where);

		redirect('admControl/show_paket/'.$kategori_pkt);
	}

}
	


?>
