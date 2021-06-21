<?php require_once('header.php'); ?>

	<section id="mc-login" class="section">
		<div class="columns is-centered">
			<div class="column is-4">
				<h3 class="title is-semibolded">Signup</h3>
				<p class="subtitle is-6">Try to connect with us</p>
				<form action="">
					<div class="field">
					  <label class="label is-mediumed">Nama Lengkap</label>
					  <div class="control">
					    <input class="input" type="text" placeholder="" name="email">
					  </div>
					</div>

					<div class="field">
					  <label class="label is-mediumed">Email</label>
					  <div class="control">
					    <input class="input" type="text" placeholder="example@gmail.com" name="email">
					  </div>
					</div>

					<div class="field">
					  <label class="label is-mediumed">Nomor Telpon</label>
					  <div class="control">
					    <input class="input" type="text" name="notelp">
					  </div>
					</div>

					<div class="field">
					  <label class="label is-mediumed">Kata Sandi</label>
					  <div class="control">
					    <input class="input" type="text" name="password">
					  </div>
					</div>

					<div class="field">
					  <label class="label is-mediumed">Ulangi Kata Sandi</label>
					  <div class="control">
					    <input class="input" type="text" name="repassword">
					  </div>
					</div>

					<div class="field mt-4">
					  <div class="control">
					    <button class="button is-dark is-fullwidth">Daftar</button>
					  </div>
					</div>
				</form>
				<div class="has-text-centered mt-4">
					<p>Sudah memiliki akun ? <a href="login.php">Masuk</a></p>
				</div>
			</div>
		</div>
	</section>

<?php require_once('footer.php'); ?>
