<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_signup extends MX_Controller {


	public function index()
	{
		$this->load->view('signup');
		// $data['main_content'] = 'login/login';
		// $this->load->view('includes/template', $data);
	}

	public function cek_login()
	{
		$data = array('username' => $this->input->post('username') , 
					  'password' => $this->input->post('password')
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
              $sess_data['role'] = $sess->role; //dari kolom tabel 
              $this->session->set_userdata($sess_data);
              //set_userdata ini bagian dari set session bawaan CI


            }
            //user data ngambil data dari session dalam for each
            //userdata ('parameter data yang mau diambil');s
			if ($this->session->userdata('role')=='admin'){
				//redirect lebih mengarah ke CONTROLLER
				redirect('admin/ctrl_admin');
				//$this->load->view('login');
			}
			elseif ($this->session->userdata('role')=='user'){
				redirect('user/user');
			}
			elseif ($this->session->userdata('role')=='dosen'){
				redirect('dosen/admin_dosen');
			}
		}
		else
		{
			echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		}
		
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('login/auth');
	} 

}