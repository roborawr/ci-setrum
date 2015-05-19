
<!-- right content -->
<div class="col-md-9 mr-top-50 white br-shadow" >
  <div class="panel panel-default">
    <div class="panel-body">

      <div class="page-header">
        <h1>Halaman Modifikasi User</h1>
      </div>
      <!-- form -->

      <form action="<?php echo site_url() ?>admin/ctrl_admin/update_submited" class="form-horizontal" role="form" method="POST" >

      <!-- nama -->
      <div class="form-group">
        <label for="inputNama" class="col-lg-2 control-label">Nama Lengkap</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Nama Lengkap" value="<?php echo $customer->nama_lengkap ?>" data-validation="length alphanumeric" data-validation-allowing=" ,." data-validation-length="max50" data-validation-error-msg="Periksa kembali Nama anda, karakter yang diperbolehkan hanya alphanumeric." data-validation-help="Panjang maksimal nama 50 karakter." value="<?php echo  $this->input->post('nama'); ?>">
          <div class="row"></div>
        </div>
      </div>
      <!-- Username -->
      <div class="form-group">
        <label for="inputNama" class="col-lg-2 control-label">Username</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputNama" name="username" placeholder="Username" value="<?php echo $customer->username ?>" data-validation="length alphanumeric" data-validation-length="5-12" data-validation-error-msg="Periksa kembali username anda" value="<?php echo $this->input->post('username'); ?>">
        </div>
      </div>
      <!-- password -->
      <div class="form-group">
        <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input type="password" class="form-control" id="inputPassword1" name="password1" placeholder="Password" data-validation="length alphanumeric" data-validation-length="max12" data-validation-strength="1"  data-validation-error-msg="Periksa kembali password anda" data-validation-help="Panjang maksimal password 12 karakter.">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="email" class="form-control" id="inputEmail1" name="alamat_email" placeholder="Email" value="<?php echo $customer->email ?>" data-validation="email" data-validation-help="format untuk email 'namaemail@xxx.xxx'" data-validation-error-msg="email yang dimasukkan tidak sesuai dengan format." value="<?php echo $this->input->post('alamat_email'); ?>">
        </div>
      </div>
      <!-- status -->

      <div class="form-group ">
        <label for="inputStatus" class="col-lg-2 control-label">Status User</label>
        <div class="col-lg-10 ">
            <div class="radio-inline">
              
              <label>
                <input type="radio" name="role" id="optionsRadios1" value="dosen">
                Dosen
              </label>
            </div>
            <div class="radio-inline">
              <label>
                <input type="radio" name="role" id="optionsRadios2" value="mahasiswa">
               Mahasiswa
              </label>
            </div>
            <div class="radio-inline">
              <label>
                <input type="radio" name="role" id="optionsRadios3" value="user">
               User
              </label>
            </div>
        </div>
      </div>

       <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
          <button type="submit" class="btn btn-default">Simpan</button>
        </div>
      </div>
    </form>

    </div>
  </div>
</div>
<!-- end of right content -->
