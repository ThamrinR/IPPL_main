<?php $title="Artikel"; ?>
@include('layouts.adminheader')

    <section class="content">
      <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Detail Artikel</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                        <img src="{{asset('/img/article/'.$articlead->gambar)}}" class="img-fluid" alt="Responsive image">
                      </div>
                      <div class="col-md-10">
                      	<br>
                        <div>
                          <p class="h6"><b>Judul</b></p>
                          <p class="h5">{{$articlead->judul}}</p> 
                        </div>
                      	<br>
                        <div>
                          <p class="h6"><b>Deskripsi</b></p>
                          <p class="h5">{{$articlead->isi}}</p> 
                        </div>
                      </div>
                    </div>
              </div>
      </div>
    </section>

@include('layouts.adminfooter')