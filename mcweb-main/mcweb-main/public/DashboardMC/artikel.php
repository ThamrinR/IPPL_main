<?php $title="Artikel"; ?>
<?php require_once('header.php'); ?>

    <section class="content">
      <div class="container-fluid">
        <a href="artikeladd.php">
          <button type="button" class="btn btn-success mb-1">Tambah Artikel</button>
        </a>
        <div class="row">
            <div class="col-12">
              <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>17-5-2021</td>
                        <td>Kesehatan Mental Sangat Penting?</td>
                        <td width="7%">
                            <a href="artikeldetail.php">
                              <button type="button" class="btn btn-block btn-primary">Lihat</button>
                            </a>
                        </td>
                        <td width="7%">
                            <a href="artikeledit.php">
                              <button type="button" class="btn btn-block btn-warning">Ubah</button>
                            </a>
                        </td>
                        <td width="7%">
                            <button type="button" class="btn btn-block btn-danger">Hapus</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>

<?php require_once('footer.php'); ?>
