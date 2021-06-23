@extends('admin.dashboard.master')

@section('title', 'Dashboard')

@section('content')

    <section class="content">
      <div class="container-fluid">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissble">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        <h4><i class="icon fa fa-check"></i>Success!</h4>
          {{ session('pesan') }}.
        </div>
        @endif
        <a href="/psikologadd">
          <button type="button" class="btn btn-success mb-1">Tambah Psikolog</button>
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
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @foreach($PSIKOLOG as $key => $data)
                    <tbody>
                      <tr>
                        <td>{{$PSIKOLOG->firstItem()+$key}}</td>
                        <td>{{$data->nama_psikolog}}</td>
                        <td>{{$data->kategori_id}}</td>
                        <td width="7%">
                            <a href="/detailpsikolog/{{$data->id}}">
                              <button type="button" class="btn btn-block btn-primary">Lihat</button>
                            </a>
                        </td>
                        <td width="7%">
                            <a href="/psikologedit/{{$data->id}}">
                              <button type="button" class="btn btn-block btn-warning">Ubah</button>
                            </a>
                        </td>
                        <td width="7%">
                        <a href="/psikologdelete/{{$data->id}}">    
                          <button type="button" class="btn btn-block btn-danger">Hapus</button>
                        </a>
                        </td>
                      </tr>
                    </tbody>                    
                    @endforeach
                  </table>
                  <div class="pull-right">
                    {{ $PSIKOLOG->links("pagination::bootstrap-4") }}
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection