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
                        <form action="{{route('user.search')}}" class="search-box">
                            <div class="input-form mb-30">
                                <input name="search_key" type="text" placeholder="When Would you like to go ?">
                            </div>

                            <div class="search-form mb-30">
                                <button type="submit" class="btn btn-success">Search</button>
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
                        <h5>1+ Years of Travel<br>Experience</h5>
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
