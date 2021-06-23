@extends('admin.dashboard.master')

@section('title', 'Dashboard')

@section('content')   <section class="content">
      <div class="container-fluid">
            <!-- left column -->
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Ubah Psikolog</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/updatepsikolog/{{$PSIKOLOG-> id}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input name="username" type="text" class="form-control" value="{{ $PSIKOLOG->username }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input name="password" type="password" class="form-control" value="{{ $PSIKOLOG->password }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input name="nama" type="text" class="form-control" value="{{ $PSIKOLOG->nama_psikolog }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Gambar</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="foto_psikolog" type="file" class="custom-file-input" 
                          id="exampleInputFile"@error('foto_psikolog') is-invalid @enderror>
                          <div class="text-red">
                            @error('foto_psikolog')
                              {{ $message }}
                            @enderror
                            </div>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input name="email" type="email" class="form-control" value="{{ $PSIKOLOG->email }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Telpon</label>
                      <input name="no_telp"  class="form-control" value="{{ $PSIKOLOG->no_telp }}">
                    </div>
                    <div class="form-group">
                        <label>alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" value="{{ $PSIKOLOG->alamat }}"></textarea>
                    </div>
                    <div class="form-group">  
                      <label> Kategori</label>  
                      <select name="kategori" class="form-control"> 
                          <option value="{{ $PSIKOLOG->kategori_id }}"selected disabled>{{ $PSIKOLOG->kategori_id }}</option>
                          @foreach ($KATEGORI as $data)
                          <option value="{{ $data->nama_kategori}}"> {{ $data->nama_kategori}}</option>
                          @endforeach
                      </select> 
                    </div>                          
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Biaya</label>
                      <input name="biaya" type="text" class="form-control" value="{{ $PSIKOLOG->biaya_konsultasi }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Rekening</label>
                      <input name="no_rek" type="number" class="form-control" value="{{ $PSIKOLOG->no_rekening }}">
                    </div>
                    <div class="form-group">  
                      <label>Tipe Bank</label>  
                      <select name="tipe_bank" class="form-control"> 
                          <option value="{{ $PSIKOLOG->tipe_bank }}"selected disabled >{{ $PSIKOLOG->tipe_bank }}</option>
                          <option value="BNI">BNI</option>
                          <option value="BRI">BRI</option>
                      </select> 
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