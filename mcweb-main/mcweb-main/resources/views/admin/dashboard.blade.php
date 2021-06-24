@extends('admin.dashboard.master')

@section('title', 'Dashboard')

@section('content')
<!-- Main content -->
<!-- /.content -->
     <section class="content">
      <div class="container-fluid">
        
         <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$psikolog->count()}}</h3>

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
                <h3>{{$pasien->count()}}</h3>

                <p>Pasien</p>
              </div>
              <a href="/pasienad" class="small-box-footer">Lihat Data</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$jadwal->count()}}</h3>

                <p>Jadwal Janji</p>
              </div>
              <a href="/adminjanji" class="small-box-footer">Lihat Data</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$article->count()}}</h3>

                <p>Artikel</p>
              </div>
              <a href="/articlead" class="small-box-footer">Lihat Data</a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
@endsection