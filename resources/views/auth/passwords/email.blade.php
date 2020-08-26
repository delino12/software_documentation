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
                    <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </header><!-- /.header -->
@endsection
