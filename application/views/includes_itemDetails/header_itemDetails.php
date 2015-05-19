<!doctype>
<html>
<head>
    <title><?php echo $judul ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" rel="stylesheet"> 

        <!-- custom css-->
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url(); ?>assets/css/customs.css">
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url(); ?>assets/css/videojs/video-js.min.css">

        <style type="text/css">
            .alert{
                margin: 0 auto 20px;
            }

            h5 {
                font-style: none; 
                text-decoration: none;
            }
            .list-group{
              border-radius: 0;
            }


            .list-group-item{
              padding: 1 1 1 15
            }
        </style>

        
</head>
<body>
    <div class="wrapper">   
        <div class="container">
             <!-- Nav Section -->
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
                  <?php echo $header_id; ?> 
                </ul>
            </div>
        </div>
    </nav>
     <!--End Nav Section -->
            <div class="row">
              
                <!-- left content -->
                 <div class="col-md-3 col-sm-4 mr-top-50">
                  <div class ="mr-top-5 br-shadow">
                    <span class="list-group-item active list-group-item-success"><strong style="font-size:22px;">INFORMATIKA</strong></span>
                    <ul class="list-group">
                      <li class="list-group-item"><a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage/PIFdokumen"><h5><i class="glyphicon glyphicon-chevron-right"></i>Buku</h5></a></li>
                      <li class="list-group-item"><a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage/PIFanimasi"><h5><i class="glyphicon glyphicon-chevron-right"></i>Animasi</h5></a></li>
                      <li class="list-group-item"><a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage/PIFsoft"><h5><i class="glyphicon glyphicon-chevron-right"></i>Source File</h5></a></li>
                    </ul>
                  </div>
                  <br>
                  <div class="br-shadow">
                    <span class="list-group-item active list-group-item-success"><strong style="font-size:22px;">ELEKTRO</strong></span>
                    <ul class="list-group ">
                      <li class="list-group-item"><a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage/PTEdokumen"><h5><i class="glyphicon glyphicon-chevron-right"></i>Buku</h5></a></li>
                      <li class="list-group-item"><a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage/PTEanimasi"><h5><i class="glyphicon glyphicon-chevron-right"></i>Animasi</h5></a></li>
                      <li class="list-group-item"><a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage/PTEsoft"><h5><i class="glyphicon glyphicon-chevron-right"></i>Source File</h5></a></li>
                    </ul>
                  </div>
                  

                    
                </div><!-- col-md-2 -->
                <!-- end of left contetn -->
                    


        

