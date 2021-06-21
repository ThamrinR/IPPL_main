<x-app-layout>    

    <x-slot name="title">
        Booking
    </x-slot>
    <section id="mc-editdata" class="section">
        <div class="container">
          <div class="columns is-centered is-multiline">
            <div class="column is-9">
              <h4 class="is-size-4 is-uppercase has-text-dark title">Ubah Data Profile</h3>
            </div>
            <div class="column is-12">
              <form action="{{route('editpro.update',$editpro->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="columns is-multiline is-centered">
                  
                  <div class="column is-3">
                    <div class="field">
                      <label>Name</label>
                      <div class="control">
                        <input class="input" type="text" name="name" placeholder="Enter full name" 
                        required value="{{$editpro->name}}">
                      </div>
                    </div>
    
                    <div class="field">
                      <label>Tempat Lahir</label>
                      <div class="control">
                        <input class="input" type="text" name="tempat_lahir" required value="{{$editpro->tempat_lahir}}">
                      </div>
                    </div>
    
                    <div class="field">
                      <label>Tanggal lahir</label>
                      <div class="control">
                        <input class="input" name="tgl_lahir" type="date" required value="{{$editpro->tgl_lahir}}">
                      </div>
                    </div>
                    
                    <div class="field">
                      <label>Jenis Kelamin</label>
                      <br>
                      <div class="select">
                        <select disabled>
                          <option selected>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                    </div>
    
                    
    
                  </div>
                  <div class="column is-3">
                      <div class="field">
                      <label>Email</label>
                      <div class="control">
                        <input class="input" type="email" placeholder="you@example.com" required disabled value="{{$editpro->email}}">
                      </div>
                    </div>
                    <div class="field">
                      <label>Nomor Telpon</label>
                      <div class="control">
                        <input class="input" name="no_telp" type="text" required value="{{$editpro->no_telp}}">
                      </div>
                    </div>
                    <div class="field">
                      <label>Status/Pekerjaan</label>
                      <div class="control">
                        <input class="input" type="text" name="status" required value="{{$editpro->status}}">
                      </div>
                    </div>
                    <label>Foto Profile</label>
                    <div class="file">
                      <label class="file-label">
                        <input class="file-input" name="foto_profile" type="file" >
                        <span class="file-cta">
                          <span class="file-label">
                            Choose a file…
                          </span>
                        </span>
                      </label>
                    </div>
                    
                    
                    <br>
                  </div>
                  <div class="column is-6 is-offset-3">
                    <div class="field">
                      <p class="control has-text-right">
                        <button class="button is-light" onclick="window.history.back()">Kembali</button>
                        <button type="submit" class="button is-dark">Simpan Perubahan</button>
                      </p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    
</x-app-layout>