<?php $title="Psikolog"; ?>
<?php require_once('header.php'); ?>

    <section class="content">
      <div class="container-fluid">
            <!-- left column -->
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Detail Psikolog</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2017/10/13/cba7b68a-c95b-46b5-a2e6-66ba7449cfd7_43.jpeg?w=700&q=90" class="img-fluid" alt="Responsive image">
                      </div>
                      <div class="col-md-4">
                        <div>
                          <p class="h6"><b>nama</b></p>
                          <p class="h5">andi setiawan</p> 
                        </div>
                        <div>
                          <p class="h6"><b>email</b></p>
                          <p class="h5">andisetiawan@gmail.com</p> 
                        </div>
                        <div>
                          <p class="h6"><b>No Telpon</b></p>
                          <p class="h5">822737283</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Alamat</b></p>
                          <p class="h5">Jalan MT Haryono</p> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div>
                          <p class="h6"><b>Username</b></p>
                          <p class="h5">andisetiawan99</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Kategori</b></p>
                          <p class="h5">Psikolog Keluarga</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Biaya</b></p>
                          <p class="h5">50000</p> 
                        </div>
                        <div>
                          <p class="h6"><b>No Rekening</b></p>
                          <p class="h5">062832291</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Tipe Bank</b></p>
                          <p class="h5">BNI</p> 
                        </div>
                      </div>
                    </div>
                  </div>

                  <a href="psikologjadwaladd.php">
                    <button type="button" class="btn btn-success mb-1">Tambah Jadwal</button>
                  </a>
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Hari</th>
                          <th>Jam</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Senin</td>
                          <td>10.00 - 12.00</td>
                          <td width="7%">
                              <button type="button" class="btn btn-block btn-danger">Hapus</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>

<?php require_once('footer.php'); ?>
