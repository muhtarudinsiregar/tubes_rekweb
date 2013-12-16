<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->model('users_model');
  	}


	public function index()
	{
		$session = $this->session->userdata('username',true);

		if ($session == false) {
			redirect('login');
		} else {
			redirect('users');
		}
	}

	public function login_menu()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$data['judul'] = 'Home';
		$data['content'] = 'home_login';
		// $data['footer'] = 'template/footer';
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/index',$data);
		}else{
			$data_users = array(
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
				);
			$this->proses_login($data_users);
		}

	}

	public function proses_login($data_users)
	{
		// $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		
		if ($this->form_validation->run()==TRUE) {
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$data_user = $this->users_model->validate($username,$password);
			
			if ($data_user == FALSE) {
				$this->form_validation->set_message('proses_login', 'Username Atau Password Yang Anda Masukkan Salah');
				// redirect('index.php');
				echo "gagal di data user == false";

			} else {
				$data_user = $this->users_model->validate($username,$password);
				$data= (array)$data_user;
				$data_session1 = array(
					'username' =>$data['username'],
					'level' =>$data['akses']
					);
				// var_dump($data_session);
				// $this->session->set_userdata('logged_in',TRUE);
				$this->session->set_userdata($data_session1);
				redirect('users');
				}
				
			}
		else{
			// redirect('index.php');
			echo "gagal di else dari percabangan pertama";
			var_dump($data_users);
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	// public function login(){
	// 	$data['judul'] = "Home";
	// 	$data['content'] = "login"; 
	// 	$this->load->view('template/index',$data);
	// }

	public function admin(){
		$data['judul'] = "Halaman Admin";
		$data['content'] = "admin";
		$this->load->view('template/index',$data);
	}

	public function bahan_baku(){
		$data['content'] = 'bahan_baku/bahan_baku';
		$this->load->view('template/index',$data);
	}

	public function login_validation(){
		$this->load->library('form_validation');
		// set_rules(variabel,title,)
		$this->form_validation->set_rules('username','Username','required|trim');		
		$this->form_validation->set_rules('password','Password','required|md5|trim');

		
	}

	// public function logout(){
	//     $this->session->sess_destroy();
	//     $this->index();
 //  	}

  	public function tambah_bahan_baku(){
  		$this->load->model('model_account');
  		$this->model_account->tambah_bahan_baku();
  		$data['notifikasi'] = 'Data Berhasil Disimpan';
		$data['judul'] = 'Insert Data Berhasil';
		$this->load->view('notifikasi',$data);

  	}

  	public function penjualan_roti(){
  		$data['content'] = 'penjualan_roti/penjualan_roti';
		$this->load->view('template/index',$data);
  	}


}
