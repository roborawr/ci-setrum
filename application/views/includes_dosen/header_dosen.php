<html>
<head>
    <title><?php echo $header_id; ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" rel="stylesheet"> 

        <!-- custom css-->
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url(); ?>assets/css/customs.css">

        <!-- datatables css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/media/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/media/css/dataTables.bootstrap.css">

        <style type="text/css">
            .alert{
                margin: 0 auto 20px;
            }
             .form-group{
                padding: 5 5 5 5;
                margin-bottom: 0;
            }

            .panel{
                margin-bottom: 10px;

            }
            .form-group-inline{

                margin-bottom: 5px;
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
                            <li>
                                <a href='<?php echo base_url(); ?>dosen/ctrl_dosen' class="text-white"><i class="glyphicon glyphicon-user inverse"> </i><?php echo $this->session->userdata('nama'); ?></a>
                            </li>
                            
                           <!--  <li><a href="#">Cart</a>
                            </li> -->
                        </ul>
                    </div>
                    
                </div>
            </nav>
            <!--End Nav Section -->

            <div class="row">
                <!-- left content -->
                    <div class="col-md-3 mr-top-50 ">
                        <div class="list-group br-shadow">
                            <span class="list-group-item active list-group-item-success"><strong style="font-size:22px;"><i class="glyphicon glyphicon-cog"></i>Menu</strong></span>
                            <a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage" class="list-group-item">Halaman Utama<i class="glyphicon glyphicon-chevron-right pull-right"></i></a>
                            <a href="<?php echo base_url(); ?>dosen/ctrl_dosen/list_item_dosen" class="list-group-item">Data Item<i class="glyphicon glyphicon-chevron-right pull-right"></i></a>
                            <a href="<?php echo base_url(); ?>dosen/ctrl_dosen/dosen_add_produk" class="list-group-item">Upload Produk<i class="glyphicon glyphicon-chevron-right pull-right"></i></a>
                            <a href="<?php echo base_url(); ?>login/auth/logout" class="list-group-item">Logout<i class="glyphicon glyphicon-chevron-right pull-right"></i></a>
                        </div>
                    </div>


        
        