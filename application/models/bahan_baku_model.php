<?php 

	/**
	* 
	*/
	class Bahan_baku_model extends CI_Model
	{
		
		public function tambah_bahan_baku($data_bahan)
		{
			return $this->db->insert('bahan_baku',$data_bahan);
		}

		public function ambil_bahan_baku()
		{
			return $this->db->get('bahan_baku');
		}

		public function hapus_bahan_baku($bahan_baku_id)
		{
			$this->db->delete('bahan_baku',array('id'=>$bahan_baku_id));
		}

		public function edit_bahan_baku($bahan_baku_id)
		{
			 $query = $this->db->get_where('bahan_baku',array('id'=>$bahan_baku_id));
			 return $query->row();
		}

		public function update_bahan_baku($data_bahan,$bahan_baku_id)
		{
			$query = $this->db->update('bahan_baku',$data_bahan,array('id'=>$bahan_baku_id));
		}


	}
 ?>