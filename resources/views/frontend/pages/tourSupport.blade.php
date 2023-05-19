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
               <p>{{$tour->tittle  }}</p>
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="{{url ('/uploads/uploads',$tour->image) }}" alt="">

                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li> {{$tour->v_name  }}</li>
                                <li><i class="far fa-clock"></i>{{ $tour->price }}tk/ Hour</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $tour->location_for }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-date text-center">
                        <a href="{{route ('more.support.view.details',$tour->id) }}">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>

@endsection
