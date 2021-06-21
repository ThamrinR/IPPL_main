<?php $title="Pasien"; ?>
@include('layouts.adminheader')

    <section class="content">
      <div class="container-fluid">
            <!-- left column -->
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Detail Pasien</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <img high="100px" src="{{asset('/img/pasien/'.$pasienad->foto_profile)}}">
                      </div>
                      <div class="col-md-4">
                        <div>
                          <p class="h6"><b>nama</b></p>
                          <p class="h5">{{$pasienad->name}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>email</b></p>
                          <p class="h5">{{$pasienad->email}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>No Telpon</b></p>
                          <p class="h5">{{$pasienad->no_telp}}</p> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div>
                          <p class="h6"><b>Jenis Kelamin</b></p>
                          <p class="h5">{{$pasienad->jenis_kelamin}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Status/Pekerjaan</b></p>
                          <p class="h5">{{$pasienad->status}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Tempat, Tanggal Lahir</b></p>
                          <p class="h5">{{$pasienad->tempat_lahir}}, {{$pasienad->tgl_lahir}}</p> 
                        </div>
                      </div>
                    </div>
              </div>
              <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>

    @include('layouts.adminfooter')
