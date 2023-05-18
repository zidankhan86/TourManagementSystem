@extends('frontend.master')

@section('main')

<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="{{url ('/frontend/assets/img/hero/h1_hero.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <h1>Find your <span>Next tour!</span> </h1>
                                <p>Where would you like to go?</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- form -->
                            <form action="#" class="search-box">
                                <div class="input-form mb-30">
                                    <input type="text" placeholder="When Would you like to go ?">
                                </div>
                                <div class="select-form mb-30">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">When</option>
                                            <option value="">Services-1</option>
                                            <option value="">Services-2</option>
                                            <option value="">Services-3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form mb-30">
                                    <a href="#">Search</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services servic-padding">
        <div class="container">
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5>8000+ Our Local<br>Guides</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="services-cap">
                            <h5>100% Trusted Tour<br>Agency</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-experience"></span>
                        </div>
                        <div class="services-cap">
                            <h5>28+ Years of Travel<br>Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-good"></span>
                        </div>
                        <div class="services-cap">
                            <h5>98% Our Travelers<br>are Happy</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Our Services End -->
    <!-- Favourite Places Start -->
    <div class="favourite-place place-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED TOURS Packages</span>
                        <h2>Favourite Places</h2>
                    </div>
                </div>
            </div>
            <div class="row">


                @foreach ($tours as $tour)


                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-place mb-30">
                        <div class="place-img">
                            <img src="{{url ('/uploads/uploads/'.$tour->image) }}" alt="">
                        </div>
                        <div class="place-cap">
                            <div class="place-cap-top">
                                <h3><a href="#">{{ $tour->tittle }}</a></h3>
                                <p class="dolor">{{ $tour->price }} <span> TK/ Per Person</span></p>
                            </div>
                            <div class="place-cap-bottom">
                                <ul>
                                    <li><i class="far fa-clock"></i>{{ $tour->duration }} Days</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $tour->location }}</li>
                                </ul>
                            </div>
                        </div>
                        <a href="">View Details</a>
                    </div>
                </div>


                @endforeach

            </div>
        </div>
    </div>
    <!-- Favourite Places End -->
    <!-- Video Start Arera -->
    <div class="video-area video-bg pt-200 pb-200"  data-background="{{url ('frontend/assets/img/service/video-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-caption text-center">
                        <div class="">

                        </div>
                        <p class="pera1">Love where you're going in the perfect time</p>
                        <p class="pera2">Tripo is a World Leading Online</p>
                        <p class="pera3"> Tour Booking Platform</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Start End -->
    <!-- Support Company Start-->
    <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img mb-50">
                        <img src="{{url('frontend/assets/img/service/support-img.jpg') }}" alt="">
                        <div class="support-img-cap">
                            <span>Since 1992</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>About Our Company</span>
                            <h2>We are Go Trip <br>Ravels Support Company</h2>
                        </div>
                        <div class="support-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            <div class="select-suport-items">
                                <label class="single-items">Lorem ipsum dolor sit amet
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Consectetur adipisicing sed do
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Eiusmod tempor incididunt
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="single-items">Ad minim veniam, quis nostrud.
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <a href="#" class="btn border-btn">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
    <!-- Testimonial Start -->
    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding" data-background="{{url ('/frontend/assets/img/testmonial/testimonial_bg.jpg') }}">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="{{url ('frontend/assets/img/icon/testimonial.png') }}" alt="">
                                    <p>Logisti Group is a representative logistics operator providing full range of ser
                                        of customs clearance and transportation worl.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{url ('frontend/assets/img/testmonial/Homepage_testi.png') }}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Co Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="{{url ('frontend/assets/img/icon/testimonial.png') }}" alt="">
                                    <p>Logisti Group is a representative logistics operator providing full range of ser
                                        of customs clearance and transportation worl.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{url ('frontend/assets/img/testmonial/Homepage_testi.png') }}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Co Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Blog Area Start -->
    <div class="home-blog-area section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Our Recent news</span>
                        <h2>Tourist Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">


               <div class="home-blog-area section-padding2">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Our Recent Package</span>
                    <h2> Tour Support Package</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($tourSupport as $tour)


            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="{{url ('/uploads/uploads',$tour->image) }}" alt="">
                        </div>
                        <div class="blog-cap">
                            <p>{{ $tour->tittle }}</p>
                            <p>Vehicle :{{$tour->location_for}}</p>
                            <p>Location {{$tour->location_for}}</p>
                            <p>Fee: {{ $tour->price }} BDT /Hour</p>
                            <a href="#" class="more-btn">Read more »</a>
                        </div>
                    </div>
                    <div class="blog-date text-center">
                        <a href="">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>

            </div>
        </div>
    </div>
    <!-- Blog Area End -->

</main>

@endsection
