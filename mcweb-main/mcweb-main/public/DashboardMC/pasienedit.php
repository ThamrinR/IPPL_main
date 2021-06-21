<?php $title="Pasien"; ?>
<?php require_once('header.php'); ?>

    <section class="content">
      <div class="container-fluid">
            <!-- left column -->
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Pasien</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" value="andre">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" value="andre@gmail.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password lama</label>
                      <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Masukan Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password Baru</label>
                      <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Masukan Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Telpon</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan No Telpon" value="0829492123">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tempat Lahir" value="samarinda">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">  
                      <label>Jenis Kelamin</label>  
                      <select class="form-control"> 
                          <option disabled>Pilih Jenis Kelamin</option>
                          <option selected>Laki-laki</option>
                          <option>Perempuan</option>
                      </select> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status/Pekerjaan</label>
                      <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Masukan Status/Pekerjaan" value="Freelance">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Foto</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>

<?php require_once('footer.php'); ?>
