<x-app-layout> 
	<section id="mc-buatjanji" class="section">
		<div class="card container">
          <div>
            <img src="{{asset('img')}}/Header-3-2.png" alt="Foto Profil" class="avatar responsive">
          </div>
          <div>
            <h2>{{Auth::User()->name}}</h2>
            <h4 style="color:springgreen;">Online</h4>
            <h4>{{Auth::User()->tgl_lahir}}</h4>
          </div>
          <a class="navbar-end button is-rounded" href="#">
            Lihat Profil
          </a>
        </div>
        
      <nav class="panel container">
            <p class="panel-heading">
            Konseling Psikolog
            </p>
            <p class="panel-tabs">
              <a class="is-active">Semua</a>
              <a>Tersedia</a>
              <a>Top Rated</a>
              <a class="control has-icons-left navbar-end">
                <input class="input" type="text" placeholder="Search">
                <span class="icon is-left">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
              </a>
            </p>
            @foreach ($psikolog as $item)
              <div class="panel psikolog">
                <img src="{{asset('img')}}/james.jpg" alt="Foto Profil" class="avatar responsive">
                <div class="bio">
                  <h2>{{$item->nama_psikolog}}</h2>
                  <h4 style="color:springgreen;">Tersedia</h4>
                  <h4>"{{$item->kategori}}"</h4>

                </div>
                <a class="navbar-end button is-primary is-rounded" href="{{route('buatjanji.show',$item->id)}}">
                  Buat Janji
                </a>
              </div>
            @endforeach
            

            
        </nav>
	</section>
</x-app-layout>