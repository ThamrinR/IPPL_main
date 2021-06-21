<?php $title="Artikel"; ?>
<?php require_once('header.php'); ?>

    <section class="content">
      <div class="container-fluid">
            <!-- left column -->
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Ubah Artikel</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input type="text" class="form-control" id="judulartikel" value="Kesehatan Mental Sangat Penting?" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea class="form-control" rows="3" placeholder="Masukan Isi Artikel">Kesehatan Mental Sangat Penting? kenapa ya hayo kenapaaa???</textarea>
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
