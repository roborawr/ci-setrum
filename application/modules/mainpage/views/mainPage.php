<div class="col-md-9 mr-top-55 br-shadow white">
  <div class="row mr-top-10" id="deskripsi">
    <div class="col-md-12">
      <div class="jumbotron" style="background-color:#337ab7">
        <img src="<?php echo base_url() ?>assets/images/logo/logoheader.png" class="img-responsive center-block" width="400px" height="300px" >
        <h3 class="center" style="margin-top:0;color:white">Sistem E-Commerce Teknik Elekto Universitas Negeri Malang</h3>
        <p class="lead" style="font-size:14px;text-align:justify;color:white">Selamat datang di Sistem E-commerce Hasil Produk Jurusan Teknik Elektro Universitas Negeri Malang <strong>(SETRUM)</strong>. Setrum adalah halaman web yang berisikan data katalog hasil produk jurusan Teknik Elektro Universitas Negeri Malang. Sistem ini melayani pembelian suatu produk. Jika anda ingin memiliki produk yang dihasilkan oleh TE-UM anda dapat menghungi kami <a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage/faq">di sini</a></p>
        
      </div>
    </div>
  </div><!-- deskripsi -->

  <div class="row mr-top-5" id="menuBar">
    <div class="col-md-8 ">
      <ul class="nav nav-pills ">
        <li><a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage/<?php echo(($this->uri->segment(3)) ? $this->uri->segment(3) : "index" ) ; ?>/DESC" value="DESC">Terbaru</a></li>
      </ul>
    </div><!-- end of col-md-4 -->

    <div class="col-md-4  ">
      <form action="<?php echo site_url() ?>mainpage/ctrl_mainPage/cari" class="form-inline" role="form" method="POST" >
          <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="nama produk" >
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">Cari</button>
            </span>
          </div><!-- /input-group -->
        </form>
    </div><!-- end of col-md-4 --> 
    <hr>
  </div><!-- row menuBar -->

  <div class="row" class="itemList">
    <!-- <div class="panel panel-default">
      <div class="panel-body"> -->
        <?php if ($records->num_rows() < 1) { ?>
          <div class="col-md-12" style="text-align:center;max-height:305px;">
            <h1 >Maaf, tidak ada produk yang ditemukan.</h1>
          </div>

        <?php }/*end of if*/
          else{ 
          $result = $records->result();
          
          foreach ($result as $row) { ?>

          <div class="col-sm-4 col-lg-4 col-md-4" style="height:250px; margin-bottom:1em;">

            <div class="thumbnail">
              <img src="<?php echo base_url();?>fileUpload/foto_produk/<?php echo $row->url_foto1; ?>" alt="<?php echo $row->url_foto1; ?>" style="height:120px; width:300px;">
              <div class="caption">                      
                <p style="font-size:13px;"><?php echo $row->nama_produk; ?></p>
                
                  
                
                <p> 
                  <a href="<?php echo site_url('itemDetails/ctrl_itemDetails/lihatDetail?id_produk='.$row->id_produk) ?>" class="btn btn-default btn-sm" role="button">Lihat Detail</a>
                </p>
              </div>
            </div>
          </div>
         <?php } /*end of for each*/
       } ?><!-- end of php* -->
     <!-- </div>panelBody
    </div>paneldefault -->
  </div><!-- row itemList -->

</div>