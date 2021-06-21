<?php $title="Detail Janji"; ?>
@include('layouts.adminheader')

    <section class="content">
      <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Detail Jadwal Janji</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="h4">Psikolog</p>
                      	<br>
                        <div>
                          <p class="h6"><b>Nama</b></p>
                          <p class="h5">{{$adminjanji->nama_psikolog}}</p> 
                        </div>
                        <br>
                        <div>
                          <p class="h6"><b>Email</b></p>
                          <p class="h5">{{$adminjanji->psikologmail}}</p> 
                        </div>
                        <br>
                        <div>
                          <p class="h6"><b>No Telpon</b></p>
                          <p class="h5">{{$adminjanji->nohppsikolog}}</p> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p class="h4">Pasien</p>
                        <br>
                        <div>
                          <p class="h6"><b>Nama</b></p>
                          <p class="h5">{{$adminjanji->name}}</p> 
                        </div>
                        <br>
                        <div>
                          <p class="h6"><b>Email</b></p>
                          <p class="h5">{{$adminjanji->email}}</p> 
                        </div>
                        <br>
                        <div>
                          <p class="h6"><b>No Telpon</b></p>
                          <p class="h5">{{$adminjanji->no_telp}}</p> 
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>
                    <p class="h4">Lainnya</p>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <p class="h6"><b>Bukti Pembayaran</b></p>
                        <img src="{{asset('/img/bukti/'.$adminjanji->bukti_pembayaran)}}" alt="" width="100%">
                      </div>
                      <div class="col-md-4">
                        <div>
                          <p class="h6"><b>Jadwal Konseling</b></p>
                          <p class="h5">{{$adminjanji->jadwal_psikolog}}</p> 
                        </div>
                        <br>
                        <div>
                          <p class="h6"><b>Biaya</b></p>
                          <p class="h5">{{$adminjanji->biaya_konsultasi}}</p> 
                        </div>
                        <br>
                        <div>
                          <p class="h6"><b>Status</b></p>
                          <p class="h5">{{$adminjanji->status}}</p> 
                        </div>
                      </div>
                    </div>
              </div>
      </div>
    </section>
@include('layouts.adminfooter')