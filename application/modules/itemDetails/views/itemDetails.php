<div class="container">
  <div class="row">

      <?php foreach ($records as $row ) { 
        $readfile = new SplFileInfo(base_url().'fileUpload/animasi_produk/'.$row->url_animasi);
        $exts = $readfile->getExtension();
        ?>
      
       <div class="col-md-9 mr-top-55  br-shadow white">
           <!-- Carousel ================================================== -->
          <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active">
                <img style="height:450px; width:750px;" src="<?php echo base_url();?>fileUpload/foto_produk/<?php echo $row->url_foto1; ?>" data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">
              </div>
              <div class="item">
                <img style="height:450px; width:750px;" src="<?php echo base_url();?>fileUpload/foto_produk/<?php echo $row->url_foto2; ?>" data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide">
              </div>
              <div class="item">
                <img style="height:450px; width:750px;" src="<?php echo base_url();?>fileUpload/foto_produk/<?php echo $row->url_foto3; ?>" data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide">
              </div> 
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div><!-- /.carousel -->

          <div class="panel panel-default mr-top-5">
            <div class="panel-heading"><?php echo $row->nama_produk; ?></div>
            <div class="panel-body" style="margin:0; padding-top:0; padding-bottom:0;">
              <div class="mr-top-10">
                  <p><?php echo $row->deskripsi_produk; ?> </p>
              </div>
            </div>
          </div>

            <?php 

            if (($row->url_animasi != null > 0) && ($exts == "swf")) { ?>
            <div class="panel panel-default mr-top-5">
            <div class="panel-body" style="margin:0; padding-top:0; padding-bottom:0;">

              <p><a href="<?php echo base_url();?>fileUpload/animasi_produk/<?php echo $row->url_animasi; ?>"
                    onclick="loadSWF(this.href)(); return false;" target="_blank">
                 <span class="mr-top-10 btn btn-info btn-block">Klik disini untuk melihat animasi produk</span>
              </a></p>
              <div id="flashcontent"></div>

            </div>
            </div>
           <?php }elseif (($row->url_animasi != null > 0) && ($exts == "mp4")) { ?>
             <div class="panel panel-default mr-top-5">
              <div class="panel-body embed-responsive embed-responsive-16by9" >
                <video id="my_vid_id" class="video-js vjs-default-skin embed-responsive-item" controls preload="auto" width="100%" height="100%" data-setup='{}'>
                   <source src="<?php echo base_url();?>fileUpload/animasi_produk/<?php echo $row->url_animasi; ?>" type='video/mp4' />
                   <track kind="captions" src="captions.vtt" srclang="en" label="English" />
                </video>
              </div>
              </div>
           <?php } else{ ?>
            <div class="panel panel-default mr-top-5">
            <div class="panel-body" style="margin:0; padding-top:0; padding-bottom:0;">
              
                  <h3>Maaf belum ada animasi dengan produk yang terkait</h3>
              
            </div>
            </div>
           <?php } ?> 
          
           <?php if ($row->url_source != null) { ?>
           
            <div class="col-md-6 mr-top-10 mr-bot-20">
              <a href="<?php echo site_url('itemDetails/ctrl_itemDetails/get_content?id_produk='.$row->id_produk) ?>" class="btn btn-primary btn-block" role="button">Download</a> 
            </div>
           <div class="col-md-6 mr-top-10 mr-bot-20">
              <a href="<?php echo site_url('mainpage/ctrl_mainPage/faq#collapseFive') ?>" class="btn btn-info btn-block" role="button">Tanya Jawab</a> 
            </div>
           <?php } else { ?>
           
            <div class="col-md-12 mr-top-10 mr-bot-20">
              <a href="<?php echo site_url('mainpage/ctrl_mainPage/faq#collapseFive') ?>" class="btn btn-info btn-block" role="button">Tanyakan Produk</a> 
            </div>
           
           <?php } ?>

          
          

      </div><!-- col-md-8 col-sm-8 mr-top-50 mr-left-20 br-shadow white -->
      <?php } ?><!-- end of foreach -->      
  </div><!-- /.row top-->
</div><!-- end of container -->