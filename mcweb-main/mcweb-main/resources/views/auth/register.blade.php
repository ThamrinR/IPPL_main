<x-guest-layout>
    <section id="mc-login" class="section">
		<div class="columns is-centered">
			<div class="column is-4">
				<h3 class="title is-semibolded">Signup</h3>
				<p class="subtitle is-6">Try to connect with us</p>
				<form method="POST" action="{{ route('register') }}">
                    @csrf
					<div class="field">
					  <label class="label is-mediumed">Nama Lengkap</label>
					  <div class="control">
						  <input class="input" type="text" placeholder="" name="name" required>
						  <x-validate-error-message name='name'/>
					</div>
					</div>

					<div class="field">
					  <label class="label is-mediumed">Email</label>
					  <div class="control">
						  <input class="input" type="text" placeholder="example@gmail.com" name="email" required>
						<x-validate-error-message name='email'/>
					  </div>
					</div>

					<div class="field">
					  <label class="label is-mediumed">Nomor Telpon</label>
					  <div class="control">
					    <input class="input" type="text" name="no_telp" required>
						<x-validate-error-message name='no_telp'/>
					</div>
					</div>

					<div class="field">
					  <label class="label is-mediumed">Kata Sandi</label>
					  <div class="control">
					    <input class="input" type="password" name="password" required>
						<x-validate-error-message name='password'/>
					</div>
					</div>

					<div class="field">
					  <label class="label is-mediumed">Ulangi Kata Sandi</label>
					  <div class="control">
					    <input class="input" type="password" name="password_confirmation" required>
						<x-validate-error-message name='password_confirmation'/>
					  </div>
					</div>
					<div class="field mt-4">
					  <div class="control">
					    <button class="button is-dark is-fullwidth" type="submit">Daftar</button>
					  </div>
					</div>
				</form>
				<div class="has-text-centered mt-4">
					<p>Sudah memiliki akun ? <a href="{{route('login')}}">Masuk</a></p>
				</div>
			</div>
		</div>
	</section>
</x-guest-layout>
@include('layouts.footer')