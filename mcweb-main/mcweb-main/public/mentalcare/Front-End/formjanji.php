<?php require_once('header.php'); ?>

	<section id="mc-formjanji" class="section">
		<h2 class="is-size-3 is-fwindsor mt-4">Buat Janji</h2>
			<p class="is-size-6 has-text-grey">Harap mengisi Form untuk membuat janji</p>
			<br>

            <h2 class="is-size-4 is-fwindsor mt-4 t">Info Psikolog</h2>
            <br>
            <div class="columns">
                <div class="column test">
                    <img src="asset/img/james.jpg" alt="Foto Profil">
                    <div>
                        <p class="is-size-6 has-text-grey ml-3">Nama :</p>
                        <h4 class="is-size-4 is-fwindsor ml-5">James Ulrech M.Psi</h4>
                        <p class="is-size-6 has-text-grey mt-2 ml-3">No. SKP :</p>
                        <h4 class="is-size-5 is-fwindsormt-1 ml-5">141531643735</h4>
                        <p class="is-size-6 has-text-grey mt-2 ml-3">Tempat Praktek :</p>
                        <h4 class="is-size-5 is-fwindsor mt-1 ml-5">RSUD Balikpapan</h4>
                        <p class="is-size-6 has-text-grey mt-2 ml-3">Umur :</p>
                        <li class="is-size-5 is-fwindsor mt-1 ml-5">S1 Psikologi Universitas Indonesia</li>
                        <li class="is-size-5 is-fwindsor mt-1 ml-5">S2 Psikologi Universitas Indonesia</li>
                    </div>
                </div>
            </div>
            <p class="is-size-5 ml-3">Jadwal Praktik </p>
            <div class="columns">
                <div class="column">
                    <p class="is-size-6 has-text-grey mt-2 ml-3">Jumat, 16 April 2021 : </p>
                    <li class="is-size-6 mt-1 ml-5">10.00-10.30</li>
                    <li class="is-size-6 mt-1 ml-5">10.30-11.00</li>
                    <li class="is-size-6 mt-1 ml-5">13.30-14.00</li>
                    <li class="is-size-6 mt-1 ml-5">14.30-15.00</li>
                    <li class="is-size-6 mt-1 ml-5">16.00-16.30</li>
                </div>
                <div class="column">
                    <p class="is-size-6 has-text-grey mt-2 ml-3">Sabtu, 17 April 2021 : </p>
                    <li class="is-size-6 mt-1 ml-5">10.00-10.30</li>
                    <li class="is-size-6 mt-1 ml-5">10.30-11.00</li>
                    <li class="is-size-6 mt-1 ml-5">13.00-13.30</li>
                    <li class="is-size-6 mt-1 ml-5">13.30-14.00</li>
                </div>
                <div class="column">
                    <p class="is-size-6 has-text-grey mt-2 ml-3">Senin, 18 April 2021 : </p>
                    <li class="is-size-6 mt-1 ml-5">10.30-11.00</li>
                    <li class="is-size-6 mt-1 ml-5">13.30-14.00</li>
                    <li class="is-size-6 mt-1 ml-5">14.30-15.00</li>
                    <li class="is-size-6 mt-1 ml-5">16.00-16.30</li>
                </div>
                <div class="column">
                    <p class="is-size-6 has-text-grey mt-2 ml-3">Selasa, 19 April 2021 : </p>
                    <li class="is-size-6 mt-1 ml-5">13.00-13.30</li>
                    <li class="is-size-6 mt-1 ml-5">13.30-14.00</li>
                    <li class="is-size-6 mt-1 ml-5">14.30-15.00</li>
                    <li class="is-size-6 mt-1 ml-5">16.00-16.30</li>
                </div>
              </div>
            


            <h2 class="is-size-4 mt-4 pisah">test</h2>
            <br>
                <div class="field mb-5">
					<label class="is-size-5">Jadwal Konseling</label>
					<div class="control mt-2">
						<input class="input is-medium" type="date" placeholder="Nama Instansi" required name="nama">
					</div>
				</div>

				<div class="field mb-5">
					<label class="is-size-5">Waktu Konseling</label>
					<div class="control mt-2">
						<div class="select is-fullwidth is-medium">
						  <select>
						    <option selected disabled>Pilih Jam</option>
						    <option>10.00-11.30</option>
						    <option>11.30-12.00</option>
						    <option>13.30-14.00</option>
						    <option>14.30-15.00</option>
						    <option>16.00-16.30</option>
						  </select>
						</div>
					</div>
				</div>

                <div class="field">
					<p class="control">
						<a type="submit" class="button is-dark is-medium is-fullwidth" href="pembayaran.html">Buat Janji (Rp 250.000)</a>
					</p>
				</div>
	</section>

<?php require_once('footer.php'); ?>
