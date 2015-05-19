<!-- right content -->
<div class="col-md-9 mr-top-50 br-shadow white">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="page-header">
                <h1>Halaman Manajemen Produk Anda</h1>
            </div>        

            <!-- tabel data produk -->
            <div class="row mr-bot-20" >
                <?php echo $this->session->flashdata('notifikasi');?>
                <div class="col-md-12 ">
                    
                    <a href="<?php echo base_url(); ?>dosen/ctrl_dosen/dosen_add_produk">
                        <button class="btn btn-default pull-right" type="button"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
                    </a>
                </div>
            </div>
                    
            <div class="table-responsive mr-top-10">
                <table class="table table-hover table-condensed dt-responsive display compact" id="DosenProduk" style="font-size:13px;">
                    <thead>
                        <tr>
                            <!-- <th width="10%">Uploader</th> -->
                            <th width="15%">Nama Produk</th>
                            <th width="55%">Deskripsi Produk</th>
                            <th width="10%">Jenis File</th>
                            <th width="10%">Kategori</th>
                            <th width="10%">Status</th>
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

            <div class="modal fade" id='confirmHapus' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                      
                </div>
            </div>
            </div>
        </div>
    </div><!-- end of panel -->
</div>
<!-- end of right content -->

