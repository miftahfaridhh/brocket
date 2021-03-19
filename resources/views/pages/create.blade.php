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
        <img src="images/Background.png" alt="background-image" style="width:1920px">
    </div>
    <!-- start hero-content -->
    <div class="content_above">
        <!-- start .contact_wrapper -->
        <div class="content-wrapper">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form method="POST" action="/storeturnamen">
                            @csrf
                            <div class="section-title">
                                <h1>Welcome to
                                    <span class="highlighted">Brocket!</span>
                                </h1>
                            </div>

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="name">Tournament Name</label>
                                    <input id="name" name="name" type="text" placeholder="Enter your Tournament Name">
                                </div>

                                <div class="form-group">
                                    <label for="total_member">Number Of Team</label>
                                    <input type="number" class="text" name="total_member" id="total_member" placeholder="Enter Number Of Team" />
                                </div>

                                <div class="login--form row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date_start">Date Start</label>
                                            <div class="input_with_icon">
                                                <input id="date_start" name="date_start"type="text" class="dattaPikkara" placeholder="From">
                                                <span class="lnr lnr-calendar-full"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date_end">Date End</label>
                                            <div class="input_with_icon">
                                                <input id="date_end" name="date_end"type="text" class="dattaPikkara" placeholder="To">
                                                <span class="lnr lnr-calendar-full"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea type="text" cols="10" rows="5" class="text" name="description" id="description" placeholder="Input Turnamen Description"></textarea>
                                </div>

                                <button class="btn btn--md btn--round" type="submit">Input Team Name</button>

                                <!-- <div class="hero__btn-area">
                                    <a href="/addteam" class="btn btn--md btn--round">Input Team Name</a>
                                </div> -->
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