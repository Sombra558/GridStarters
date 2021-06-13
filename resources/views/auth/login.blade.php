@extends('layouts.app')

@section('content')
<div class="fondo-movil">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-8 offset-md-2 col-lg-4 offset-lg-1 flexi-login">
            <div class="card-login">
                <div class="card-login-title">
                    <h2>Sign in for free!</h2>
                </div>
                <div class="card-body-login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row stilashon">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input  style="background: #2f019b00;color:black; box-shadow:none; border:none;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row stilashon">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12 ">
                                <input placeholder="Enter your password" style="background: #2f019b00;color:black; box-shadow:none; border:none;" id="password" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                             
                                        @if (Route::has('password.request'))
                                            <a class="forgot col-md-12 text-right" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                
                                <div class="col-md-12">
                                        <button type="submit" class="btn-login">
                                                Sign in
                                        </button>
                                </div>
                                
                        </div>
                        <div class="form-group row mb-0">
                          
                                
                                       <a class="text-center col-md-12 registernow" href="/register">Register? Click here</a>
                                
                                
                        </div>
                    </form>
               
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-8 offset-md-2 col-lg-5 offset-lg-1 img-decoration-login">
            
            <img class="cohete-login" src="/img/cohete-login.png" alt="cohete-login">
        </div>
      
    </div>
</div>
</div>
@endsection
