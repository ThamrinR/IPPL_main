<?php $title="Psikolog"; ?>
@include('layouts.adminheader')

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
                        <img src="{{asset('img/foto_psikolog/'.$PSIKOLOG->foto_psikolog)}}" class="img-fluid" alt="Responsive image">
                      </div>
                      <div class="col-md-4">
                        <div>
                          <p class="h6"><b>nama</b></p>
                          <p class="h5">{{$PSIKOLOG->nama_psikolog}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>email</b></p>
                          <p class="h5">{{$PSIKOLOG->email}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>No Telpon</b></p>
                          <p class="h5">{{$PSIKOLOG->no_telp}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Alamat</b></p>
                          <p class="h5">{{$PSIKOLOG->alamat}}</p> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div>
                          <p class="h6"><b>Username</b></p>
                          <p class="h5">{{$PSIKOLOG->username}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Kategori</b></p>
                          <p class="h5">{{$PSIKOLOG->kategori_id}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Biaya</b></p>
                          <p class="h5">{{$PSIKOLOG->biaya_konsultasi}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>No Rekening</b></p>
                          <p class="h5">{{$PSIKOLOG->no_rekening}}</p> 
                        </div>
                        <div>
                          <p class="h6"><b>Tipe Bank</b></p>
                          <p class="h5">{{$PSIKOLOG->tipe_bank}}</p> 
                        </div>
                      </div>
                    </div>
                  </div>

                  <a href="/psikologjadwaladd/{{$PSIKOLOG->id}}">
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
                        @foreach($Jadwal as $data)
                        <tr>
                          <td>{{$data->id}}</td>
                          <td>{{$data->hari}}</td>
                          <td>{{$data->jam_mulai}} - {{$data->jam_akhir}}</td>
                          <td width="7%">
                            <a href="/jadwaldelete/{{$data->id}}">
                              <button type="button" class="btn btn-block btn-danger">Hapus</button>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>

@include('layouts.adminfooter')

