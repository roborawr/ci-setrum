<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Ctrl_mainPage extends MX_Controller
	{
		
		function __construct()
		{
			$this->load->model('mdl_mainPage');
			$this->load->library('pagination');
		}

		public function index($sort="ASC"){
						
			$data['header_id'] = $this->HeadMenu();

			$data['judul'] = "Selamat Datang di Portal Database Produk Teknik Elektro Universitas Negeri Malang";

			$data['order']=$sort;
			$data['records']=$this->mdl_mainPage->ambilData($data);
			

			$data['main_content'] = 'mainpage/mainPage';
			$this->load->view('includes_mainPage/template', $data);


			// $config['base_url'] = 'http://example.com/index.php/test/page/';
			// $config['base_url'] = base_url();
			// $config['total_rows'] = 200;
			// $config['per_page'] = 10; 

			// $this->pagination->initialize($config); 

			// echo $this->pagination->create_links();

			// $this->load->view('mainPage');
		}

		function HeadMenu(){
			 
			if ($this->session->userdata('role')=='admin'){
				return $data=
					"
					<li>
						<a href='".base_url()."admin/ctrl_admin' class='text-white'><i class='glyphicon glyphicon-user inverse'></i>".$this->session->userdata('username')."</a>
                     </li>
                    ";
				
			}elseif ($this->session->userdata('role')=='dosen') {
				return $data=
					"<li>
						<a href='".base_url()."dosen/ctrl_dosen' class='text-white'><i class='glyphicon glyphicon-user inverse'> </i>".$this->session->userdata('username')."</a>
                     </li>";
				
			}else{
				return $data=
					"
					<li>
						<a href='".base_url()."login/auth' class='text-white'><i class='glyphicon glyphicon-user inverse'></i> Login</a>
                     </li>
					";

			}
		}

		function master($data){
			$data['header_id'] = $this->HeadMenu();

			$data=array(

					'jenis' => $data['jenis'],
					'order' => $data['order'],
					'jurusan' => $data['jurusan'],
					'header_id' =>$this->HeadMenu()
				);

			$data['judul'] = "Selamat Datang di Portal Database Produk Teknik Elektro Universitas Negeri Malang";

			$data['records'] = $this->mdl_mainPage->ambilKategori($data);
			

			$data['main_content'] = 'mainpage/mainPage';
			$this->load->view('includes_mainPage/template', $data);

		}

		function PIFdokumen($sort="ASC"){

			$var = array(
				'jenis' => "dokumen",
				'order' => $sort,
				'jurusan'=> "Teknik Informatika"
				);			
			$this->master($var);
		}

		function PIFanimasi($sort="ASC"){
			$var = array(
				'jenis' => "animasi",
				'order' => $sort,
				'jurusan'=> "Teknik Informatika"
				);			
			$this->master($var);
		}

		function PIFsoft($sort="ASC"){
			$var = array(
				'jenis' => "softfile",
				'order' => $sort,
				'jurusan'=> "Teknik Informatika"
				);			
			$this->master($var);
		}

		function PTEdokumen($sort="ASC"){

			$var = array(
				'jenis' => "dokumen",
				'order' => $sort,
				'jurusan'=> "Teknik Elektro"
				);			
			$this->master($var);
		}

		function PTEanimasi($sort="ASC"){
			$var = array(
				'jenis' => "animasi",
				'order' => $sort,
				'jurusan'=> "Teknik Elektro"
				);			
			$this->master($var);
		}

		function PTEsoft($sort="ASC"){
			$var = array(
				'jenis' => "softfile",
				'order' => $sort,
				'jurusan'=> "Teknik Elektro"
				);
			$this->master($var);
		}

		function cari($sort="ASC"){

			// $data['header_id'] = $this->HeadMenu();

			$data= array(
					'kataKunci' => $this->input->post('search'),
					'sort' => $sort,
					'header_id' => $this->HeadMenu()
				);

			$data['judul'] = "Selamat Datang di Portal Database Produk Teknik Elektro Universitas Negeri Malang";

			// 
			// $kataKunci = $this->input->post('search');

			$data['records'] = $this->mdl_mainPage->searchQuery($data);

			$data['main_content'] = 'mainpage/searchResult';
			$this->load->view('includes_mainPage/template', $data);

		}

		function faq(){
			$data['header_id'] = $this->HeadMenu();

			$data['judul'] = "Selamat Datang di Portal Database Produk Teknik Elektro Universitas Negeri Malang";
			
			$data['main_content'] = 'mainpage/faq';
			$this->load->view('includes_mainPage/template', $data);
		}

		function contact(){
			$data['header_id'] = $this->HeadMenu();

			$data['judul'] = "Selamat Datang di Portal Database Produk Teknik Elektro Universitas Negeri Malang";
			
			$data['main_content'] = 'mainpage/contact';
			$this->load->view('includes_mainPage/template', $data);
		}

		function formPesan(){
			$data['header_id'] = $this->HeadMenu();

			$data['judul'] = "Selamat Datang di Portal Database Produk Teknik Elektro Universitas Negeri Malang";
			
			$data['main_content'] = 'mainpage/formPesan';
			$this->load->view('includes_mainPage/template', $data);
		}


		function sendEmail(){
			$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'new.gaming.number.one@gmail.com', // change it to yours
			  'smtp_pass' => 'azamidace5692', // change it to yours
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
			);

        $message = "Nama Produk\t   	 : ".$this->input->post('inputNamaProdukPesanan').
        		   "\r\nNama pemesan\t   : ".$this->input->post('inputNamaPemesan').
        		   "\r\nAlamat pemesan\t : ".$this->input->post('AlamatPemesanProduk').
        		   "\r\nAlamat email\t   : ".$this->input->post('alamatEmailPemesan').
        		   "\r\nNo Telp/Hp\t     : ".$this->input->post('nomorKontak');

        $this->load->library('email', $config);
	    $this->email->set_newline("\r\n");
	    $this->email->from('new.gaming.number.one@gmail.com', $this->input->post('inputNamaPemesan')); // change it to yours
	    $this->email->to($this->input->post('alamatEmailPemesan'));// change it to yours
	    $this->email->subject('Pemesanan produk '. $this->input->post('inputNamaProdukPesanan'));
	    $this->email->message($message);
	    if($this->email->send())
	    {
	     	
	     	$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign invert"> </i> Email Berhasil Dikirim!</div>');
			redirect('mainPage/ctrl_mainPage/formPesan');
	    }
	     else
	    {
	     	
	     	$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><i class="glyphicon glyphicon-ok-sign invert"> </i> Email Gagal Dikirim!</div>');
			redirect('mainPage/ctrl_mainPage/formPesan');	     	
	    }


	}
}


 ?>

 <!-- dump data
	function PIFbuku(){
						
			// $data['header_id'] = $this->HeadMenu();
			// $data['kategori'] = "dokumen";
			$data=array(
					'jenis' => "dokumen",
					'jurusan' => "Teknik Informatika",
					'header_id' =>$this->HeadMenu()
				);

			$data['judul'] = "Selamat Datang di Portal Database Produk Teknik Elektro Universitas Negeri Malang";

			$data['records']=$this->mdl_mainPage->ambilKategori($data);

			$data['main_content'] = 'mainpage/mainPage';
			$this->load->view('includes_mainPage/template', $data);

		}

  -->