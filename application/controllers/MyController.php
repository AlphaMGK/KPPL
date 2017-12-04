<?php

class MyController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		$this->load->helper(array('form','url'));
		$this->load->library('email');

	}

	function index(){
		$this->load->view('home');

	}

	function login() {
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}
	function do_login(){
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$isLogin = $this->My_Model->login_authen($email, $password);
		$i = $this->My_Model->authen_user($email);

		if ($isLogin == true && $i[0]['authentication']<3) {
			$where = array('email' => $email);
			$user = $this->My_Model->get_user('users',$where);
			$data_session = array(
				'userid' => $user[0]['userid'],
				'email' => $user[0]['email'],
				'notelp' => $user[0]['notelp'],
				'first_name' => $user[0]['first_name'],
				'last_name' => $user[0]['last_name'],
				'usericon' => base_url('images/account.jpg'),
				'logout' => 'Log Out'
			);

			$this->session->set_userdata($data_session);

			redirect(base_url('index.php/MyController/'));

		}else{
			if ($i[0]['authentication']<3) {
				$update = $this->My_Model->wrong_password($email, $i[0]['authentication']+1);

				$data['err_message'] = "Email dan Password Salah";
				$this->load->view('login', $data);
			}else if($i[0]['authentication']>3){
				redirect(base_url('index.php/MyController/'));
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		 redirect('MyController/index');
	}

	public function register(){
			if ($this->session->userdata('userid'))
        {
            redirect('Mycontroller/index');
        } else{

			$this->load->view('register');
		}
		}

	function registrasi(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]|alpha_numeric');
		$this->form_validation->set_rules('passwordcon','Konfirmasi Password', 'required|matches[password]');

		if ($this->form_validation->run() !== FALSE){
        	$firstName = $this->input->post('firstName');
			$lastName = $this->input->post('lastName');
			$gender = $this->input->post('gender');
			$noTelp = $this->input->post('notelp');
 			$email = $this->input->post('email');
			$password = $this->input->post('password');


			$data = array(
				'password' => sha1($password),
				'first_name' => $firstName,
				'last_name' => $lastName,
				'email' => $email,
				'notelp' => $noTelp,
				'gender' => $gender
			);
			$this->My_Model->insertUser('users',$data);
			//redirect('MyController/index');
			$this->do_login();
        }else{
        	$this->load->view('register');

        }


	}

	function show_paket_kon(){
		$data['paket'] = $this->My_Model->get_paket_kon()->result();
		$this->load->view('paket_konvensional',$data);
	}

	function show_detail_kon($id){
		$where = array('id_pkt' => $id);
		$paket = $this->My_Model->get_detail_kon('paket_konvensional',$where);
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

	function show_paket_el(){
		$data['paket'] = $this->My_Model->get_paket_el()->result();
		$this->load->view('paket_elektrostatis',$data);
	}

	function show_detail_el($id){
		$where = array('id_pkt' => $id);
		$paket = $this->My_Model->get_detail_el('paket_elektrostatis',$where);
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
			redirect('MyController/login');
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
				$this->My_Model->insert_order('order_paket',$data);
				if ($kategori == 'Konvensional') {
					$this->send_mail();
					redirect('MyController/index');
				}else if ($kategori == 'Elektrostatis') {
					redirect('MyController/index');
				}

			}

		}


	}

	function send_mail(){
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
	}

}

?>
