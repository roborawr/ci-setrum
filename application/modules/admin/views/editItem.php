<!-- right content -->

<div class="col-md-9 mr-top-50 br-shadow white" >
    <div class="page-header">
        <h1>Edit Produk</h1>
    </div>


    <div class="row">
        <!-- <?php // print_r($records) ?> -->        

    </div>

    <?php echo $this->session->flashdata('notifikasi');?>

    <div class="form-horizontal">
    <?php echo form_open_multipart('admin/ctrl_admin_produk/do_upload'); ?>
      <!-- nama -->
      <div class="form-group">
        <label for="inputNama" class="col-lg-2 control-label">Nama Produk</label>
        <div class="col-lg-10">
            <input type="hidden" value="<?php echo $records['0']->id_produk ;?>">
            <input type="hidden" value="<?php echo $records['0']->uploader ;?>">
          <input type="text" class="form-control" name="inputNamaProduk" placeholder="Nama Produk" value="<?php echo $records['0']->nama_produk ?>">
        </div>
      </div>
      <hr class="no-margin">
      <!-- Deskripsi Produk -->
      <div class="form-group">
        <label for="inputNama" class="col-lg-2 control-label">Deskripsi Produk</label>
        <div class="col-lg-10">
          <textarea type="text" class="form-control" rows="4" name="inputDeskripsi" placeholder="Deskripsi Produk" ><?php echo $records['0']->deskripsi_produk ?></textarea>
        </div>
      </div>
      <hr class="no-margin">
      <!-- kategori -->
      <div class="form-group">
        <label for="kategori" class="col-lg-2 control-label">Kategori</label>
        <div class="col-lg-10">
           <p class="help-block no-margin">Pilih salah jenis kategori</p>

          <label class="checkbox-inline">
            <input type="checkbox" name="jenisKategori" value="Teknik Informatika"> Teknik Informatika
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="jenisKategori" value="Teknik Elektro"> Teknik Elektro
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
                <input type="radio" name="jenisFile" value="dokumen" checked>
                dokumen
              </label>
            </div>
            <div class="radio-inline">
              <label>
                <input type="radio" name="jenisFile" value="pdf">
               PDF
              </label>
            </div>
            <div class="radio-inline">
              <label>
                <input type="radio" name="jenisFile" value="softfile">
               softfile
              </label>
            </div>
        </div>
      </div>
      <hr class="no-margin">
      <!-- Upload -->
      <div class="form-group">
        <label for="inputNama" class="col-lg-2 control-label">Foto Produk</label>
        <div class="col-lg-10">
          <p class="help-block no-margin">Lampirkan Foto/Screenshot Produk</p>
          <div class="form-group-inline">
            <label class="no-margin">Foto Produk</label>
            <input type="file" name="FotoProduk"  />
          </div>
        </div>
      </div>
      <!-- animasi -->
      <hr class="no-margin">
      <div class="form-group">
        <label for="inputNama" class="col-lg-2 control-label">Animasi Produk</label>
        <div class="col-lg-10">
          <p class="help-block no-margin">Jika tersedia animasi, lampirkan Animasi dengan format .flv</p>
          <div class="form-group-inline">
            <label class="no-margin">File Animasi</label>
            <input type="file" name="FileAnimasi" />
          </div>
        </div>
      </div>
      <!-- produk -->
      <hr class="no-margin">
      <div class="form-group">
        <label for="inputNama" class="col-lg-2 control-label">File Produk</label>
        <div class="col-lg-10">
          <p class="help-block no-margin">modul_pemrograman_web.pdf, modul_pemrograman_web.doc, animasi_sorting.flv dan lain sebagainya</p>
          <div class="form-group-inline">
            <!-- <label class="no-margin">File Produk</label> -->
            <input type="file" name="FileProduk" />
          </div>
        </div>
      </div>
      <!-- submit button -->
       <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
          <button type="submit" class="btn btn-default">Simpan</button>
        </div>
      </div>
    <?php echo form_close(); ?>
    </div>  

</div>
<!-- end of right content