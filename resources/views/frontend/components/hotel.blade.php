

<div class="home-blog-area section-padding2">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Choose Your Best Deal</span>
                    <h2>Hotel</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($hotels as $item)
            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <a href="{{ url('/hotelDetails', $item->id) }}">
                                <img src="{{ url('/uploads/uploads/'.$item->image) }}" alt="">
                            </a>
                        </div>
                        <div class="blog-cap">
                            <p><i class="fas fa-map-marker-alt"></i> {{ $item->location }}</p>
                            <h3><a>{{ $item->name }}</a></h3>
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
                        <h3 style="color: rgb(8, 8, 8)">{{ $item->no_of_room }}</h3>
                        <p>Room Left</p>
                    </div>
                </div>

            </div>
            @endforeach


        </div>
        <div> {{ $hotels->links() }}</div>

    </div>
</div>
