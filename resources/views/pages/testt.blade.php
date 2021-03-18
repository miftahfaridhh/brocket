@extends('layouts.master')
@section('content')
<!--================================
            START LOGIN AREA
    =================================-->
    <script>
    function generate() {

        var a = parseInt(document.getElementById("totalMember").value);
        var ch = document.getElementById("ch");

        for (i = 0; i < a; i++) {
            var input = document.createElement("input");
            input.type= "text";
            input.class= "text_field";
            input.name= "clubName";
            ch.appendChild(input);
        }
    }
    </script>

    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="POST" action="/generateBracket">
                        @csrf
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome to Brocket</h3>
                                <p> Brocket</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="turnamenName">Tournament Name</label>
                                    <input id="turnamenName" name = "turnamenName" type="text" class="text_field" placeholder="Enter your Tournament Name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" name = "email" class="text_field" placeholder="Enter your Email">
                                </div>

                                <div>
                                    <label for="totalMember">Number Of Team</label>
                                    <input type="number" class="text_field" name = "totalMember" id="totalMember" placeholder="Enter Number Of Team"/>
                                    <p>  </p>
                                    <input class="btn btn--md btn--round" type="button" value="Click To Add Team Name" onclick="generate()" />
                                    <p>  </p>
                                    <div id="ch"></div>
                                    <p>  </p>
                                </div>

                                <!-- <form action="/generateBracket" method="post">
                                    @csrf
                                        <input type="hidden" id="turnamenName" name = "turnamenName">
                                        <input type="hidden" id="email" name = "email">
                                        <input type="hidden" name = "totalMember" id="totalMember">
                                        <input class="btn btn--md btn--round" type="submit" value="Generate bracket">
                                </form> -->

                                <button class="btn btn--md btn--round" type="submit">generate my turnamen</button>

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