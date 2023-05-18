@extends('frontend.master')
@section('main')


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

            @foreach ($tours as $tour)


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

@endsection
