@extends('layouts.default')

@section('content')

<!-- landing section -->
<section id="landing">

    <div class="row">

        <div class="col-md-12">

            <div class="row"> <!-- carousel row -->

                <div class="col-md-5 mx-auto position-middle">

                    <div id="landingCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#landingCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#landingCarousel" data-slide-to="1"></li>
                            <li data-target="#landingCarousel" data-slide-to="2"></li>
                            <li data-target="#landingCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3>Branding &amp; Logo design</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3>Web design &amp; Development</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3>SEO Optimization &amp; Counseling</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h3>Social Media Managing</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- carousel row end -->

            <div class="row extra-padding-25"> <!-- navigation row start -->
                
                <div class="col-md-9 mx-auto position-middle-30">

                    <ul class="landing-nav">

                        <li>
                            <a href="#" class="nav-link">Branding &amp; Logo</a>
                        </li>

                        <li>
                            <a href="#" class="nav-link">Web Design &amp; Development</a>
                        </li>

                        <li>
                            <a href="#" class="nav-link">SEO Optimization</a>
                        </li>

                        <li>
                            <a href="#" class="nav-link">Social Media Managing</a>
                        </li>
                        
                    </ul>

                </div>

            </div> <!-- navigation row end -->
        </div>

    </div>

</section>

<!-- services section -->
<section id="services">

    <div class="row">

        <div class="col-md-12">

            <h3>Services</h3>
        </div>

    </div>

</section>

@endsection

@section('customscripts')
<script src="{{asset('js/landingJs.js')}}"></script>
@endsection