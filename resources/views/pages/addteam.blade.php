@extends('layouts.master')
@section('content')
<!--================================
        START CREATE AREA
=================================-->
<script>
    function generate() {

        var a = parseInt(document.getElementById("totalMember").value);
        var ch = document.getElementById("ch");

        for (i = 0; i < a; i++) {
            var input = document.createElement("input");
            input.type = "text";
            input.class = "text_field";
            input.name = "namaTim" + (i + 1);
            ch.appendChild(input);
        }
    }
</script>

<section class="section--padding2 bgimage">
    <div class="bg_image_holder">
        <img src="images/Background.png" alt="background-image" style="background-size: 100% 100%;">
    </div>
    <!-- start hero-content -->
    <div class="content_above">
        <!-- start .contact_wrapper -->
        <div class="content-wrapper">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="/generateBracket">
                            @csrf
                            <div class="section-title col-lg-6">
                                <img src="images/Group 77.png" alt="title-image" style="background-size: 100% 100%;">
                                <!-- <h1>Welcome to
                                    <span class="highlighted">Brocket!</span>
                                </h1> -->
                            </div>

                            <div class="login--form col-lg-6 text-center">
                                <form>
                                    <div class="text-center">
                                        <label for="totalMember">Number Of Team</label>
                                    </div>
                                    <input type="number" name="totalMember" id="totalMember" placeholder="Enter Number Of Team" />
                                    <p> </p>
                                    <input class="btn btn--md btn--round" type="button" value="Click To Add Team Name" onclick="generate()" />
                                    <p> </p>
                                    <div id="ch"></div>
                                    <p> </p>
                                </form>

                                <!-- <form action="/generateBracket" method="post">
                                    @csrf
                                        <input type="hidden" id="turnamenName" name = "turnamenName">
                                        <input type="hidden" id="email" name = "email">
                                        <input type="hidden" name = "totalMember" id="totalMember">
                                        <input class="btn btn--md btn--round" type="submit" value="Generate bracket">
                                </form> -->

                                <button class="btn btn--md btn--round" type="submit">Generate My Tournament</button>
                            </div>
                        </form>
                    </div>
                    <!-- end .col-md-6 -->
                </div>
                <!-- end .row -->
            </div>
            <!-- end .container -->
        </div>
        <!-- end .contact_wrapper -->
    </div>
    <!-- end hero-content -->
</section>
<!--================================
        END CREATE AREA
=================================-->
@stop