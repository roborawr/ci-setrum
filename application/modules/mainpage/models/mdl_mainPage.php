<?php 
	
	/**
	* 
	*/
	class Mdl_mainPage extends CI_Model
	{	
		function hitungData(){
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
				ORDER BY tbl_detail_produk.tanggal DESC
				";

			$query = $this->db->query($sql);
			return $query;
		
		}

		function ambilData($data){

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
				tbl_detail_produk.statusProduk,
				tbl_detail_produk.tanggal
				
			FROM
			tbl_data_produk
				INNER JOIN tbl_detail_produk ON tbl_data_produk.id_produk = tbl_detail_produk.id_produk
			WHERE 
				tbl_detail_produk.statusProduk = 'diterima'	
			ORDER BY tbl_detail_produk.tanggal ".$data['order']."
 			";

			$query = $this->db->query($sql);
			return $query;
		}

		function ambilKategori($data){

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
				tbl_detail_produk.jenis_file = '".$data['jenis']."'
			AND
				tbl_detail_produk.statusProduk = 'diterima'				
			AND 
				tbl_data_produk.kategori = '".$data['jurusan']."'
					ORDER BY tbl_data_produk.id_produk ".$data['order']."
 			";

			$query = $this->db->query($sql);
			return $query;
			// tbl_detail_produk.jenis_file = '".$data['kategori']."'
		}

		function searchQuery($data='*'){

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
			INNER JOIN 
				tbl_detail_produk ON tbl_data_produk.id_produk = tbl_detail_produk.id_produk 
			WHERE 
				tbl_data_produk.nama_produk LIKE '%".$data['kataKunci']."%'
			AND
				tbl_detail_produk.statusProduk = 'diterima'	
			ORDER BY tbl_data_produk.id_produk ".$data['sort']."
 			";

 			$query = $this->db->query($sql);
        	return $query;

		}
	
	}

 ?>