<html>
<head>
	<title>Halaman Login</title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url(); ?>assets/css/custom-login.css">
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url(); ?>assets/css/customs.css">

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/formvalidation/jquery.form-validator.min.js"></script>

        <style type="text/css">
            .alert{
                margin: 0 auto 20px;
            }
        </style>



</head>
<body>

	<div class="wrapper" style="margin-top:-50px;">
		
		
		<div class="container">
			<!-- startnav -->
	<nav class=" navbar-elektro navbar-fixed-top" role="navigation">
		<div class="container">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <span class="navbar-brand logo-nav" style="margin-top: -20;">
                  <img src="<?php echo base_url() ?>assets/images/logo/logosetrumheader.png" >
                </span>
		    </div>
		    <div class="collapse navbar-collapse navbar-ex1-collapse">
		        <ul class="nav navbar-nav navbar-right margin-top">
		          <li>
		            <a href='<?php echo base_url(); ?>mainpage/ctrl_mainPage/faq' class='text-white'><i class='glyphicon glyphicon-question-sign inverse'></i> FAQ </a>
		          </li>
		          <li>
	                 <a href='<?php echo base_url(); ?>mainpage/ctrl_mainPage/formPesan' class='text-white'><i class='glyphicon glyphicon-shopping-cart inverse'></i> Pesan </a>
	              </li>
		          <li>
		            <a href='<?php echo base_url(); ?>mainpage/ctrl_mainPage/contact' class='text-white'><i class='glyphicon glyphicon-phone-alt inverse'></i> Hubungi Kami </a>
		          </li>                  
		          <li>
		            <a href='<?php echo base_url(); ?>' class='text-white'><i class='glyphicon glyphicon-home inverse'></i> Home </a>
		          </li>
		          
		        </ul>
		    </div>
		</div>
    </nav>

			<!-- endnav -->

			<!-- login form -->
			<div class="col-md-5 col-centered white br-shadow" style="margin-top:36px"> 
		 	<div class="row" style="text-align:center">
		 		<img src="<?php echo base_url(); ?>assets/images/logo/logo-duo.png" alt="logo-um.png">
				<h3>Portal Database Produk Teknik Elektro - Universitas Negeri Malang</h3>
		 	</div>
		 		<?php echo $this->session->flashdata('notifikasi');?>
		 	<form role="form" class="" action="<?php echo site_url() ?>login/auth/cek_login" method="POST">
				<div class="form-group">
				    <label for="username">Username</label>
				    <input type="text" class="form-control" name="username" id="_username" placeholder="Username/ NIM anda" value="<?php echo $this->input->post('username'); ?>" required data-validation="length" data-validation-length="4-12" data-validation-help="Panjang username 4-12 karakter" data-validation-error-msg="Username tidak boleh kosong!">
				</div>

				<div class="form-group">
				    <label for="Password">Password</label>
				    <input type="password" class="form-control" name="password" id="_password" placeholder="Password" data-validation-length="1-16" required>
			  	</div>
			  	<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
			  	
			  	
			</form>
		 	</div><!-- end of login form -->

		</div><!-- end of container -->
		<div class="push"></div>
	</div><!-- end of wrapper -->
	

	<!-- footer -->
	<footer>
		<div class="container">
        <div class="col-md-4" >
           <p class="text-white">Dimas Abdurrahman S | Teknik Informatika <br> Universitas Negeri Malang <br> dimas.abdurrahmans@gmail.com</p>
        </div>
        <div class="col-md-4">
            <img src="<?php echo base_url() ?>assets/images/logo/logosetrumheader.png" class="img-responsive center-block" style="display:inline-block;height: 80px;">
            <img src="<?php echo base_url() ?>assets/images/logo/lbgray.png" class="img-responsive center-block" style="display:inline-block">
        </div>
        <div class="col-md-4"> 
            <p class="text-white text-right">Universitas Negeri Malang<br>Jl. Semarang 5 Malang 65145<br>Telp. (0341) 551312</p>
        </div>
      </div>
	</footer>
	<!-- end of footer -->


	<script>
	  $.validate();
	  
	</script>

</body>
</html>