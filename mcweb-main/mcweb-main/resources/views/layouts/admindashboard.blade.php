<?php $title="Dashboard"; ?>
@include('layouts.adminheader')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
         <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Psikolog</p>
              </div>
              <a href="/psikolog" class="small-box-footer">Lihat Data</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>44</h3>

                <p>Pasien</p>
              </div>
              <a href="pasien.php" class="small-box-footer">Lihat Data</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Jadwal Janji</p>
              </div>
              <a href="janji.php" class="small-box-footer">Lihat Data</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Artikel</p>
              </div>
              <a href="artikel.php" class="small-box-footer">Lihat Data</a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@include('layouts.adminfooter')