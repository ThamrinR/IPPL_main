@extends('admin.dashboard.master')

@section('title', 'Dashboard')

@section('content')
    <section class="content">
      <div class="container-fluid">
        <a href="/kategoripsikologadd">
          <button type="button" class="btn btn-success mb-1">Tambah Kategori</button>
        </a>
        <div class="row">
            <div class="col-12">
              <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @foreach($KATEGORI as $key => $data)
                    <tbody>
                      <tr>
                        <td>{{$KATEGORI->firstItem()+$key}}</td>
                        <td>{{$data->nama_kategori}}</td>
                        <td width="7%">
                        <a href="/kategoridelete/{{$data->id}}">
                            <button type="button" class="btn btn-block btn-danger">Hapus</button>
                        </a>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection