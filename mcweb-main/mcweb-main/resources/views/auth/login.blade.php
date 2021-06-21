<x-guest-layout >
    <section id="mc-login" class="section">
		<div class="columns is-centered">
			<div class="column is-4">
				<h3 class="title is-semibolded">Login</h3>
				<p class="subtitle is-6">Try to connect with us</p>
				<form action="{{route('login')}}" method="POST">
          @csrf
					<div class="field">
					  <label class="label is-mediumed">Email</label>
					  <div class="control">
					    <input class="input" type="text" placeholder="example@gmail.com" name="email">
              <x-validate-error-message name='email'/>
					  </div>
					</div>

					<div class="field">
					  <label class="label is-mediumed">Kata Sandi</label>
					  <div class="control">
					    <input class="input" type="password" name="password">
              <x-validate-error-message name='password'/>
					  </div>
					</div>

					<div class="field mt-4">
					  <div class="control">
					    <button class="button is-dark is-fullwidth" type="submit">Masuk</button>
					  </div>
					</div>
				</form>
				<div class="has-text-centered mt-4">
					<p>Belum memiliki akun ? <a href="{{route('signup')}}">Daftar</a></p>
				</div>
			</div>
		</div>
	</section>
    {{-- <x-auth-card>
	</section>
    <h3 class="title is-semibolded">Login</h3>
	<p class="subtitle is-6">Try to connect with us</p>
        <x-slot name="logo">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
                <div class="field">
					  <div class="control">
                      <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
					  </div>
					</div>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>