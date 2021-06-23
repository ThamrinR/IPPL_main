@extends('admin.dashboard.master')

@section('title', 'Dashboard')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <a href="{{route('articlead.create')}}">
        <button type="button" class="btn btn-success mb-1">Tambah Artikel</button>
      </a>
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($articlead as $item)          
                    <tr>
                                  
                      <td>{{$loop->iteration}}</td>
                      
                      <td>{{$item->judul}}</td>
                      <td>{{substr ("$item->isi", 0,20)}}</td>
                      <td>{{$item->password}}</td>
                      <td width="7%">
                          <a href="artikeldetail.php">
                            <a href="{{route('articlead.show',$item->id)}}" class="btn btn-block btn-primary">Lihat</a>
                          </a>
                      </td>
                      <td width="7%">
                          <a href="artikeledit.php">
                            <a href="{{route('articlead.edit',$item->id)}}" class="btn btn-block btn-warning">Ubah</a>
                          </a>
                      </td>
                      <td width="7%">
                          <form method="post" action="{{route('articlead.destroy',$item->id)}}">
                            @csrf
                            @method('DELETE') 
                            <button type="submit" class="btn btn-block btn-danger">Hapus</button>
                          </form>
                       </td>
                     
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
@endsection