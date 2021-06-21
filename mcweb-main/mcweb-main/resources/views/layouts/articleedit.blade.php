<?php $title="Artikel"; ?>
@include('layouts.adminheader')

    <section class="content">
      <div class="container-fluid">
            <!-- left column -->
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Buat Artikel</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('articlead.update',$article->id)}}" method="post" enctype="multipart/form-data">
                  @csrf                  
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input name="judul" type="text" class="form-control" value="{{$article->judul}}">
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <input name="isi" class="form-control" rows="3" value="{{$article->isi}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Gambar</label>
                      <div class="input-group">
                        {{-- <div class="custom-file"> --}}
                          <input name="gambar" type="file" >
                          {{-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> --}}
                        {{-- </div> --}}
                        {{-- <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div> --}}
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
