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

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Member Name</label>
                                <div class="col-sm-10">
                                <input type="text" readonly name="name" class="form-control-plaintext" id="staticEmail" value="{{$members[0]->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gold" class="col-sm-2 col-form-label">Gold Medal</label>
                                <div class="col-sm-10">
                                <input type="number" name="gold_medal" class="form-control" id="gold" placeholder="Input Gold Medal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="silver" class="col-sm-2 col-form-label">Silver Medal</label>
                                <div class="col-sm-10">
                                <input type="number" name="silver_medal" class="form-control" id="silver" placeholder="Input Silver Medal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bronze" class="col-sm-2 col-form-label">Bronze Medal</label>
                                <div class="col-sm-10">
                                <input type="number" name="bronze_medal" class="form-control" id="bronze" placeholder="Input Bronze Medal">
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