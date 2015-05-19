<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class model_user extends CI_Model{
				
			function __construct(argument)
			{
				# code...
			}
		
		public function cek_user($data){

			$query = $this->db->get_where('tbl_customer',$data);
			return $query;
		}
	}

?>