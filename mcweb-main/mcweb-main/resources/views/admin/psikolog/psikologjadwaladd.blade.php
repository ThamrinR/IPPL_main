@extends('admin.dashboard.master')

@section('title', 'Dashboard')

@section('content')
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
                <form method="post" action="/jadwaladd/{{$PSIKOLOG->id}}" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                    <div class="form-group">  
                      <label>Hari</label>  
                      <select name="hari" class="form-control"> 
                          <option selected disabled>Pilih Hari</option>
                          <option value='Senin'>Senin</option>
                          <option value='Selasa'>Selasa</option>
                          <option value='Rabu'>Rabu</option>
                          <option value='Kamis'>Kamis</option>
                          <option value='Jumat'>Jumat</option>
                      </select> 
                    </div>                          
                    
                    <div class="form-group">
                      <label  for="exampleInputEmail1">Mulai</label>
                      <input name="jam_mulai" class="form-control" type="time" id="example-time-input">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Hingga</label>
                      <input name="jam_akhir" class="form-control" type="time" id="example-time-input">
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
@endsection