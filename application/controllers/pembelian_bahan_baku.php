<?php 
/**
* 
*/
class Pembelian_bahan_baku extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pembelian_bahan_baku_model');
		$this->load->model('bahan_baku_model');

	}

	public function index()
	{
		$this->halaman();
	}

	public function halaman($halaman=1)
	{	
		$data['judul'] = 'Halaman Gudang';	
		$data['content'] = 'bahan_baku/bahan_baku';
		//$data['daftar_stok'] = $this->pembelian_bahan_baku_model->tampil_stok();
		$data['bahan'] = $this->bahan_baku_model->ambil_bahan_baku();
		$jumlah_data=$this->db->get('pembelian_bahan_baku');
		$config['base_url'] = base_url().'pembelian_bahan_baku/halaman/';
		$config['total_rows'] = $jumlah_data->num_rows();
		$config['per_page'] = 5;
		$nomer_halaman=$this->uri->segment(3,1);
		$halaman=($nomer_halaman - 1)*$config['per_page'];
		$config['use_page_numbers'] = true;
		$config['num_links']=2;



		// inisialisasi config
		$this->pagination->initialize($config);
		//tampil data
		$data['tampil_stok'] = $this->pembelian_bahan_baku_model->tampil_stok($config['per_page'],$halaman);
		
		//var_dump($data['tampil_stok']->result());
		//pagination
		$data['link'] = $this->pagination->create_links();
		$data['no'] = $halaman;
		$this->load->view('template/index', $data);
	}

	public function tambah_bahan()
	{
		$stok=$this->input->post('stok');
		$harga=$this->input->post('harga');
		$data_bahan= array(
			'bahan_baku_id'=>$this->input->post('id_bahan'),
			'jumlah'=>$this->input->post('stok'),
			'satuan'=>$this->input->post('satuan'),
			'harga_satuan'=>$this->input->post('harga'),
			'tanggal_pembelian'=>$this->input->post('tanggal_pembelian'),
			'total'=>$stok*$harga
			);
		$this->pembelian_bahan_baku_model->pembelian_bahan_baku($data_bahan);
		if (isset($data_bahan)) {
			echo " <script>
			alert('Data Berhasil Dimasukkan');
		</script>";
		redirect('pembelian_bahan_baku');
		}
	}


}

 ?>