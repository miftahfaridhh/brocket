@extends('layouts.master')
@section('content')
<!--================================
        START CREATE AREA
=================================-->

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
                        <form method="POST" action="/editbracket">
                            @csrf
                            <div class="section-title">
                                <h1>Welcome to
                                    <span class="highlighted">Brocket!</span>
                                </h1>
                            </div>


                            <div class="login--form">
                                <div class="form-group">
                                    <h5 href="/bracket/edit/{{$members[0]->name}}">{{$members[0]->name}}</h5>
                                    <label for="name">{{$members[0]->name}}</label>
                                    <input id="name" name="name" type="hidden" value="{{$members[0]->name}}" >
                                    <input id="name" name="gold_medal" type="number" placeholder="{{$members[0]->gold_medal}}" >
                                    <input id="name" name="silver_medal" type="number" placeholder="{{$members[0]->silver_medal}}" >
                                    <input id="name" name="bronze_medal" type="number" placeholder="{{$members[0]->bronze_medal}}" >
                                
                                </div>
                            </div>

                            <button class="btn btn--md btn--round" type="submit">Update</button>  

                                
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