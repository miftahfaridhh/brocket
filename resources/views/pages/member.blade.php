@extends('layouts.master')
@section('content')
<!--================================
        START CREATE AREA
=================================-->

<section class="section--padding2 bgimage">
    <div class="bg_image_holder">
        <img src="{{ asset('images/Background.png') }}" alt="background-image" style="background-size: 100% 100%;">
    </div>
    <!-- start hero-content -->
    <div class="content_above">
        <!-- start .contact_wrapper -->
        <div class="content-wrapper">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form method="POST" action="/editbracket">
                            @csrf
                            <div class="section-title">
                                <h1>Welcome to
                                    <span class="highlighted">Brocket!</span>
                                </h1>
                            </div>

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="name">Tournament Name</label>
                                    <input id="name" name="name" readonly type="text" placeholder="{{$turney[0]->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Click Tournament Member To Edit</label>
                                @foreach ($members as $member)
                                    <div class="col-md-6">
                                        <a href="/bracket/edit/{{$member->name}}"> {{$member->name}} </a>
                                    </div>
                                @endforeach
                                </div>
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