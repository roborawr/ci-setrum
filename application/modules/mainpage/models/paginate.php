<?php 
	/**
	* 
	*/
	class Paginate extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		function ambilsemua($limit, $offset){
			$sql = "
				SELECT * FROM countries 
				LIMIT ".$offset.", ".$limit."

			" ;

			$query = $this->db->query($sql);

			return $query->result();

		}

		function itung(){
			$sql = "
				SELECT * FROM countries " ;

			$query = $this->db->query($sql);

			return $query;

		}
	}

 ?>