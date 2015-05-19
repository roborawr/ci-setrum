<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	* 
	*/
	class Ctrl_itemDetails extends MX_Controller
	{
		
		function __construct()
		{
			# code...
			$this->load->model('mdl_itemDetails');
			$this->load->helper('download');
		}

		public function index(){

			// $data['judul'] = "Selamat Datang di Portal Database Produk Teknik Elektro Universitas Negeri Malang";

			// $data['records']=$this->mdl_mainPage->ambilData();

			$data['main_content'] = 'mainpage/mainPage';
			$this->load->view('includes_mainPage/template', $data);

		}

		function lihatDetail(){

			$look=array(
					'id_produk' => $_GET['id_produk'],
				);

			if ($this->session->userdata('role')=='admin'){
				$data['header_id']=
					"
					<li>
						<a href='".base_url()."admin/ctrl_admin' class='text-white'><i class='glyphicon glyphicon-user inverse'></i>".$this->session->userdata('username')."</a>
                     </li>
                    ";
				
			}elseif ($this->session->userdata('role')=='dosen') {
				$data['header_id']=
					"<li>
						<a href='".base_url()."dosen/ctrl_dosen' class='text-white'><i class='glyphicon glyphicon-user inverse'> </i>".$this->session->userdata('username')."</a>
                     </li>";
				
			}else{
				$data['header_id']=
					"
					<li>
						<a href='".base_url()."login/auth' class='text-white'><i class='glyphicon glyphicon-user inverse'></i> Login</a>
                     </li>
					
                    <!-- <form action='".base_url()."login/auth/cek_login' method='post' enctype='multipart/form-data'>
	                  <div class='form-group'>
	                    <label class='sr-only' >Username</label>
	                    <input type='username' class='form-control' name='username' placeholder='Username'>
	                  </div>
	                  <div class='form-group'>
	                    <label class='sr-only' >Password</label>
	                    <input type='password' class='form-control' name='password' placeholder='Password'>
	                  </div>
	                  <div class='checkbox'>
	                    <label>
	                      <input type='checkbox'> Remember me
	                    </label>
	                  </div>
	                    <button type='submit' class='btn btn-default'>Sign in</button>
	                  </form> 
	                  </div>
	                </form>
                     -->";

			}

			
			
			$data['records'] = $this->mdl_itemDetails->ambilData($look);

			foreach ($this->mdl_itemDetails->ambilData($look) as $key ) {
				$name = $key->nama_produk;
			}

			$data['judul'] = "Halaman Detail Produk ".$name;
			$data['main_content'] = 'itemDetails/itemDetails';
			$this->load->view('includes_itemDetails/template', $data);	
		}

		function get_content(){
			
			$look=array(
					'id_produk' => $_GET['id_produk'],
				);
			$records = $this->mdl_itemDetails->ambilData($look);

			foreach ($records as $row) {
				
				$filePhoto = $row->url_foto;
				$fileData = $row->url_source;
				$file_name = $row->nama_produk;
				
			}

			$data = file_get_contents(base_url()."fileUpload/source_produk/".$fileData); // Read the file's contents
			$name = $file_name.'.rar';
			force_download($name, $data);
		}
}

 ?>