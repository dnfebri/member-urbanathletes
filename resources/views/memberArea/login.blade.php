<x-main>
  <div class="container">
    <div class="flex items-center justify-center py-24">
      <div class="rounded-xl backdrop-blur-sm bg-white/20 w-full mx-8 sm:w-96 shadow-xl items-center">
        <div class="items-center justify-center flex py-4 border-b mb-8">
          <h2 class="text-2xl font-bold">Member Area Login</h2>
          {{-- <img class="w-28 opacity-100" src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Atlhetes"> --}}
        </div>
        <div class="flex justify-center">
          <form method="POST" action="{{ url('member') }}" class="w-full px-20 sm:px-8">
            @csrf
            <div class="text-gray-700">
              {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}
              <input id="email" type="email"
                class="w-full bg-transparent border-0 border-b mb-2 focus:outline-none @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
              <div class="">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="">
              {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}
              <input id="password" type="password"
                class="w-full bg-transparent border-0 border-b mb-2 @error('password') is-invalid @enderror"
                name="password" required placeholder="Password" autocomplete="current-password">
              <div class="">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="">
              <div class=" offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                    ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>
            <div class="text-center my-4">
              <div class="flex justify-center items-center mb-4">
                <button class="bg-green-ua py-1 px-4 w-full rounded-lg shadow-xl text-white" type="submit"
                  class="btn btn-primary">
                  {{ __('Login') }}
                </button>
              </div>
              @if (Route::has('password.request'))
              <a class="" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
              @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-main>