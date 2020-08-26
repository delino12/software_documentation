@extends('layouts.main')

@section('title')
    Software Documentation 
@endsection

@section('contents')
    <!-- Header -->
    <header class="header" style="background-image: linear-gradient(135deg, #f9f7ff 0%, #fff 50%, #f6f3ff 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h1>Get back your account</h1>
                    <p class="lead mt-5 mb-8">Thinking about having an online documentation or support system for your startup? Cavidel Software Documentation have everythings you need to develop your own help center.</p>
                    
                </div>

                <div class="col-lg-8 ml-auto d-none d-lg-block">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
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
    </header><!-- /.header -->
@endsection
