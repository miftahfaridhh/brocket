@extends('layouts.master')
@section('content')

    <!--================================
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                <x-jet-validation-errors class="mb-4" />
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome Back</h3>
                                <p>You can sign in with your Email</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="email" value="{{ __('Email') }}">Email</label>
                                    <input id="email" class="text_field" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your username...">
                                </div>

                                <div class="form-group">
                                    <label for="password" value="{{ __('Password') }}">Password</label>
                                    <input id="password" class="text_field" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password...">
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="remember_me" name="remember">
                                        <label for="remember_me">
                                            <span class="shadow_checkbox"></span>
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn--md btn--round" type="submit">Login Now</button>

                                <div class="login_assist">
                                    <p class="recover">Lost your
                                        <a href="{{ route('password.request') }}">username</a> or
                                        <a href="{{ route('password.request') }}">password</a>?</p>
                                    <p class="signup">Don't have an
                                        <a href="/register">account</a>?</p>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->

@stop