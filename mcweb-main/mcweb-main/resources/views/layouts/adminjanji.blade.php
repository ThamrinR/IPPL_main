<?php $title="Jadwal Janji"; ?>
@include('layouts.adminheader')

   <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Pasien</th>
                        <th>Psikolog</th>
                        <th>Jadwal</th>
                        <th>Bukti bayar</th>
                        <th>Status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($adminjanji as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->nama_psikolog}}</td>
                        <td>{{$item->jadwal_psikolog}}</td>
                        <td><img src="{{asset('img/bukti/'.$item->bukti_pembayaran)}}" alt="" width="100px" height="100px"></td>
                        <td>{{$item->status}}</td>
                        <td width="7%">
                            <a href="{{route('adminjanji.show',$item->id)}}">
                              <button type="button" class="btn btn-block btn-primary" >Lihat</button>
                            </a>
                        </td>
                        <form method="post" action="{{route('adminjanji.update',$item->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if ($item->status == 'Proses')
                          <td width="7%">                            
                            <input type="submit" name="status" value="Terima" class="btn btn-block btn-success" >                          
                          </td>
                          <td width="7%">
                            <input type="submit" name="status" value="Tolak" class="btn btn-block btn-danger" >
                          </td>
                        @else
                        <td width="7%">                            
                          <input type="submit" name="status" value="Terima" class="btn btn-block btn-success" disabled>                          
                        </td>
                          <td width="7%">
                            <input type="submit" name="status" value="Tolak" class="btn btn-block btn-danger" disabled>
                          </td>
                        @endif                  
                        
                      </form>
                      </tr>
                      @endforeach
                      



                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
@include('layouts.adminfooter')