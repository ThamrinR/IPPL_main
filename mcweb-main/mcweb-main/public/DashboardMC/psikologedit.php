<?php $title="Psikolog"; ?>
<?php require_once('header.php'); ?>

    <section class="content">
      <div class="container-fluid">
            <!-- left column -->
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Ubah Psikolog</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" placeholder="Masukan Username" value="iniusername">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password lama</label>
                      <input type="password" class="form-control" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password baru</label>
                      <input type="password" class="form-control" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" placeholder="Masukan Nama" value="Dr Andi Setiawan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Gambar</label>
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
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" placeholder="Masukan email" value="andi@gmail.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Telpon</label>
                      <input type="number" class="form-control" placeholder="Masukan Nomor Telpon" value="082293293">
                    </div>
                    <div class="form-group">
                        <label>alamat</label>
                        <textarea class="form-control" rows="3" placeholder="Masukan alamat" value="jln mt haryono"></textarea>
                    </div>
                    <div class="form-group">  
                      <label> Kategori</label>  
                      <select class="form-control"> 
                          <option disabled>Pilih Kategori</option>
                          <option selected>Psikolog Keluarga</option>
                          <option>Psikolog Kepribadian</option>
                      </select> 
                    </div>                          
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Biaya</label>
                      <input type="text" class="form-control" placeholder="Masukan Biaya" value="50000">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Rekening</label>
                      <input type="number" class="form-control" placeholder="Masukan Nomor Rekening" value="064821923">
                    </div>
                    <div class="form-group">  
                      <label>Tipe Bank</label>  
                      <select class="form-control"> 
                          <option disabled>Pilih Tipe</option>
                          <option selected>BNI</option>
                          <option>BRI</option>
                      </select> 
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
