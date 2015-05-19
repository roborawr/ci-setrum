<!-- right content -->
<div class="col-md-9 mr-top-50 br-shadow white">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="page-header">
                <h1>Halaman Manajemen User</h1>
            </div>

            <div class="row">
              <?php echo $this->session->flashdata('notifikasi');?>
            </div>

            <div class="row">
                <a href="<?php echo base_url(); ?>admin/ctrl_admin/add_user" class="btn btn-default pull-right" style="margin-right:15px;">
                    <i class="glyphicon glyphicon-plus"></i>Tambah
                </a>
            </div>

        
            <div class="table-responsive mr-top-10">
                <table class="table table-hover table-condensed dt-responsive display compact" id="big_table">
                    <thead>
                        <tr>
                            <th width="10%">Username</th>
                            <th width="10%">Nama</th>
                            <th width="15%">Email</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                        </tr>
                    </thead>
                    <tbody style="font-size:12px;">
                        <tr>
                            <td>Mengambil Data...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- end of panel -->
</div><!-- end of rightcontent -->
    
   
<div class="modal fade" id="confirmHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
    </div>
  </div>
</div>









