@extends('layouts.application')

@php
$title = 'Log in'
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
		@include('shared.errors')
                <h1>{{ __('Log in') }}</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

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
			    <div class="col-md-4">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
			    @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('(forgot password)') }}
                                </a>
                            @endif
			    </div>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" row">
                            <div class="col-md-6 offset-md-4">
                                <div class="">
				    <div class="inline_block">
					<label class="inline" for="remember">
					    <input id="session_remember_me" class="inline" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
					    <span>{{ __('Remember me on this computer') }}</span>
					</label>
				    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="{{ __('Login') }}">
			    </div>
                        </div>
                    </form>
                </div>
		New user?
		{{ link_to(route('register'), 'Sign up now!') }}
            </div>
        </div>
    </div>
</div>
@endsection
