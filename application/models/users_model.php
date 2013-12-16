<?php 
	/**
	* 
	*/
	class Users_model extends CI_Model
	{
		function validate($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',md5($password));
			$this->db->limit(1);

			$query=$this->db->get('users');

			if ($query->num_rows == 1) {
				return $query->row();
			}else{
				return FALSE;
			}
		}

		function tampil_users(){
			return $this->db->get('users');
		}

		function tambah_users($data_users){
			return $this->db->insert('users',$data_users);
		}

		function hapus_users($id){
			$this->db->delete('users',array('id'=>$id));
		}

		function ambil_users($id){
			$query = $this->db->get_where('users',array('id'=>$id));
			return $query->row();
		}

		function edit_users($data_users,$id){
			$query = $this->db->update('users',$data_users,array('id'=>$id));
		}
// ====================================================GUDANG===========================================
		
		

		
		

		
		
	}
	?>