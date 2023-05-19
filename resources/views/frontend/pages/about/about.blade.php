@extends('frontend.master')

@section('main')

<!-- Support Company Start-->
<div class="support-company-area support-padding fix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="support-location-img mb-50">
                    <img src="{{url('frontend/assets/img/service/support-img.jpg') }}" alt="">
                    <div class="support-img-cap">
                        <span>Since 2023</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="right-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2">
                        <span>About Our Company</span>
                        <h2>" MyTrip,where we turn your travel dreams<br>  into extraordinary experiences, creating memories that last a lifetime"</h2>
                    </div>
                    <div class="support-caption">
                        <p>At MyTrip, we believe that every journey is a story waiting to be told.Let us be your trusted companion as we curate remarkable travel experiences tailored to your wanderlust</p>
                        <div class="select-suport-items">
                            <label class="single-items">Travel opens up a world of possibilities
                                <input type="checkbox" checked="checked active">
                                <span class="checkmark"></span>
                            </label>
                            <label class="single-items">Travel is the ultimate teacher,
                                <input type="checkbox" checked="checked active">
                                <span class="checkmark"></span>
                            </label>
                            <label class="single-items">Whether you're a thrill-seeker
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

@endsection
