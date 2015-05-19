<?php 

	/**
	* 
	*/
	class Mdl_item_produk extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		function AdmProdukAdd($data){
			
			$this->db->trans_start();
			$this->db->query("INSERT INTO tbl_data_produk(uploader, nama_produk, deskripsi_produk, kategori) VALUES('".$data['uploader']."','".$data['nama_produk']."','".$data['deskripsi_produk']."','".$data['kategori']."') ");
			$topid =$this->db->insert_id();
			$this->db->query("INSERT INTO tbl_detail_produk(id_detail_produk, url_foto1, url_foto2, url_foto3, url_animasi, url_source, jenis_file, tanggal, id_produk, statusProduk) VALUES('".$topid."','".$data['url_gambar1']."','".$data['url_gambar2']."','".$data['url_gambar3']."','".$data['url_animasi']."','".$data['url_source']."','".$data['jenis_file']."','".$data['tanggal']."','".$topid."','".$data['statusProduk']."')");
			$this->db->trans_complete();
			
			return true;
		}


		function AmbilDataProduk(){
			$sql ="
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
					tbl_detail_produk.tanggal,
					tbl_detail_produk.statusProduk,
					tbl_detail_produk.id_produk
				FROM
				tbl_data_produk
				INNER JOIN tbl_detail_produk ON tbl_data_produk.id_produk = tbl_detail_produk.id_produk
				WHERE
				tbl_data_produk.id_produk = tbl_detail_produk.id_detail_produk


			";

			// $sql ="
			// 	SELECT
			// 		tbl_data_produk.id_produk,
			// 		tbl_data_produk.uploader,
			// 		tbl_data_produk.nama_produk,
			// 		tbl_data_produk.deskripsi_produk,
			// 		tbl_detail_produk.url_foto,
			// 		tbl_detail_produk.url_animasi,
			// 		tbl_detail_produk.url_source,
			// 		tbl_detail_produk.jenis_file,
			// 		tbl_detail_produk.tanggal
			// 		FROM
			// 		tbl_data_produk
			// 		INNER JOIN tbl_detail_produk ON tbl_data_produk.id_produk = tbl_detail_produk.id_produk
			// 		WHERE
			// 		tbl_data_produk.id_produk = tbl_detail_produk.id_detail_produk
			// ";

			$query = $this->db->query($sql);
			return $query;
		}

		function DelProdukAdm($del)
		{
			
			
			$sql = "
				DELETE FROM tbl_data_produk WHERE id_produk = '".$del['id_produk']."'
			";
			$query = $this->db->query($sql);
			// $query=$this->db->delete('tbl_customer',$del);
			return $query;
		}

		function get_data_item_by_id($data){
			// $this->db->where($data);

			$sql="
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
				tbl_detail_produk.tanggal,
				tbl_detail_produk.id_produk
			FROM
			tbl_data_produk
			INNER JOIN tbl_detail_produk ON tbl_data_produk.id_produk = tbl_detail_produk.id_produk
			WHERE
				tbl_data_produk.id_produk = ".$data['id_temp']."
			";

			$query = $this->db->query($sql);

			return $query->result();
		}

		function statusUpdate($data){

			$sql="
				UPDATE tbl_detail_produk
				SET statusProduk = 'diterima'
				WHERE id_detail_produk=".$data['id_detail_produk']." ";

			$query = $this->db->query($sql);

			return $query;

		}

		function statusUnupdate($data){

			$sql="
				UPDATE tbl_detail_produk
				SET statusProduk = 'pending'
				WHERE id_detail_produk=".$data['id_detail_produk']." ";

			$query = $this->db->query($sql);

			return $query;

		}
	}

 ?>

 