@extends('layouts.application')

@php
$title = 'Edit User';
$user = Auth::user();
$name = old('name');
if (empty(old('name'))) {
$name = $user->name;
}
$email = old('email');
if (empty(old('email'))) {
$email = $user->email;
}
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Update your profile</h1>
	    @include('shared.errors')
            <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
		@method('PATCH')
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
			<div class=" @error('name') field_with_errors @enderror ">			
			    <input id="name" type="text" class="form-control" name="name" value="{{ $name }}" autocomplete="name" autofocus>
			</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                    <div class="col-md-6">
			<div class=" @error('email') field_with_errors @enderror ">			
			    <input id="email" type="email" class="form-control" name="email" value="{{ $email }}" autocomplete="email">
			</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
			<div class=" @error('password') field_with_errors @enderror ">			
			    <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">
			</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation') }}</label>

                    <div class="col-md-6">
			<div class=" @error('password') field_with_errors @enderror ">
				    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
			</div>
		    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <input type="submit" class="btn btn-primary" value="{{ __('Save changes') }}">
                    </div>
                </div>
            </form>
	    <div class="gravatar_edit">
		{{ Helper::gravatarFor($user) }}
		<a href="http://gravatar.com/emails" target="_blank">change</a>
	    </div>
	    

        </div>
    </div>
</div>
@endsection
