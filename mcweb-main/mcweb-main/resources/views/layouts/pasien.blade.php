<?php $title="Pasien"; ?>
@include('layouts.adminheader')

<section class="content">
  <div class="container-fluid">
    <a href="{{route('pasienad.create')}}">
      <button type="button" class="btn btn-success mb-1">Tambah Pasien</button>
    </a>
    <div class="row">
        <div class="col-12">
          <div class="card">
            
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pasienad as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td width="7%">
                        <a href="{{route('pasienad.show',$item->id)}}">
                          <button type="button" class="btn btn-block btn-primary">Lihat</button>
                        </a>
                    </td>
                    <td width="7%">
                        <a href="{{route('pasienad.edit',$item->id)}}">
                          <button type="button" class="btn btn-block btn-warning">Ubah</button>
                        </a>
                    </td>
                    <td width="7%">
                      <form method="post" action="{{route('pasienad.destroy',$item->id)}}">
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

@include('layouts.adminfooter')