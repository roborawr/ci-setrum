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

        <style type="text/css">
            .alert{
                margin: 0 auto 20px;
            }
        </style>

</head>
<body>

	<div class="wrapper" style="margin-top:-50px;">
		<div class="container">

			<!-- login form -->
			<div class="col-md-5 col-centered white br-shadow mr-top-50"> 
		 	<div class="row" style="text-align:center">
		 		<img src="<?php echo base_url(); ?>assets/images/logo/logo-duo.png" alt="logo-um.png">
				<h3>Portal Database Produk Teknik Elektro - Universitas Negeri Malang</h3>
		 	</div>
		 	<form role="form" class="" action="<?php echo site_url() ?>login/auth/cek_login" method="POST">
				<div class="form-group">
				    <label for="username">Username</label>
				    <input type="text" class="form-control" id="username" name="username" placeholder="Username/ NIM anda" required>
				</div>

				<div class="form-group">
				    <label for="Password">Password</label>
				    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
			  	</div>
			  	<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
			  	<div class="row white">
			  		<a href="" class="pull-left white mr-left-20">Lupa Password</a>
			  		<a href="" class="pull-right white mr-right-20">Buat Akun</a>
			  	</div>
			  	
			</form>
		 	</div><!-- end of login form -->

		</div><!-- end of container -->
		<div class="push"></div>
	</div><!-- end of wrapper -->
	

	<!-- footer -->
	<footer>
		<div class="container">
        <div class="col-md-4 col-xs-6 pull-right">
            <p class="text-muted text-right">Dimas Abdurrahman S | Teknik Informatika - Universitas Negeri Malang 
            
        </div>
      </div>
	</footer>
	<!-- end of footer -->
</body>
</html>