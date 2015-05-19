<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends MX_Controller {

	function __construct()
	{
		
	}

	public function index()
	{
		
		redirect('login/auth/cek_login');
	}

	function cek_login()
	{
		$data = array('username' => $this->input->post('username') , 
					  'password' => md5($this->input->post('password'))
					  );
		
		$this->load->model('model_user');
		$hasil = $this->model_user->cek_user($data);

		//ketika dalam database terselect, maka hasil akan menghasilkan satu baris yang sesuai dengan userpass
		if ($hasil->num_rows() == 1){
			//for each ini menghasilkan array dari table yang 
			foreach($hasil->result() as $sess)
            {
              $sess_data['logged_in'] = 'Sudah Login';
              $sess_data['username'] = $sess->username; //dari kolom table
              $sess_data['role'] = $sess->role;
              $sess_data['nama'] =$sess->nama_lengkap;//dari kolom tabel 
              $this->session->set_userdata($sess_data);
              //set_userdata ini bagian dari set session bawaan CI
            }
            //user data ngambil data dari session dalam for each
            //userdata ('parameter data yang mau diambil');s
			if ($this->session->userdata('role')=='admin'){
				//redirect lebih mengarah ke CONTROLLER
				redirect('admin/ctrl_admin');
			}
			elseif (($this->session->userdata('role')=='dosen') || ($this->session->userdata('role')=='mahasiswa')){
				redirect('dosen/ctrl_dosen');
			}
			
		}
		else
		{
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove invert"> </i> Gagal Login! perhatikan pengetikan Username dan Password Anda!</div>');
			
			// $temp = array (
			// 		'username' => $this->input->post('username') , 
			// 		'password' => $this->input->post('password')
			// 		  );
			$this->load->view("login");
			// echo " <script>history.go(-1);</script>";

		}
		
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('mainpage/ctrl_mainPage');
	} 

}