@extends('layouts.app')
@section('title', 'Partyslo / Login')
@section('content')
    <main class="register-mp">
        <div class="main-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="login-register-bg">
                                    <div class="row no-gutters" style="margin-bottom: 15px">
                                        <div class="col-lg-6">
                                            <div class="lg-left">
                                                <div class="lg-logo">
                                                    <a href="/"><img src="images/login-register/logo.svg"
                                                            alt=""></a>
                                                </div>
                                                <div class="lr-text">
                                                    <h2>Login Now</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                        interdum blandit felis a hendrerit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="lr-right">
                                                <div class="social-logins">
                                                    <button class="social-f-btn"><i class="fab fa-facebook-f"></i>Continue
                                                        with facebook</button>
                                                    <button class="social-g-btn"><i class="fab fa-google"></i>Continue with
                                                        Google</button>
                                                </div>
                                                <div class="or">Or</div>
                                                <div class="login-register-form">
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input
                                                                class="title-discussion-input @error('email') is-invalid @enderror"
                                                                type="email" placeholder="Type Email or Phone Number"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email" autofocus>
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input
                                                                class="title-discussion-input @error('password') is-invalid @enderror"
                                                                type="password" placeholder="Password" name="password"
                                                                required autocomplete="current-password">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <button class="login-btn" type="submit">Login Now</button>
                                                    </form>

                                                    @if (Route::has('password.request'))
                                                        <a class="forgot-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                    <div class="regstr-link">Don’t have an account? <a
                                                            href="/register">Register Now</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
