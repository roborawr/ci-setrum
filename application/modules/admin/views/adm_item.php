<!-- right content -->
<div class="col-md-9 mr-top-50 br-shadow white">
    <div class="panel panel-default" style="min-height:100%">
        <div class="panel-body">
            <div class="page-header">
                <h1>Halaman Manajemen Produk Anda</h1>
            </div>

            <div class="row mr-bot-20" >
                <?php echo $this->session->flashdata('notifikasi');?>
                
                <!-- <form class="form-inline" role="search"> -->
                    <div class="col-md-12 ">
                        <a href="<?php echo base_url(); ?>admin/ctrl_admin/tambah_produk">
                            <button class="btn btn-default pull-right" type="button"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
                        </a>
                    </div>
                <!-- </form>akhir form -->
            </div>
            
            <div class="table-responsive mr-top-10">
                <table class="table table-hover table-condensed dt-responsive display compact" id="AdmProduk" style="font-size:12px;">
                    <thead>
                        <tr>
                            <th width="10%">Uploader</th>
                            <th width="15%">Nama Produk</th>
                            <th width="55%">Deskripsi Produk</th>
                            <th width="10%">Jenis File</th>
                            <th width="10%">Kategori</th>
                            <th width="5%"></th> 
                            
                        </tr>
                    </thead>
                    <tbody style="font-size:12px;">
                        <tr >
                            <td>Mengambil Data...</td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div><!-- end of panel -->
</div>
<!-- end of right content -->

<!-- modal -->
<div class="modal fade" id="confirmHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
    </div>
  </div>
</div>
<!-- end of modal