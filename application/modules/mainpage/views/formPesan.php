<!-- right content -->
<div class="col-md-9 mr-top-55 br-shadow white">
  <div class="col-md-12">
    <?php echo $this->session->flashdata('notifikasi');?>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
    <h1>
    	FORM PEMESANAN PRODUK
    </h1>
    <hr>

    <form action="<?php echo base_url(); ?>mainpage/ctrl_mainPage/sendEmail" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
  	  <div class="form-group panel-body">
      <label class="col-lg-2 control-label">Nama Produk</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputNamaProdukPesanan" placeholder="Nama Produk" data-validation="length" data-validation-length="1-100" data-validation-help="Panjang maksimal nama 100 karakter" data-validation-error-msg="Panjang karakter maksimal 100 karakter dan tidak boleh kosong." required>
      </div>
      </div>
      <hr class="no-margin">

      <div class="form-group panel-body">
      <label class="col-lg-2 control-label">Nama Pemesan</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputNamaPemesan" placeholder="Nama Pemesan" data-validation="length" data-validation-length="1-100" data-validation-help="Panjang maksimal nama 100 karakter" data-validation-error-msg="Panjang karakter maksimal 100 karakter dan tidak boleh kosong." required>
      </div>
    	</div>
      <hr class="no-margin">

      <div class="form-group panel-body">
      <label class="col-lg-2 control-label">Email Pemesan</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="inputEmail1" name="alamatEmailPemesan" placeholder="Email" data-validation="email" data-validation-help="format untuk email 'namaemail@xxx.xxx'" data-validation-error-msg="email yang dimasukkan tidak sesuai dengan format.">
       
      </div>
    	</div>
      <hr class="no-margin">

      <div class="form-group panel-body">
      <label class="col-lg-2 control-label">Alamat Pemesan</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="AlamatPemesanProduk" placeholder="Alamat Pemesan" data-validation="length" data-validation-length="1-100" data-validation-help="Panjang maksimal nama 100 karakter" data-validation-error-msg="Panjang karakter maksimal 100 karakter dan tidak boleh kosong."  required>
      </div>
    	</div>
      <hr class="no-margin">

      <div class="form-group panel-body">
      <label class="col-lg-2 control-label">Nomor yang dapat dihubungi</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nomorKontak" placeholder="085xxxxx" data-validation="number" data-validation-help="Contoh penulisan nomor yang dapat dihubungi 0341711180 atau 08533430554" data-validation-error-msg="Hanya input angka yang diperbolehkan"  required>
      </div>
    	</div>
      <hr class="no-margin">

      <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default">Pesan</button>
      </div>
	</form>

    </div>
  </div>

</div>
<!-- end of righ content -->


     

