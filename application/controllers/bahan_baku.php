<?php 

class Bahan_baku extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('bahan_baku_model');
		$this->load->model('pembelian_bahan_baku_model');
		$this->session->userdata('is_login');

	}

	public function index()
	{

	}

	public function tambah_nama_bahan()
	{
		$hari_ini=date("d-F-Y");
		$data_bahan = array(
			'nama'=>$this->input->post('nama_bahan'),
			'jumlah_stok'=>$this->input->post('jumlah')
			// 'satuan'=>$this->input->post('satuan'),
			);

		$this->bahan_baku_model->tambah_bahan_baku($data_bahan);

		redirect('pembelian_bahan_baku');
	}


	public function edit_bahan_baku($id)
	{
		$data['judul'] = 'Edit Bahan Baku';
		$data['content'] = 'bahan_baku/edit_bahan_baku';
		$data['edit'] = $this->bahan_baku_model->edit_bahan_baku($id);
		// var_dump($data['edit']);
		$this->load->view('template/index', $data);

	}

	public function proses_edit($id){
		$data_bahan = array(
			'nama'=>$this->input->post('nama_bahan'),
			'jumlah_stok'=>$this->input->post('stok'),
			'satuan'=>$this->input->post('satuan')
			);

		//var_dump($data_bahan);
		$this->bahan_baku_model->update_bahan_baku($data_bahan,$id);
		redirect('pembelian_bahan_baku');
	}
	
	public function hapus_bahan_baku($id)
	{
		// var_dump($id);
		$this->bahan_baku_model->hapus_bahan_baku($id);
		redirect('pembelian_bahan_baku');
	}












}
?>