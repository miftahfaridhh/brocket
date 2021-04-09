@extends('layouts.master')
@section('content')
<!--================================
        START CREATE AREA
=================================-->

<section class="section--padding2 bgimage">
    <div class="bg_image_holder">
        <img src="{{ asset('images/Background.png') }}" alt="background-image" style="width:1920px">
    </div>
    <!-- start hero-content -->
    <div class="content_above">
        <!-- start .contact_wrapper -->
        <div class="content-wrapper">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="{{ url('/editbracket') }}">
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
                                    <label for="total_member">Total Participants</label>
                                    <select type="number" class="form-control" name="total_member" id="total_member" placeholder="Enter Number Of Team">
                                        <option>4</option>
                                        <option>8</option>
                                        <option>16</option>
                                        <option>32</option>
                                    </select>
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