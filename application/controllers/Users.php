<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->helper('date');
	}

	public function index()
	{

		// $this->session->userdata('logged_in');

		if ($this->session->userdata('level') == 'admin') {
			$data['judul'] = 'Lihat Users';
			$data['daftar_users'] = $this->users_model->tampil_users();	
			$data['content'] = 'users/tampil_users';
			// var_dump($data['daftar_users']);
			$this->load->view('template/index',$data);

		}elseif ($this->session->userdata('level') == 'gudang') {
			redirect('pembelian_bahan_baku');			

		}elseif ($this->session->userdata('level') == 'kasir'){
			// $user = $this->session->userdata('username');
			// echo "selamat anda sebagai kasir ", $user;

			$data['judul'] = 'Halaman Kasir';
			// $data['daftar_users'] = $this->users_model->tampil_users();	
			$data['content'] = 'penjualan_roti/penjualan_roti';
			$this->load->view('template/index', $data);


		}else{
			echo " <script>
			alert('Login Gagal: Silahkan Login Untuk Mengakses Halaman Ini!');
			history.go(-1);
		</script>";

	}

}

	public function tambah_users()
	{
		$data['judul'] = 'Tambah User';
		$data['content'] = 'users/tambah_users';
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('akses', 'Akses');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/index',$data);
		}else{
			$this->proses_input();
		}
	}

	public function proses_input()
	{
		$data_users = array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'akses'=>$this->input->post('akses')
			);

		$this->users_model->tambah_users($data_users);
		redirect('users');
	}

	public function edit_users($id)
	{
		$data['judul'] = 'Edit User';
		$data['content'] = 'users/edit_users';
		$data['edit'] = $this->users_model->ambil_users($id);
		$array_baru = array($data['edit']);
			// var_dump($array_baru);
		$this->load->view('template/index',$data);
	}

	public function proses_edit($id)
	{
		$data_users = array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'akses'=>$this->input->post('akses')
			);
		$this->users_model->edit_users($data_users,$id);
		redirect('users');
	}

	public function hapus_users($id)
	{
		$this->users_model->hapus_users($id);
		redirect('users');
	}
// ===============================GUDANG==========================================




// =============================KASIR==============================================
	public function daftar_roti()
	{
		if ($this->session->userdata('level')=='kasir') {
			$data['judul'] = 'Halaman Daftar Roti';
			$data['content'] = 'penjualan_roti/penjualan_roti';
			$this->load->view('template/index', $data);
		} else {
				echo " <script>
			alert('Maaf, Perlu Hak Akses Sebagai Kasir Untuk Mengakses Halaman Ini!');
			history.go(-1);
		</script>";
		}
		
		
	}

	public function pemesanan()
	{
		$data['judul'] = 'Halaman Pemesanan';
		$data['content'] = 'penjualan_roti/pemesanan_roti';
		$this->load->view('template/index', $data);
	}

	public function bayar()
	{
		$data['judul'] = 'Halaman Pembayaran';
		$data['content'] = 'penjualan_roti/pembayaran_roti';
		$this->load->view('template/index', $data);
	}


}
// end class users






/* End of file Users.php */
/* Location: ./application/controllers/Users.php */