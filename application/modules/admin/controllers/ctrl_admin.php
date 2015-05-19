<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctrl_admin extends MX_Controller {


	function index()
	{
		$data['header_id'] = "Halaman Admin";
		$data['main_content'] = 'admin/admin';
		$this->load->view('includes_admin/template', $data);
		
	}

	function halaman_user()
	{
		$data['header_id'] = "Halaman Tambah User";
		$data['main_content'] = 'admin/add_user';
		$this->load->view('includes_admin/template', $data);
	}

	function data_user()
	{
		

		$this->load->model('membership_model');
		if($query = $this->membership_model->get_records())
			{
				$data['records'] = $query;
				// print_r($query);
			}

		$data['header_id'] = "Halaman Admin Data User";
		$data['main_content'] = 'admin/adm_user';
		$this->load->view('includes_admin/template', $data);
	}

	function add_user()
	{
		$data['header_id'] = "Halaman Tambah User";
		$data['main_content'] = 'admin/add_user';
		$this->load->view('includes_admin/template', $data);
	}

	function buat_user(){
			
		$this->load->model('membership_model');
		if ($query = $this->membership_model->create_member()) {
			//untuk notifikasi sekali pakai set_flashdata
			 $this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign invert"> </i> User <strong>'.$this->input->post('username').'</strong> baru berhasil ditambahkan</div>');
			 redirect('admin/ctrl_admin/data_user');					
		}
		else{
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-remove invert"></i> User <strong>'.$this->input->post('username').'</strong> baru gagal ditambahkan</div>');
			$data['main_content'] = 'add_user';
			$this->load->view('includes_admin/template', $data);
		}

	}
	
	function update($id_customer){

		$ubah=array(
			'id_customer'=>$id_customer
			);

		$this->load->model('membership_model');
		$data['customer']=$this->membership_model->get_data_tbluser_by_username($ubah);

		$data['header_id'] = "Halaman Modifikasi User ";
		$data['main_content'] = 'admin/edit_user';
		$this->load->view('includes_admin/template', $data);
	}

	function update_submited()
	{	

		$data=array(
		'id_customer'=>$_POST['id_customer'],
		'username'=>$_POST['username'],
		'password'=>$_POST['password1'],
		'nama_lengkap'=>$_POST['nama'],
		'email'=>$_POST['alamat_email'],
		'role'=>$_POST['role'],
		);


		$this->load->model('membership_model');
		$res=$this->membership_model->proses_ubah($data);
		//echo json_encode($res);
		if($res){

			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign invert"> </i> User <strong>'.$data['username'].'</strong> berhasil terupdate!</div>');
			redirect('admin/ctrl_admin/data_user');
			
		}else{

			// echo "Pengubahan Data Gagal <br>";
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove invert"></i> User <strong>'.$data['username'].'</strong> gagal terupdate!</div>');
			echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
			
		}
	}

	function hapus($id_customer){
		$del=array(
			// 'username'=>$_GET['username']
			'id_customer'=>$id_customer,
		);
		
    	$data ="

    		<div class='modal-body'>
    			Apakah Anda ingin menghapus ?
    		</div>

    		<div class='modal-footer'>
    			<a href='".base_url()."admin/ctrl_admin/hapusConfirmed/$id_customer' class='btn btn-danger pull-left'>Ya </a>
    			<button type='button' data-dismiss='modal' aria-label='Close' class='btn btn-default'> Tidak </button>
    		</div>
    	";

		echo $data;

	}

	function hapusConfirmed($id_customer)
	{
		$del=array(
			// 'username'=>$_GET['username']
			'id_customer'=>$id_customer
			// 'id_customer'=>$_POST['id_customer']
		);

		$this->load->model('membership_model');
		$res=$this->membership_model->hapus($del);
		if($res){
			
			//notifkiasi untuk hapus data 
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign invert"></i> User <strong>'.$del['username'].'</strong> berhasil dihapus</div>');
			redirect('admin/ctrl_admin/data_user');

		}else{
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-remove invert"></i> User <strong>'.$del['username'].'</strong> gagal dihapus</div>');
			// echo "Hapus Data Gagal <br>";
			// echo '<a href="'.site_url().'">Kembali</a>';
		}
	}
	
	function data_produk()
	{	

		$this->load->model('mdl_item_produk');
		if($query = $this->mdl_item_produk->AmbilDataProduk())
			{
				$data['records'] = $query;
				// print_r($query);
			}

		$data['header_id'] = "Halaman Admin Data Produk";
		$data['main_content'] = 'admin/adm_item';
		$this->load->view('includes_admin/template', $data);
	}

	function tambah_produk()
	{
		//$this->load->view('login');
		$data['main_content'] = 'admin/add_produk';
		$this->load->view('includes_admin/template', $data);
	}

	function load_json(){
		// $this->load->library('datatables');

		$this->datatables->select("
				id_customer, 
				username, 
				
				nama_lengkap,
				email
			")
		->unset_column("id_customer")
		->add_column("edit", "<a href='".base_url()."admin/ctrl_admin/update/$1' class='btn btn-info' ><i class='glyphicon glyphicon-pencil'></i></a>", "id_customer")
		->add_column("hapus", "<a data-target='#confirmHapus' data-toggle='modal' href='".base_url()."admin/ctrl_admin/hapus/$1' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>","id_customer")
		->from("tbl_customer");

		echo $this->datatables->generate();
	}

}

// 