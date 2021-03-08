@extends('layouts.master')
@section('content')
    <!--================================
            START LOGIN AREA
    =================================-->
    <!-- <script>
    function generate() {

        var a = parseInt(document.getElementById("nochapter").value);
        var ch = document.getElementById("ch");

        for (i = 0; i < a; i++) {
            var input = document.createElement("input");
            ch.appendChild(input);
        }
    }
    </script> -->

    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="#">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome to Brocket</h3>
                                <p> Brocket</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="turnamenName">Tournament Name</label>
                                    <input id="turnamenName" type="text" class="text_field" placeholder="Enter your Tournament Name">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Email</label>
                                    <input id="pass" type="text" class="text_field" placeholder="Enter your Email">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Number of Team</label>
                                    <input id="pass" type="text" class="text_field" placeholder="Enter your Email">
                                </div>

                                <button class="btn btn--md btn--round" type="submit">Login Now</button>

                                <div class="form-group">
                                    <label for="pass"></label>
                                    <input id="pass" type="text" class="text_field" placeholder="Enter your Email">
                                </div>

                                <button class="btn btn--md btn--round" type="submit">Generate my turnamen</button>

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