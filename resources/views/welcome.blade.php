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

    <div class="row extra-padding-25">

        <div class="col-md-12">

            <h3 class="text-center">Services</h3>

            <div class="row position-middle-15"><!-- sub row start -->

                <div class="col-md-3 mx-auto text-center bbd-tab" id="tab-one">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/branding_bkg_1.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Branding &amp; Logo</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mx-auto text-center bbd-tab" id="tab-two">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/design_bkg.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title" id="header-tab-two">Web Design &amp; Development</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mx-auto text-center bbd-tab" id="tab-three">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/seo_bkg.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">SEO Optimization</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mx-auto text-center bbd-tab" id="tab-four">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/social_bkg.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">Social Media Managing</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center extra-padding-50">

                    <h5 class="text-center font-italic">We prefer personalized and excellent client experience</h5>
                </div>

            </div><!-- sub row end -->
        </div>

    </div>

</section>

<section id="skills">

    <div class="row"> <!-- top row start -->
        
        <div class="col-md-2 vh-40 bkg-blue-0">

        </div>
    
        <div class="col-md-2 bkg-blue-1">

        </div>

        <div class="col-md-2 bkg-blue-2">

        </div>

        <div class="col-md-2 bkg-blue-3">

        </div>

        <div class="col-md-2 bkg-blue-4">

        </div>

        <div class="col-md-2 bkg-blue-5">

        </div>

    </div> <!-- top row end -->

    <div class="row"> <!-- middle row start -->
        <div class="col-md-12 vh-20">
            <p class="text-center my-5">I am a placeholder text will be changed accordingly</p>
        </div>
    </div> <!-- middle row end -->

    <div class="row"> <!-- bottom row start -->
        
        <div class="col-md-2 vh-40 bkg-blue-0">
            
        </div>
    
        <div class="col-md-2 bkg-blue-1">
            
        </div>

        <div class="col-md-2 bkg-blue-2">
            
        </div>

        <div class="col-md-2 bkg-blue-3">
            
        </div>

        <div class="col-md-2 bkg-blue-4">
           
        </div>

        <div class="col-md-2 bkg-blue-5">
            
        </div>

    </div> <!-- bottom row end -->
</section>

@endsection

@section('customscripts')
<script src="{{asset('js/landingJs.js')}}"></script>

@endsection