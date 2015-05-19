<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	* 
	*/ 
	class Ctrl_admin_produk extends MX_Controller
	{
		
		function __construct()
		{
			$this->load->model('mdl_item_produk');
		}

		function do_upload(){

		$data = array(
			'uploader' => $this->session->userdata('nama'),
			'nama_produk' => $this->input->post('inputNamaProduk'),
			'deskripsi_produk' => $this->input->post('inputDeskripsi'),
			'kategori' => $this->input->post('jenisKategori'),
			'jenis_file' => $this->input->post('jenisFile'),
			'url_gambar1' => $this->do_upload_foto1(),
			'url_gambar2' => $this->do_upload_foto2(),
			'url_gambar3' => $this->do_upload_foto3(),
			'url_animasi' => $this->do_upload_animasi(),
			'url_source' => $this->do_upload_source(),
			'statusProduk' => 'pending',
			'tanggal' => date('Ymd')
			);

		//memanggil method add_produk pada mdl_dosen dengan mengirimkan array 'data' yang berisi data
		if($this->mdl_item_produk->AdmProdukAdd($data)){
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign invert"> </i> User <strong>'.$data['nama_produk'].'</strong> baru berhasil ditambahkan</div>');
			redirect('admin/ctrl_admin/data_produk');	
		}else{
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove invert"></i> User <strong>'.$data['username'].'</strong> gagal terupdate!</div>');
			echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		}
		// print_r($data);
		
		
	}

	 function do_upload_foto1()
	{
		$config['upload_path'] = "./fileUpload/foto_produk/"; //lokasi folder yang akan digunakan untuk menyimpan file
		$config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
		$config['file_name'] = url_title($this->input->post('FotoProduk1'));

		$this->upload->initialize($config); //meng set config yang sudah di atur
		if( !$this->upload->do_upload('FotoProduk1'))
			{

			echo $this->upload->display_errors();
			}
		else{
			$data = array(

			'url_gambar1'=>$this->upload->file_name
			
			);			
		}

		return $this->upload->file_name;
	}

	function do_upload_foto2()
	{
		$config['upload_path'] = "./fileUpload/foto_produk/"; //lokasi folder yang akan digunakan untuk menyimpan file
		$config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
		$config['file_name'] = url_title($this->input->post('FotoProduk2'));

		$this->upload->initialize($config); //meng set config yang sudah di atur
		if( !$this->upload->do_upload('FotoProduk2'))
			{

			echo $this->upload->display_errors();
			}
		else{
			$data = array(

			'url_gambar2'=>$this->upload->file_name
			);			
		}

		return $this->upload->file_name;
	}
	function do_upload_foto3()
	{
		$config['upload_path'] = "./fileUpload/foto_produk/"; //lokasi folder yang akan digunakan untuk menyimpan file
		$config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
		$config['file_name'] = url_title($this->input->post('FotoProduk3'));

		$this->upload->initialize($config); //meng set config yang sudah di atur
		if( !$this->upload->do_upload('FotoProduk3'))
			{

			echo $this->upload->display_errors();
			}
		else{
			$data = array(

			'url_gambar3'=>$this->upload->file_name
			);			
		}

		return $this->upload->file_name;
	}

	 function do_upload_animasi()
	{
		$config['upload_path'] = "./fileUpload/animasi_produk/"; //lokasi folder yang akan digunakan untuk menyimpan file
		$config['allowed_types'] = 'swf|mp4'; //extension yang diperbolehkan untuk diupload
		$config['file_name'] = url_title($this->input->post('FileAnimasi'));

		$this->upload->initialize($config); //meng set config yang sudah di atur
		if( !$this->upload->do_upload('FileAnimasi'))
			{

			echo $this->upload->display_errors();
			}
		else{
			$data = array(

			'url_animasi'=>$this->upload->file_name
			);
		}
		return $this->upload->file_name;
	}

	 function do_upload_source()
	{
		$config['upload_path'] = "./fileUpload/source_produk/"; //lokasi folder yang akan digunakan untuk menyimpan file
		$config['allowed_types'] = '*'; //extension yang diperbolehkan untuk diupload
		$config['file_name'] = url_title($this->input->post('FileProduk'));

		$this->upload->initialize($config); //meng set config yang sudah di atur
		if( !$this->upload->do_upload('FileProduk'))
			{

			echo $this->upload->display_errors();
			}
		else{
			$data = array(

			'url_animasi'=>$this->upload->file_name
			);
		}
		return $this->upload->file_name;
	}

	function AdmUpdateItem(){
		$data['judul'] = 'edit user';

		$ubah=array(
			'id_temp'=>$_GET['id_produk']
			);

		$this->load->model('mdl_item_produk');
		
		//$data['records']=$this->mdl_item_produk->get_data_item_by_id($ubah);
		
		if($query = $this->mdl_item_produk->get_data_item_by_id($ubah))
			{
				$data['records'] = $query;
				// print_r($query);
			}

		$data['main_content'] = 'admin/editItem';
		$this->load->view('includes_admin/template', $data);

	}

	function PreAdmDelProduk($id_produk){
		$del=array(
			'id_produk'=>$id_produk
			
		);

		$data ="

    		<div class='modal-body'>
    			Apakah Anda ingin menghapus ?
    		</div>

    		<div class='modal-footer'>
    			<a href='".base_url()."admin/ctrl_admin_produk/AdmDelProduk/".$del['id_produk']."' class='btn btn-danger pull-left'>Ya </a>
    			<button type='button' data-dismiss='modal' aria-label='Close' class='btn btn-default'> Tidak </button>
    		</div>
    	";

		echo $data;
	}

	function AdmDelProduk($id_produk)
	{
		$del=array(
			'id_produk'=>$id_produk
			
		);

		$this->load->model('mdl_item_produk');
		$res=$this->mdl_item_produk->DelProdukAdm($del);
		if($res){
			
			//notifkiasi untuk hapus data 
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign invert"></i> Produk <strong>'.$del['nama'].'</strong> berhasil dihapus</div>');
			redirect('admin/ctrl_admin/data_produk');

		}else{
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove invert"></i> Produk <strong>'.$del['nama'].'</strong> gagal dihapus</div>');
			// echo "Hapus Data Gagal <br>";
			// echo '<a href="'.site_url().'">Kembali</a>';
		}
	}

	function AdmJsonProduk(){
		// $this->load->library('datatables');

		$this->datatables->select("
				tbl_data_produk.id_produk as id_produk, 
				tbl_data_produk.uploader as uploader,
				tbl_data_produk.nama_produk as nama_produk,
				tbl_data_produk.deskripsi_produk as deskripsi_produk,
				tbl_detail_produk.jenis_file as jenis_file,
				tbl_data_produk.kategori as kategori,
				tbl_detail_produk.tanggal as tanggal
			")
		->unset_column("id_produk")
		->unset_column("tanggal")
		// ->add_column("edit", "<a href='".base_url()."admin/ctrl_admin/update/$1'class='btn btn-info' ><i class='glyphicon glyphicon-pencil'></i></a>", "id_produk")
		->add_column("hapus", "<a data-target='#confirmHapus' data-toggle='modal' href='".base_url()."admin/ctrl_admin_produk/PreAdmDelProduk/$1' class='btn btn-danger'><i class='glyphicon glyphicon-remove'></i></a>","id_produk")
		->from("tbl_data_produk")
		->join("tbl_detail_produk","tbl_data_produk.id_produk = tbl_detail_produk.id_produk", "inner" );
		// ->where("uploader",$this->session->userdata('role'))

		echo $this->datatables->generate();
	}


	function produkStatus() {
		$this->load->model('mdl_item_produk');
		$query = $this->mdl_item_produk->AmbilDataProduk();
		if($query) 
			{
				$data['records'] = $query->result();
				// print_r($query);
			}

		if($query->num_rows() > 0)
			{
				$data['statusAlert'] = "<i class='glyphicon glyphicon-exclamation-sign' style='color:red;'></i>";
			}		
		
		$data['header_id'] = "Halaman Admin Data Produk";
		$data['main_content'] = 'admin/statusProduk';
		$this->load->view('includes_admin/template', $data);
	}

	function produkStatusConfirmed($id_produk){
		$upd=array(
			'id_detail_produk'=>$id_produk
		);

		$this->load->model('mdl_item_produk');
		$res=$this->mdl_item_produk->statusUpdate($upd);

		if($res){
			
			//notifkiasi untuk hapus data 
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign invert"></i> Produk berhasil diterima!</div>');
			redirect('admin/ctrl_admin_produk/produkStatus');

		}else{
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove invert"></i> Produk <strong>'.$del['nama'].'</strong> gagal dihapus</div>');
			// echo "Hapus Data Gagal <br>";
			// echo '<a href="'.site_url().'">Kembali</a>';
		}
	}

	function produkStatusUnconfirmed($id_produk){
		$upd=array(
			'id_detail_produk'=>$id_produk
		);

		$this->load->model('mdl_item_produk');
		$res=$this->mdl_item_produk->statusUnupdate($upd);

		if($res){
			
			//notifkiasi untuk hapus data 
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign invert"></i> Produk berhasil diterima!</div>');
			redirect('admin/ctrl_admin_produk/produkStatus');

		}else{
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove invert"></i> Produk <strong>'.$del['nama'].'</strong> gagal dihapus</div>');
			// echo "Hapus Data Gagal <br>";
			// echo '<a href="'.site_url().'">Kembali</a>';
		}
	}

	function AdmJsonStatus(){
		// $this->load->library('datatables');

		$this->datatables->select("
				tbl_data_produk.id_produk as id_produk, 
				tbl_data_produk.uploader as uploader,
				tbl_data_produk.nama_produk as nama_produk,
				tbl_data_produk.deskripsi_produk as deskripsi_produk,
				tbl_detail_produk.jenis_file as jenis_file,
				tbl_data_produk.kategori as kategori,
				tbl_detail_produk.tanggal as tanggal,
				tbl_detail_produk.statusProduk as status
			")
		->unset_column("id_produk")
		->unset_column("tanggal")
		// ->add_column("edit", "<a href='".base_url()."admin/ctrl_admin/update/$1'class='btn btn-info' ><i class='glyphicon glyphicon-pencil'></i></a>", "id_produk")
		->add_column("confirm", "<a href='".base_url()."admin/ctrl_admin_produk/produkStatusConfirmed/$1' class='btn btn-info'><i class='glyphicon glyphicon-ok'></i></a>","id_produk")
		// ->add_column("pending", "<a href='".base_url()."admin/ctrl_admin_produk/produkStatusUnconfirmed/$1' class='btn btn-danger'><i class='glyphicon glyphicon-remove'></i></a>","id_produk")
		->from("tbl_data_produk")
		->where("statusProduk = 'pending' ")
		->join("tbl_detail_produk","tbl_data_produk.id_produk = tbl_detail_produk.id_produk", "inner" );
		// ->where("uploader",$this->session->userdata('role'))

		echo $this->datatables->generate();
	}

}
 ?>