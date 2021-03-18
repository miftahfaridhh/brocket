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
                        <form method="POST" action="/generatebracket">
                            @csrf
                            <div class="section-title col-lg-6">
                                <img src="images/Group 77.png" alt="title-image" style="background-size: 100% 100%;">
                            </div>

                            <div class="form-group col-lg-6">
                                <input type="hidden" name="turnamen_id" value="{{ $turnamen->id }}">
                                <input type="hidden" name="total_member" value="{{ $turnamen->total_member }}">
                                <label for="name">Input Your Team Name</label>
                                @for ($i = 0; $i < ($turnamen->total_member); $i++)
                                <input id="name" name="member_name[]" type="text" placeholder="Enter your team name">
                                @endfor
                            </div>
                            <button class="btn btn--md btn--round" type="submit">Generate My Tournament</button>                            

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