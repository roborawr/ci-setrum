<!-- right content -->

<div class="col-md-9 mr-top-50  br-shadow white" >
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="page-header">
          <h1>TAMBAH PRODUK</h1>
        </div>

        <?php echo $this->session->flashdata('notifikasi');?>
    
        <div class="form-horizontal">
          <?php echo form_open_multipart('dosen/ctrl_dosen/do_upload'); ?>
      <!-- nama -->
         <div class="form-group panel-body">
          <label for="inputNama" class="col-lg-2 control-label">Nama Produk</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="inputNamaProduk" placeholder="Nama Produk" data-validation="length" data-validation-length="1-100" data-validation-help="Panjang maksimal nama 100 karakter" data-validation-error-msg="Panjang karakter maksimal 100 karakter dan tidak boleh kosong." values="<?php echo $this->input->post('inputDeskripsi'); ?>" required>
          </div>
        </div>
      <hr class="no-margin">
      
      <!-- Deskripsi Produk -->
        <div class="form-group panel-body mr-top-5">
          <label for="inputNama" class="col-lg-2 control-label">Deskripsi Produk</label>
          <div class="col-lg-10">
            
            <textarea class="form-control" rows="4" name="inputDeskripsi" id="deskripsi" placeholder="Deskripsi Produk" value="<?php echo $this->input->post('inputDeskripsi'); ?>" required></textarea>
            <span id="max-length-element">1000</span> chars left
          </div>
        </div>
      <hr class="no-margin">
      
      <!-- kategori -->
        <div class="form-group panel-body">
          <label for="kategori" class="col-lg-2 control-label">Kategori</label>
          <div class="col-lg-10">
             <p class="help-block no-margin">Pilih salah jenis kategori</p>

            <label class="checkbox-inline">
              <input type="checkbox" name="jenisKategori" value="Teknik Informatika" data-validation="checkbox_group" data-validation-qty="min1"> Teknik Informatika
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="jenisKategori" value="Teknik Elektro" data-validation="checkbox_group" data-validation-qty="min1"> Teknik Elektro
            </label>
          </div>
        </div>      
      <hr class="no-margin">

      <!-- jenis file -->      
        <div class="form-group ">
          <label for="inputStatus" class="col-lg-2 control-label">Jenis File</label>
          <div class="col-lg-10 ">
              <div class="radio-inline">
                <label>
                  <input type="radio" name="jenisFile" value="dokumen" data-validation-error-msg="harus dipilih salah satu" data-validation="required">
                  dokumen
                </label>
              </div>
              <div class="radio-inline">
                <label>
                  <input type="radio" name="jenisFile" value="animasi" data-validation-error-msg="harus dipilih salah satu" data-validation="required">
                 Animasi
                </label>
              </div>
              <div class="radio-inline">
                <label>
                  <input type="radio" name="jenisFile" value="softfile" data-validation-error-msg="harus dipilih salah satu" data-validation="required">
                 softfile
                </label>
              </div>
          </div>
        </div>
      <hr class="no-margin">

      <!-- Foto -->      
       <div class="form-group panel-body">
          <label for="inputNama" class="col-lg-2 control-label">Foto Produk</label>
          <div class="col-lg-10">
            <p class="help-block no-margin">Lampirkan Foto/Screenshot Produk.</p>
            <p class="help-block no-margin">Maksimal ukuran tiap gambar adalah 2MB dan bertipe jpg/png.</p>
            <div class="form-group-inline">
              <label class="no-margin">Foto Produk 1</label>
              <input type="file" name="FotoProduk1" data-validation="size extension" data-validation-max-size="2M" data-validation-allowing="jpg, png"data-validation-error-msg="File foto tidak boleh lebih dari 2MB dan harus bertipe JPG/PNG" />
            </div>
            <div class="form-group-inline">
              <label class="no-margin">Foto Produk 2</label>
              <input type="file" name="FotoProduk2" data-validation="size extension" data-validation-max-size="2M" data-validation-allowing="jpg, png"data-validation-error-msg="File foto tidak boleh lebih dari 2MB dan harus bertipe JPG/PNG"/>
            </div>
            <div class="form-group-inline">
              <label class="no-margin">Foto Produk 3</label>
              <input type="file" name="FotoProduk3" data-validation="size extension" data-validation-max-size="2M" data-validation-allowing="jpg, png"data-validation-error-msg="File foto tidak boleh lebih dari 2MB dan harus bertipe JPG/PNG"/>
            </div>
          </div>
        </div>
      <hr class="no-margin">
      
      <!-- animasi -->
        <div class="form-group panel-body">
          <label for="inputNama" class="col-lg-2 control-label">Animasi Produk</label>
          <div class="col-lg-10">
            <p class="help-block no-margin">File animasi harus bertipe .SWF atau untuk file video harus bertipe .mp4 dan maksimal ukuran file 300Mb</p>
            <div class="form-group-inline">
              <label class="no-margin">File Animasi</label>
              <input type="file" name="FileAnimasi" data-validation="size extension" data-validation-max-size="300M" data-validation-allowing="swf, mp4" data-validation-error-msg="File animasi harus bertipe .SWF atau untuk file video harus bertipe .mp4 dan maksimal ukuran file 300Mb" />
            </div>
          </div>
        </div>
      <hr class="no-margin">

      <!-- produk -->      
        <div class="form-group panel-body">
          <label for="inputNama" class="col-lg-2 control-label">File Produk</label>
          <div class="col-lg-10">
            <p class="help-block no-margin">modul_pemrograman_web.pdf, modul_pemrograman_web.doc, animasi_sorting.flv dan lain sebagainya jadikan dalam bentuk .rar</p>
            <div class="form-group-inline">
              <!-- <label class="no-margin">File Produk</label> -->
              <input type="file" name="FileProduk" data-validation="size extension" data-validation-max-size="500M" data-validation-allowing="rar" data-validation-error-msg="File Produk rubah menjadi bentuk .rar dan ukuran maksimalnya 500Mb"/>
            </div>
          </div>
        </div>
      <hr>

      <!-- submit button -->
         <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default">Simpan</button>
          </div>
        </div>
    <?php echo form_close(); ?>
      </div>  
    </div>
  </div>  <!-- end of panel -->
</div>
<!-- end of right content