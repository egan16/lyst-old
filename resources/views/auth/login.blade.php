@extends('layouts.app')

@section('content')

{{-- header start --}}
<header class="flex items-center justify-between flex-wrap mx-8 my-3">
    <div class="flex items-center flex-shrink-0">
        <h1 class="w-16 text-4xl font-black text-mineshaft">{{ __('Login') }}</h1>
    </div>
</header>
{{-- header end --}}

{{-- form start --}}
<div class="flex justify-center">
    <div class="w-full max-w-xs my-25">
        <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          @csrf
            <div class="my-4">
                {{-- <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label> --}}
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address"
                  class="@error('email') is-invalid @enderror input border border-silver text-base text-dovegrey appearance-none rounded w-full px-2 py-2 focus focus:border-dovegrey focus:outline-none active:outline-none active:border-dovegrey"  autofocus>
                </input>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-6">
                {{-- <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label> --}}
                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password"
                  class="@error('password') is-invalid @enderror input border border-silver text-base text-dovegrey appearance-none rounded w-full px-2 py-2 focus focus:border-dovegrey focus:outline-none active:outline-none active:border-dovegrey" autofocus>
                </input>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mt-1">
                <input class="mt-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-sm font-semibold text-dovegrey form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
              </div>
                <a href="" class="block my-2 mb-6 text-sm font-semibold text-silver underline">Forgot Password?</a>
            </div>
            <div class="flex flex-col items-center justify-between">
                <button class="bg-mantis px-4 py-3 w-full rounded text-sm font-semibold text-white focus:outline-none text-center" type="submit">
                    Log In
                </button>
                <a href="{{ route('register') }}" class="text-sm text-dovegrey py-3 w-full text-left focus:outline-none">
                    Don't have an account? <span class="text-blue-500 hover:text-safetyorange">Register</span>
                </a>
            </div>
        </form>
    </div>
</div>
{{-- form end --}}




{{--
  ORIGINAL CODE

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


 --}}
@endsection
