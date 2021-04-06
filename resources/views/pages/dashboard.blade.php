@extends('layouts.master')
@section('content')
<!--================================
    START FEATURED PRODUCT AREA
=================================-->
    <section class="featured-products bgcolor  section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area ">
                        <div class="product__title">
                            <h2>Tournament List</h2>
                        </div>

                        <div class="product__slider-nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>

        <!-- start .featured-product-slider -->



        <div class="container">
            <div class="row">
                <div class="col-md-12 no0-padding">
                    <div class="featured-product-slider prod-slider1">
                    @foreach ($turney as $turnamen)
                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images/featprod.jpg" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="/bracket/{{$turnamen->id}}" class="transparent btn--sm btn--round">More Info</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="/bracket/{{$turnamen->id}}" class="product_title">
                                        <h4 >{{$turnamen->name}}</h4>
                                    </a>

                                    <p>{{$turnamen->description}}</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>{{$turnamen->date_start}} - {{$turnamen->date_end}}</span>
                                        </div>                                        
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->
                    @endforeach
                    </div>
                </div>
            </div>
            <!-- end /.featured__preview-img -->
        </div>
        <!-- end /.featured-product-slider -->
    </section>
    <!--================================
    END FEATURED PRODUCT AREA
=================================-->
@stop