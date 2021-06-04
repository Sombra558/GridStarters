@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="card-reset">
                <div class="card-reset-title">
                        <h2>Recover your password</h2>
                        <p>Enter your email. We will send you a link to recover your password</p>
                    </div>
                <div class="card-body-reset">
                    
                    
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row stilashon">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" style="background: #2f019b00;color:black; box-shadow:none; border:none;"  placeholder="Enter your email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div style="padding:0px;" class="col-md-12">
                                <button type="submit" class="btn-login">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
