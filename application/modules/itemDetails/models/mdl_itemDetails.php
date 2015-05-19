<?php 
	/**
	* 
	*/
	class mdl_itemDetails extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		function ambilData($look){

			$sql = "
			SELECT
				tbl_data_produk.id_produk,
				tbl_data_produk.uploader,
				tbl_data_produk.nama_produk,
				tbl_data_produk.deskripsi_produk,
				tbl_data_produk.kategori,
				tbl_detail_produk.url_foto1,
				tbl_detail_produk.url_foto2,
				tbl_detail_produk.url_foto3,
				tbl_detail_produk.url_source,
				tbl_detail_produk.url_animasi,
				tbl_detail_produk.jenis_file,
				tbl_detail_produk.tanggal
				
			FROM
				tbl_data_produk
			INNER JOIN tbl_detail_produk ON tbl_data_produk.id_produk = tbl_detail_produk.id_produk 
			WHERE
				tbl_data_produk.id_produk =  ".$_GET['id_produk']."
					
					";
			$query = $this->db->query($sql);
			return $query->result();
		}
		
	}

 ?>