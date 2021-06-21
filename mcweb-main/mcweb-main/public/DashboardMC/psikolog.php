<?php $title="Psikolog"; ?>
<?php require_once('header.php'); ?>

    <section class="content">
      <div class="container-fluid">
        <a href="psikologadd.php">
          <button type="button" class="btn btn-success mb-1">Tambah Psikolog</button>
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
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dr Andi Setiawan</td>
                        <td>Psikolog Kepribadian</td>
                        <td width="7%">
                            <a href="psikologdetail.php">
                              <button type="button" class="btn btn-block btn-primary">Lihat</button>
                            </a>
                        </td>
                        <td width="7%">
                            <a href="psikologedit.php">
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
