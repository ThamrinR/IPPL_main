<?php $title="Psikolog"; ?>
<?php require_once('header.php'); ?>

    <section class="content">
      <div class="container-fluid">
            <!-- left column -->
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Jadwal</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">  
                      <label>Hari</label>  
                      <select class="form-control"> 
                          <option selected disabled>Pilih Hari</option>
                          <option>Senin</option>
                          <option>Selasa</option>
                          <option>Rabu</option>
                          <option>Kamis</option>
                          <option>Jumat</option>
                      </select> 
                    </div>                          
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mulai</label>
                      <input class="form-control" type="time" id="example-time-input">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Hingga</label>
                      <input class="form-control" type="time" id="example-time-input">
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
