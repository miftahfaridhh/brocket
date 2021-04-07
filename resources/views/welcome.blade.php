@extends('layouts.master')
@section('content')
<!--================================
    START HERO AREA
=================================-->
<section class="hero-area bgimage">
    <div class="bg_image_holder">
        <img src="images/hero_area_bg.jpg" alt="background-image" style="height:745px;">
    </div>
    <!-- start hero-content -->
    <div class="hero-content content_above">
        <!-- start .contact_wrapper -->
        <div class="content-wrapper">
            <!-- start .container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        <div class="hero__content__title">
                            <h1>
                                <span class="light">Create and Manage</span>
                                <span class="bold">Your Own Competition</span>
                            </h1>
                            <p class="tagline">Brocket is made to improve the process of making a tournament format more Easier, Effective, & Efficient</p>
                        </div>

                        <!-- start .hero__btn-area-->
                        <div class="hero__btn-area">
                            <a href="/login" class="btn btn--round btn--lg">Get Started</a>
                        </div>
                        <!-- end .hero__btn-area-->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end .contact_wrapper -->
    </div>
    <!-- end hero-content -->
</section>
<!--================================
    END HERO AREA
=================================-->

<!--================================
    START FEATURE AREA
=================================-->
<section class="features section--padding">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="images/feature-build.png" alt="feature" style="height:120px;">
                    </div>
                    <div class="feature__title">
                        <h3>Build</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Make a bracket and choose the type of elimination system.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="images/feature-manage.png" alt="feature" style="height:120px;">
                    </div>
                    <div class="feature__title">
                        <h3>Manage</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Edit and see the current match of the competition.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="images/feature-share.png" alt="feature" style="height:120px;">
                    </div>
                    <div class="feature__title">
                        <h3>Share</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Download and share the bracket to the team easily.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
    END FEATURE AREA
=================================-->


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
                                <img src="images/featprod.png" alt="Featured products">
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

<!--================================
    START SELL BUY
=================================-->
<section class="proposal-area">

    <!-- start container-fluid -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 no-padding">
                <div class="proposal proposal--left bgimage">
                    <div class="bg_image_holder">
                        <img src="images/bbg.png" alt="prop image">
                    </div>
                    <div class="content_above">
                        <div class="proposal__icon ">
                            <img src="images/buy.png" alt="Buy icon">
                        </div>
                        <div class="proposal__content ">
                            <h1 class="text--white">Sell Your Products</h1>
                            <p class="text--white">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diamcongue is laoreet elit metus.</p>
                        </div>
                        <a href="#" class="btn--round btn btn--lg btn--white">Become an Author</a>
                    </div>
                </div>
                <!-- end /.proposal -->
            </div>

            <div class="col-md-6 no-padding">
                <div class="proposal proposal--right">
                    <div class="bg_image_holder">
                        <img src="images/sbg.png" alt="this is magic">
                    </div>
                    <div class="content_above">
                        <div class="proposal__icon">
                            <img src="images/sell.png" alt="Sell icon">
                        </div>
                        <div class="proposal__content ">
                            <h1 class="text--white">Start Shopping Today</h1>
                            <p class="text--white">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diamcongue is laoreet elit metus.</p>
                        </div>
                        <a href="#" class="btn--round btn btn--lg btn--white">Start Shopping</a>
                    </div>
                </div>
                <!-- end /.proposal -->
            </div>
        </div>
    </div>
    <!-- start container-fluid -->
</section>
<!--================================
    END SELL BUY
=================================-->

<!--================================
    START TESTIMONIAL
=================================-->
<section class="testimonial-area section--padding bg-light">
    <!-- start .container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Our Clients
                        <span class="highlighted">Feedback</span>
                    </h1>
                    <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
                        est laborum dolo rumes fugats untras.</p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="testimonial-slider">
                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/test1.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">Tubeda Pagla</h4>
                                <span class="desig">Product Designer</span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/test2.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">Tarashi Hamada</h4>
                                <span class="desig">Quality Ninja</span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/test1.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">Tubeda Pagla</h4>
                                <span class="desig">Product Designer</span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/test2.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">Tarashi Hamada</h4>
                                <span class="desig">Quality Ninja</span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->
                </div>
                <!-- end /.testimonial_slider -->

                <div class="all-testimonial">
                    <a href="testimonial.html" class="btn btn--lg btn--round">View All Reviews</a>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end container -->
</section>
<!--================================
    END TESTIMONIAL
=================================-->

<!--================================
    START SPECIAL FEATURES AREA
=================================-->
<section class="special-feature-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="special-feature feature--1">
                    <img src="images/spf1.png" alt="Special Feature image">
                    <h3 class="special__feature-title">30 Days Money Back
                        <span class="highlight">Guarantee</span>
                    </h3>
                </div>
            </div>
            <!-- end /.col-md-6 -->
            <div class="col-md-6">
                <div class="special-feature feature--2">
                    <img src="images/spf2.png" alt="Special Feature image">
                    <h3 class="special__feature-title">Fast and Friendly
                        <span class="highlight">Support</span>
                    </h3>
                </div>
            </div>
            <!-- end /.col-md-6 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
    END SPECIAL FEATURES AREA
=================================-->

<!--================================
    START CALL TO ACTION AREA
=================================-->
<section class="call-to-action bgimage">
    <div class="bg_image_holder">
        <img src="images/calltobg.jpg" alt="">
    </div>
    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-wrap">
                    <h1 class="text--white">Ready to Join Our Marketplace!</h1>
                    <h4 class="text--white">Over 25,000 designers and developers trust the MartPlace.</h4>
                    <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================
    END CALL TO ACTION AREA
=================================-->
@stop