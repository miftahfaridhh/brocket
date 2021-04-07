@extends('layouts.master')
@section('content')

    <!--================================
        START AFFILIATE AREA
    =================================-->
    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session('statussending'))
                        <div class="alert alert-success">
                            {{ session('statussending') }}
                        </div>
                    @endif
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1>Any
                                    <span class="highlighted">Questions?</span>
                                </h1>
                                <p>Feel free to leave us a message if you have any question or feedback.</p>
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-map-marker"></span>
                                <h4 class="tiles__title">MediMedi</h4>
                                <div class="tiles__content">
                                    <p>Jalan mana belum fix, Depok, Jawa Barat kodepos</p>
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-lg-4 col-md-6 -->

                        <div class="col-lg-4 col-md-6">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-phone"></span>
                                <h4 class="tiles__title">Phone Number</h4>
                                <div class="tiles__content">
                                    <p>+62812 xxxx xxxx</p>
                                    <p>+62812 xxxx xxxx</p>
                                </div>
                            </div>
                            <!-- end /.contact_tile -->
                        </div>
                        <!-- end /.col-lg-4 col-md-6 -->

                        <div class="col-lg-4 col-md-6">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-inbox"></span>
                                <h4 class="tiles__title">Email</h4>
                                <div class="tiles__content">
                                    <p>email@kantor.com</p>
                                    <p>email@kantor.com</p>
                                </div>
                            </div>
                            <!-- end /.contact_tile -->
                        </div>
                        <!-- end /.col-lg-4 col-md-6 -->

                        <div class="col-md-12">
                            <div class="contact_form cardify">
                                <div class="contact_form__title">
                                    <h3>Leave Your Message</h3>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="contact_form--wrapper">
                                            <form action="/sentemail"  method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="name" placeholder="Name" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" name="email" placeholder="Email">
                                                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-15">
                                                    <div class="form-group">
                                                        <input type="text" name="subject" placeholder="Subject" required>
                                                    </div>
                                                </div>

                                                <textarea cols="30" rows="10" name="message" placeholder="Yout text here" required></textarea>

                                                <div class="sub_btn">
                                                    <button type="submit" class="btn btn--round btn--default">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-8 -->
                                </div>
                                <!-- end /.row -->
                            </div>
                            <!-- end /.contact_form -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START
    =================================-->
    <div id="map"></div>
    <!-- end /.map -->
    <!--================================
            END FAQ AREA
    =================================-->

@stop