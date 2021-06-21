<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Mental Care</title>
</head>
<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a href="index.html" class="navbar-item">
                        <img src="asset/img/logomc.png" alt="">
                    </a>
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item is-mediumed px-5 active">
                          Buat Janji
                        </a>
                        <a class="navbar-item is-mediumed px-5">
                            Quiz
                        </a>
                        <a class="navbar-item is-mediumed px-5">
                            Article 
                        </a>
                        <div class="navbar-item has-dropdown is-hoverable">
                          <a class="navbar-link">
                            Hi, Muhhadi
                          </a>
                          <div class="navbar-dropdown">
                            <a class="navbar-item">
                              Profil
                            </a>
                            <a class="navbar-item">
                              Pengaturan
                            </a>
                            <a class="navbar-item">
                              Logout
                            </a>
                          </div>
                        </div>
                    </div>
                  </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="card container">
          <div>
            <img src="asset/img/Header-3-2.png" alt="Foto Profil" class="avatar responsive">
          </div>
          <div>
            <h2>Muhhadi Adi Manyu</h2>
            <h4 style="color:springgreen;">Online</h4>
            <h4>20 Tahun</h4>
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

            <div class="panel psikolog">
              <img src="asset/img/james.jpg" alt="Foto Profil" class="avatar responsive">
              <div class="bio">
                <h2>James Ulrech, M.Psi</h2>
                <h4 style="color:springgreen;">Tersedia</h4>
                <h4>20 Tahun</h4>
              </div>
              <a class="navbar-end button is-primary is-rounded" href="formjanji.html">
                Buat Janji
              </a>
            </div>
            <div class="panel psikolog">
              <img src="asset/img/clarissa.jpg" alt="Foto Profil" class="avatar responsive">
              <div class="bio">
                <h2>Clarissa Hancock, M.Psi</h2>
                <h4 style="color:springgreen;">Tersedia</h4>
                <h4>20 Tahun</h4>
              </div>
              <a class="navbar-end button is-primary is-rounded" href="#">
                Buat Janji
              </a>
            </div>
            <div class="panel psikolog">
              <img src="asset/img/peter.jpg" alt="Foto Profil" class="avatar responsive" >
              <div class="bio">
                <h2>Peter Harisson S.Psi</h2>
                <h4 style="color:springgreen;">Tersedia</h4>
                <h4>20 Tahun</h4>
              </div>
              <a class="navbar-end button is-primary is-rounded" href="#">
                Buat Janji
              </a>
            </div>
            <div class="panel psikolog">
              <img src="asset/img/elisha.jpg" alt="Foto Profil" class="avatar responsive">
              <div class="bio">
                <h2>Elisha, M.Psi</h2>
                <h4 style="color:springgreen;">Tersedia</h4>
                <h4>20 Tahun</h4>
              </div>
              <a class="navbar-end button is-primary is-rounded" href="#">
                Buat Janji
              </a>
            </div>
            <div class="panel psikolog">
              <img src="asset/img/michael.jpg" alt="Foto Profil" class="avatar responsive">
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
    </main>

    <footer>
      <div class="container">
				<div class="columns">
					<div class="column">
						<!-- <h3 class="is-size-4 has-text-weight-bold has-text-light"></h3> -->
						<img src="asset/img/logomc2.png" alt="" width="150px">
						<p class="is-size-6 has-text-grey-light">Untuk pribadi yang lebih baik</p>
					</div>
					<div class="column">
						<b class="is-size-4 has-text-weight-semibold has-text-light">Link terkait</b>
						<ul>
							<li><a href="" class="has-text-grey-light is-size-6">Kementiran Kesehatan RI</a></li>
							<li><a href="" class="has-text-grey-light is-size-6">Germas Indonesia</a></li>
							<li><a href="" class="has-text-grey-light is-size-6">Ikatan Dokter Indonesia (IDI)</a></li>
						</ul>
					</div>
					<div class="column is-5">
						<div class="columns">
							<div class="column">
								<b class="is-size-4 has-text-light has-text-weight-semibold">Telepon</b>
								<p class="is-size-6 has-text-grey-light">0541-229931</p>
								<br>
								<b class="is-size-4 has-text-light has-text-weight-semibold">Email</b>
								<p class="is-size-6 has-text-grey-light">mentalcare@gmail.com</p>
							</div>
							<div class="column">
								<b class="is-size-4 has-text-light has-text-weight-semibold">Lokasi</b>
								<p class="is-size-6 has-text-grey-light">Jl. Soekarno-Hatta Km. 15, Karang Joang, Balikpapan, Kalimantan Timur, 76127</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<br>
			<br>
			<br>
			<p class="copyright has-text-centered has-text-grey-light">© Mental care 2021</p>
    </footer>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>