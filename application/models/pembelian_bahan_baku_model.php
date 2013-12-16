<?php 
	/**
	* 
	*/
	class Pembelian_bahan_baku_model extends CI_Model
	{
		public function pembelian_bahan_baku($data_bahan)
		{
			return $this->db->insert('pembelian_bahan_baku',$data_bahan);
		}


		public function tampil_stok($limit,$offset){
			$this->db->limit($limit,$offset);
			$this->db->select('pembelian_bahan_baku.id as pembelian_id,bahan_baku.id as bahan_id,pembelian_bahan_baku.tanggal_pembelian  AS tanggal,nama,pembelian_bahan_baku.jumlah as stok,pembelian_bahan_baku.satuan AS satuan');
			$this->db->from('bahan_baku'); 
			$this->db->join('pembelian_bahan_baku','pembelian_bahan_baku.bahan_baku_id=bahan_baku.id');
			return $query = $this->db->get();

			
			// return $query = $this->db->query('SELECT pembelian_bahan_baku.id as id_beli, nama,pembelian_bahan_baku.tanggal_pembelian AS tanggal,pembelian_bahan_baku.jumlah as jumlah ,pembelian_bahan_baku.satuan as satuan FROM bahan_baku JOIN pembelian_bahan_baku ON pembelian_bahan_baku.bahan_baku_id = bahan_baku.id');
			//var_dump($query->result_array());
		}


	}
 ?>