@extends('layouts.master')
@section('content')
    <!--================================
            START SIGNUP AREA
    =================================-->
    <section class="signup_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>Create Your Account</h3>
                                <p>Please fill the following fields with appropriate information to register a new MartPlace
                                    account.
                                </p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">

                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input id="name" name="name" type="text" class="text_field" placeholder="Enter your Name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input id="email" name="email" type="email" class="text_field" placeholder="Enter your email address">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" name="password" type="password" class="text_field" placeholder="Enter your password...">
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input id="password_confirmation" name="password_confirmation" type="password" class="text_field" placeholder="Confirm password">
                                </div>

                                <button class="btn btn--md btn--round register_btn" type="submit">Register Now</button>

                                <div class="login_assist">
                                    <p>Already have an account?
                                        <a href="/login">Login</a>
                                    </p>
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
            END SIGNUP AREA
    =================================-->
@stop