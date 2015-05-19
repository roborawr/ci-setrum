<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class model_user extends CI_Model{
		public function cek_user($data){

			//$query = $this->db->get_where('tbl_customer',$data);

			$sql = ("SELECT *  FROM tbl_customer WHERE username='".$data['username']."' AND password='".$data['password']."'");
			$query = $this->db->query($sql);
			return $query; 
		}
	}

?>