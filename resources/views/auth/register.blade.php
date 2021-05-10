@extends('layouts.app')

@section('content')
<div class="fondo-movil-register">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-8 offset-md-2 col-lg-4 offset-lg-1 flexi-login">
            <div class="card-register">
                <div class="card-login-title">
                        <h2>Sign in for free!</h2>
                </div>
                <div class="card-body-login">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row stilashon">
                            <label for="name" class="col-md-12 col-form-label">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input placeholder="Enter your name" id="name" style="background: #2f019b00;color:black; box-shadow:none; border:none;" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row stilashon">
                            <label for="email" class="col-md-12 col-form-label">Email</label>

                            <div class="col-md-12">
                                <input placeholder="Enter your email" id="email" style="background: #2f019b00;color:black; box-shadow:none; border:none;"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row stilashon">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input placeholder="Enter your password" style="background: #2f019b00;color:black; box-shadow:none; border:none;"  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row stilashon">
                            <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input placeholder="Confirm your password" style="background: #2f019b00;color:black; box-shadow:none; border:none;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                                 <div  style="padding:0px;" class="col-md-12">
                                        <button type="submit" class="btn-login">
                                                Sign up
                                        </button>
                                </div>
                        </div>
                        <div class="col-md-12 row">
                                <div class="col-5">
                                    <hr>
                                </div>
                                <p class="col-2 text-center">or</p>
                                <div class="col-5">
                                    <hr>
                                </div>
                        </div>
                        <div class="form-group row mb-0">
                                <div style="padding:0px;" class="col-md-12">
                                        <button type="button" class="btn-register">
                                                Sign in
                                        </button>
                                </div>
                                
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-1 img-decoration-register">
            
            <img class="cohete-login" src="/img/cohete-grip.png" alt="cohete-login">
        </div>
    </div>
</div>
</div>
@endsection
