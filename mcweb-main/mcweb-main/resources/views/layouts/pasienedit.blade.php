<?php $title="Pasien"; ?>
@include('layouts.adminheader')

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
                <form action="{{route('pasienad.update',$pasienad->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" value="{{$pasienad->name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" value="{{$pasienad->email}}">
                    </div>
                    <div class="form-group">
                      {{-- <label for="exampleInputEmail1">Password lama</label>
                      <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Masukan Password">
                    </div>
                    <div class="form-group"> --}}
                      <label for="exampleInputEmail1">Password Baru</label>
                      {{-- <input name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Masukan Password" value="{{$pasienad->password}}"> --}}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Telpon</label>
                      <input name="no_telp" type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan No Telpon" value="{{$pasienad->no_telp}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tempat Lahir" value="{{$pasienad->tempat_lahir}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" value="{{$pasienad->tgl_lahir}}">
                    </div>
                    <div class="form-group">  
                      <label>Jenis Kelamin</label>  
                      <select name="jenis_kelamin" class="form-control"> 
                          <option disabled>Pilih Jenis Kelamin</option>
                          <option selected>Laki-laki</option>
                          <option>Perempuan</option>
                      </select> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status/Pekerjaan</label>
                      <input name="status" type="text" class="form-control" id="exampleInputEmail1" value="{{$pasienad->status}}">
                   
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Foto</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="foto_profile" type="file" class="custom-file-input" id="exampleInputFile">
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

    @include('layouts.adminfooter')
