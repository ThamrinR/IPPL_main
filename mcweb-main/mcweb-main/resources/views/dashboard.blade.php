<x-app-layout>    

    <x-slot name="title">
        Booking
    </x-slot>


    <x-slot name="header">
    </x-slot>

    <section id="mc-buatjanji" class="section">
		<div class="card container">
          <div>
            <img src="img/Header-3-2.png" alt="Foto Profil" class="avatar responsive">
          </div>
          <div>
            <h2>{{Auth::User()->name}}</h2>
            <h4 style="color:springgreen;">Online</h4>
            <h4>{{Auth::User()->tgl_lahir}}</h4>
          </div>
          <a class="navbar-end button is-rounded" href="/profile">
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

            <div class="panel psikolog">
              <img src="img/james.jpg" alt="Foto Profil" class="avatar responsive">
              <div class="bio">
                <h2>James Ulrech, M.Psi</h2>
                <h4 style="color:springgreen;">Tersedia</h4>
                <h4>20 Tahun</h4>
              </div>
              <a class="navbar-end button is-primary is-rounded" href="/user">
                Buat Janji
              </a>
            </div>
            <div class="panel psikolog">
              <img src="img/clarissa.jpg" alt="Foto Profil" class="avatar responsive">
              <div class="bio">
                <h2>Clarissa Hancock, M.Psi</h2>
                <h4 style="color:springgreen;">Tersedia</h4>
                <h4>20 Tahun</h4>
              </div>
              <a class="navbar-end button is-primary is-rounded" href="/user">
                Buat Janji
              </a>
            </div>
            <div class="panel psikolog">
              <img src="img/peter.jpg" alt="Foto Profil" class="avatar responsive" >
              <div class="bio">
                <h2>Peter Harisson S.Psi</h2>
                <h4 style="color:springgreen;">Tersedia</h4>
                <h4>20 Tahun</h4>
              </div>
              <a class="navbar-end button is-primary is-rounded" href="/user">
                Buat Janji
              </a>
            </div>
            <div class="panel psikolog">
              <img src="img/elisha.jpg" alt="Foto Profil" class="avatar responsive">
              <div class="bio">
                <h2>Elisha, M.Psi</h2>
                <h4 style="color:springgreen;">Tersedia</h4>
                <h4>20 Tahun</h4>
              </div>
              <a class="navbar-end button is-primary is-rounded" href="/user">
                Buat Janji
              </a>
            </div>
            <div class="panel psikolog">
              <img src="img/michael.jpg" alt="Foto Profil" class="avatar responsive">
              <div class="bio">
                <h2>Dr. Michael Pazlowski</h2>
                <p>Tidak Tersedia</p>
                <h4>20 Tahun</h4>
              </div>
              <a class="navbar-end button is-rounded" title="Disabled button" disabled href="#">
                Buat Janji
              </a>
            </div>
        </nav>
	</section>
    
</x-app-layout>
