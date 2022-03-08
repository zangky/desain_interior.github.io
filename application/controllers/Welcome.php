<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();		
		$this->load->model('Customer_model');
		$this->load->model('Model_kategori');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['kategori'] = $this->Model_kategori->tampil_kategori()->result();
		$this->load->view('header',$data);
		$this->load->view('beranda',$data);
		$this->load->view('footer',$data);
	}
	
	//untuk pendaftaran customer
	 function daftar()
	 { 
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		//pembuatan kode otomatis
		$cek = $this->db->query("SELECT id_cust FROM customer ORDER BY id_cust DESC limit 1");
		$jumlah = $cek->num_rows();
		foreach ($cek->result() as $ck ) {
			$no_customer = $ck->id_cust;
		}
		if ($jumlah<>0) {
			$kode= intval($no_customer)+1;
		}else{
			$kode = 1;
		}
		//hasil kode
		$kodemax= str_pad($kode, 6,"0", STR_PAD_LEFT);
		 
		$data = array(
			'id_cust' => $kodemax,
			'nama' => $nama,
			'no_telp' => $email,
			'alamat' => $alamat,
			'email' => $email,
			'username' => $username,
			'password' => $password
			);
		$this->Customer_model->insert_data($data,'customer');
		redirect('/');
		}


}
