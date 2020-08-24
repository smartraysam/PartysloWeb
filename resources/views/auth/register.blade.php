@extends('layouts.app')
@section('title', 'Partyslo / Register')
@section('content')
    <main class="register-mp">
        <div class="main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="login-register-bg">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6">
                                            <div class="lg-left">
                                                <div class="lg-logo">
                                                    <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto"
                                                        style=" position: relative; color: white;  
                                                        text-shadow: 2px 2px gray; font-family:  Arial, Helvetica, sans-serif;  font-weight: bold; font-size: 20px;"
                                                        href="/"><img style="margin-right:8px; margin-bottom:5px"
                                                            src="images/app.png" alt="">Partyslo</a>

                                                </div>
                                                <div class="lr-text">
                                                    <h2>Register Now</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                        interdum
                                                        blandit felis
                                                        a hendrerit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="lr-right">
                                                <h4>Sign Up to Partyslo</h4>
                                                <div class="login-register-form">
                                                    <form method="POST" action="{{ route('register') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input
                                                                class="title-discussion-input @error('name') is-invalid @enderror"
                                                                type="text" placeholder="Full Name" name="name"
                                                                value="{{ old('name') }}" required autocomplete="name"
                                                                autofocus>
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input
                                                                class="title-discussion-input  @error('email') is-invalid @enderror"
                                                                type="email" name="email" value="{{ old('email') }}"
                                                                required autocomplete="email" placeholder="Email Address">

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input
                                                                class="title-discussion-input @error('password') is-invalid @enderror "
                                                                type="password" placeholder="Password" name="password"
                                                                required autocomplete="new-password">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <input id="password-confirm"
                                                                class="title-discussion-input @error('password') is-invalid @enderror "
                                                                type="password" placeholder="Password confirmation"
                                                                name="password_confirmation" required
                                                                autocomplete="new-password">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="rgstr-dt-txt">
                                                            By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a
                                                                href="#">Data
                                                                Policy</a> and <a href="#">Cookie Policy</a>. You may
                                                            receive Email
                                                            notifications from us and can opt out at any time.
                                                        </div>
                                                        <button class="login-btn" type="submit"> {{ __('Register') }}
                                                            Now</button>
                                                        <div class="login-link">If you have an account? <a
                                                                href="/login">Login
                                                                Now</a></div>

                                                    </form>


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
