<?php

class CustControl extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		$this->load->model('order');
		$this->load->helper(array('form','url'));
		$this->load->library('email');

	}

	function index(){
		$this->load->view('home');

	}

	function show_paket($kategori){
		$where = array('kategori_pkt' => $kategori);

		$data['paket'] = $this->My_Model->get_paket($where)->result();

		$this->load->view('daftar_paket',$data);


	}

	/*function show_paket_el($kategori){
		$where = array('kategori_pkt' => $ketegori);
		$data['paket'] = $this->My_Model->get_paket($kategori)->result();
		$this->load->view('paket_elektrostatis',$data);
	}*/

	function show_detail($id){
		$where = array('id_pkt' => $id);
		$paket = $this->My_Model->get_detail('paket',$where);
		$data = array(
				'id_pkt' => $paket[0]['id_pkt'],
				'nama_pkt' => $paket[0]['nama_pkt'],
				'kategori_pkt' => $paket[0]['kategori_pkt'],
				'deskripsi_pkt' => $paket[0]['deskripsi_pkt'],
				'harga_pkt' => $paket[0]['harga_pkt'],
				'gambar_pkt' => $paket[0]['gambar_pkt']
			);

		$this->load->view('single',$data);
	}

	
	function show_order($kategori,$id){
		if(isset($this->session->userdata['userid'])){

			$data['id'] = $id;
			$data['kategori'] = $kategori;
			$this->load->view('formPesan',$data);
		}else{
			redirect('custManager/login');
		}
	}

	function do_order($kategori, $id){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('luas','Luas Bangunan', 'required|integer|max_length[4]');
		$this->form_validation->set_rules('tinggi', 'Tinggi Bangunan', 'required|integer|max_length[3]');

		if($this->form_validation->run() !== FALSE){
			$this->load->library('upload');
			$fileUpload = array();

			$fileGambar = array(
				'upload_path' => './order/',
				'allowed_types' => 'gif|jpg|png'
			);

			$this->upload->initialize($fileGambar);

			if ($this->upload->do_upload('image')) {

				$fileUpload= $this->upload->data();

				$kode_paket = $id;
				$tanggal = date(c);
				$emailq = $this->session->userdata('email');
				$notelp = $this->session->userdata('notelp');
				$alamat = $this->input->post('alamat');
				$luas = $this->input->post('luas');
				$tinggi = $this->input->post('tinggi');
				$tanah = $this->input->post('tanah');
				$image = $fileUpload['file_name'];
				if($kategori=='Konvensional'){
					$validasi = 1;
				}else {
					$validasi = 0;
				}


				$data = array(
					'email' => $emailq,
					'notelp' => $notelp,
					'alamat' => $alamat,
					'luas' => $luas,
					'tinggi' => $tinggi,
					'tanah' => $tanah,
					'image' => $image,
					'kode_paket' => $kode_paket,
					'tanggal_order' => $tanggal,
					'validasi' => $validasi

				);
				$this->order->insert_order('order_paket',$data);
				if ($kategori == 'Konvensional') {
					$this->send_mail();
					redirect('custControl/index');
				}else if ($kategori == 'Elektrostatis') {
					redirect('custControl/index');
				}

			}

		}


	}

	/*function send_mail(){
		if(isset($this->session->userdata['userid'])){

		$this->load->library('email');
		$get = get_instance();
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "panahcakrawala2@gmail.com";
        $config['smtp_pass'] = "cakra12345";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";


        $this->email->initialize($config);
        $sendto = $this->session->userdata('email');
		$this->email->to($sendto);
		$this->email->from('panahcakrawala2@gmail.com','Penangkal Petir Panah Cakrawala');
		$this->email->subject('Test Email (Attachment)');
		$this->email->message('Hai Customer');
		$this->email->attach('mail/penawaran.pdf');
		$this->email->send();
		//$sent = $this->email->send();
		//var_dump($sent);
		}
	}*/ 

}

?>
