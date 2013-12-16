<?php 
	
	/**
	* 
	*/
	class Roti extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('roti_model');
			
		}

		public function index()
		{
			$this->daftar_roti();
		}

		public function daftar_roti()
		{
			$data['judul'] = 'Daftar Roti';
			$data['content'] = 'bahan_baku/daftar_roti';

			$this->load->view('template/index', $data);
		}


		
	}
 ?>