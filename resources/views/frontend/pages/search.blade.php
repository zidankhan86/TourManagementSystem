

@extends('frontend.master')

@section('main')
<div class="container mt-100">
    <!-- Section Title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title text-center">
                <span>SEARCH RESULTS</span>
                <h2>Search Results for "{{ $searchKey }}"</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h3>Tour Results</h3>
            @if($tourResults->count() > 0)
                @foreach($tourResults as $tour)

                        <div class="place-img">
                            <a href="{{route('tour.view.details',$tour->id) }}"><img height="200px" width="350px" src="{{url ('/uploads/uploads/'.$tour->image) }}" alt=""></a>
                        </div>
                        <div class="place-cap">
                            <div class="place-cap-top">
                                <h3><a href="#">{{ $tour->tittle }}</a></h3>
                                <div class="featured__item__text">

                                    <div class="star-rating">
                                        @php
                                            // Retrieve the product ratings for the current product
                                            $tourRating = App\Models\Rating::where('tour_id', $tour->id)->get();

                                            // Calculate the average rating and limit it to a maximum of 5
                                            $averageRating = min($tourRating->avg('rating'), 5);

                                            // Calculate the number of full stars
                                            $fullStars = floor($averageRating);

                                            // Calculate the presence of a half star
                                            $hasHalfStar = ($averageRating - $fullStars) >= 0.5;
                                        @endphp

                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $fullStars)
                                                <span class="star" style="font-size: 24px; color: gold;">&#9733;</span>
                                            @elseif ($hasHalfStar)
                                                <span class="star half" style="font-size: 24px; color: gold;">&#9733;</span>
                                                @php $hasHalfStar = false; @endphp
                                            @else
                                                <span class="star" style="font-size: 24px; color: gray;">&#9733;</span>
                                            @endif
                                        @endfor
                                    </div>


                                </div>
                                <p class="dolor">{{ $tour->price }} <span> TK/ Per Person</span></p>
                                <p class="dolor"> {{ $tour->seat_count }} <span>Seat Left</span></p>
                            </div>
                            <div class="place-cap-bottom">
                                <ul>
                                    <li><i class="far fa-clock"></i>{{ $tour->duration }} Days</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $tour->location }}</li>
                                </ul>
                            </div>
                        </div>


                @endforeach
            @else
                <p class="alert alert-danger">No Tour Results Found.</p>
            @endif
        </div>

        <div class="col-md-4">
            <h3>Hotel Results</h3>
            @if($hotelResults->count() > 0)
                @foreach($hotelResults as $item)
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <a href="{{ url('/hotelDetails', $item->id) }}">
                                <img src="{{ url('/uploads/uploads/'.$item->image) }}" alt="">
                            </a>
                        </div>
                        <div class="blog-cap">
                            <p><i class="fas fa-map-marker-alt"></i> {{ $item->location }}</p>
                            <h3><a href="#">{{ $item->name }}</a></h3>
                            <div class="star-rating">
                                @php
                                    // Retrieve the product ratings for the current product
                                    $hotel = App\Models\HotelRating::where('hotel_id', $item->id)->get();

                                    // Calculate the average rating and limit it to a maximum of 5
                                    $averageRating = min($hotel->avg('rating'), 5);

                                    // Calculate the number of full stars
                                    $fullStars = floor($averageRating);

                                    // Calculate the presence of a half star
                                    $hasHalfStar = ($averageRating - $fullStars) >= 0.5;
                                @endphp

                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $fullStars)
                                        <span class="star" style="font-size: 24px; color: gold;">&#9733;</span>
                                    @elseif ($hasHalfStar)
                                        <span class="star half" style="font-size: 24px; color: gold;">&#9733;</span>
                                        @php $hasHalfStar = false; @endphp
                                    @else
                                        <span class="star" style="font-size: 24px; color: gray;">&#9733;</span>
                                    @endif
                                @endfor
                            </div>
                            <a href="{{ url('/hotelDetails', $item->id) }}" class="more-btn">Read more »</a>
                        </div>
                    </div>
                    <div class="blog-date text-center">
                        <h3 style="color: azure">{{ $item->no_of_room }}</h3>
                        <p>Room Left</p>
                    </div>
                </div>
                @endforeach
            @else
                <p class="alert alert-danger">No Hotel Results Found.</p>
            @endif
        </div>

        <div class="col-md-4">
            <h3>Flight Results</h3>
            @if($flightResults->count() > 0)
                @foreach($flightResults as $item)
                <div class="table-row card">
                    <div class="card-body" style="display: flex; flex-direction: row; align-items: center;">

                        <div class=""> <img height="200" width="300" src="{{ url('/uploads/uploads/'.$item->image) }}" alt="flag">
                            <div class="visit">{{ $item->name }}</div>
                            <div class="visit"><small> <strong> {{ $item->from }} To  {{ $item->to }}</strong></small></div>
                            <div class="visit"><small> <strong>{{ $item->price }} Tk</small></strong></div>
                            <div class="visit"><a href="{{ url('/flight/view',$item->id) }}" class="genric-btn success-border circle arrow">SELECT<span
                                class="lnr lnr-arrow-right"></span></a></div>
                            <div class="featured__item__text">

                                <div class="star-rating">
                                    @php
                                        // Retrieve the product ratings for the current product
                                        $flight = App\Models\FlightRating::where('flight_id', $item->id)->get();

                                        // Calculate the average rating and limit it to a maximum of 5
                                        $averageRating = min($flight->avg('rating'), 5);

                                        // Calculate the number of full stars
                                        $fullStars = floor($averageRating);

                                        // Calculate the presence of a half star
                                        $hasHalfStar = ($averageRating - $fullStars) >= 0.5;
                                    @endphp

                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $fullStars)
                                            <span class="star" style="font-size: 24px; color: gold;">&#9733;</span>
                                        @elseif ($hasHalfStar)
                                            <span class="star half" style="font-size: 24px; color: gold;">&#9733;</span>
                                            @php $hasHalfStar = false; @endphp
                                        @else
                                            <span class="star" style="font-size: 24px; color: gray;">&#9733;</span>
                                        @endif
                                    @endfor
                                </div>


                            </div>
                        </div>




                    </div>
                </div><br><br>
                @endforeach
            @else
                <p class="alert alert-danger">No Flight Results Found.</p>
            @endif
        </div>
    </div>
</div>
@endsection

