<!-- right content -->
<div class="col-md-8 mr-top-50 mr-left-50 br-shadow white">

  <!-- header --> 
    <div class="row mr-top-10"> 
      
      <!--<div class="col-md-12">
        <div class="col-md-8 ">
          <ul class="nav nav-pills ">
            <li><a href="<?php echo base_url(); ?>mainpage/ctrl_mainPage/<?php echo(($this->uri->segment(3)) ? $this->uri->segment(3) : "index" ) ; ?>/ASC" value="ASC">Terbaru</a></li>
            <li><a href="#">Most Downloaded</a></li>
          </ul>
        </div><!-- end of col-md-4 -->

        <div class="col-md-4 pull-right">
          
            <form action="<?php echo site_url() ?>mainpage/ctrl_mainPage/cari" class="form-inline" role="form" method="POST" >
              <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="nama produk">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">Cari</button>
                </span>
              </div><!-- /input-group -->
            </form>
          
        </div><!-- end of col-md-4 -->                
        <!-- <button class="btn btn-danger pull-right">asdasd</button> -->                
      </div> <!-- end col-md-12 -->

      <!-- list produk -->
      <div class="col-md-12 mr-top-10">
        
        <?php if ($records->num_rows() < 1) { ?>
          <div class="col-md-4 col-sm-4 col-xs-6">
            <h1>tidak ada produk yang ditemukan</h1>
          </div>

        <?php }/*end of if*/
          else{ 
          $result = $records->result();
          
          foreach ($result as $row) { ?>

          <div class="col-md-4 col-sm-4 col-xs-6" style="height:250px; margin-bottom:5px;">

            <div class="thumbnail">
              <img src="<?php echo base_url();?>fileUpload/foto_produk/<?php echo $row->url_foto1; ?>" alt="<?php echo $row->url_foto1; ?>" style="height:120px; width:300px;">
              <div class="caption">                      
                <p style="font-size:13px;"><?php echo $row->nama_produk; ?></p>
                
                
                  <a href="<?php echo site_url('itemDetails/ctrl_itemDetails/lihatDetail?id_produk='.$row->id_produk) ?>" class="btn btn-default" role="button">Lihat Detail</a>
                </p>
              </div>
            </div>
          </div>
         <?php } /*end of for each*/
       } ?><!-- end of php* -->
      
       </div><!-- end col-md-12 -->
       
       <div class="col-md-4 pull-right">
       <ul class="pagination"><?php echo $this->pagination->create_links(); ?> </ul>
       </div>

      </div><!-- end of row -->
      

</div>
<!-- end of righ content -->
     

