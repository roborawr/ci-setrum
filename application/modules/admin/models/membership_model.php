<?php 

	class Membership_model extends CI_Model{

		public $tbl_customer= 'tbl_customer';

		function get_records()
		{
			$query = $this->db->get('tbl_customer');
			return $query->result();
		}

		function create_member(){
			$tambah_user = array (
					 'username' => $this->input->post('username'),
					 'password' => md5($this->input->post('password1')),
					 'nama_lengkap' => $this->input->post('nama'),
					 'email' => $this->input->post('alamat_email'),
					 'role' => $this->input->post('role')
				);

			$insert = $this->db->insert('tbl_customer', $tambah_user);
			return $insert;

		}
		
		function get_data_tbluser_by_username($data){
			$this->db->where($data);
			$query=$this->db->get('tbl_customer');
			
			$data=$query->first_row();
			return $data;
		}


		function proses_ubah($data){

			$this->db->where('id_customer',$data['id_customer']);
			$query=$this->db->update('tbl_customer',$data);
			return $query;
		}

		function hapus($del)
		{
			$query=$this->db->delete('tbl_customer',$del);
			return $query;
		}


	}
 ?>