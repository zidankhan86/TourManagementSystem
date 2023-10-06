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
                        <a href="{{route('tour.view.details',$tour->id) }}"><img src="{{url ('/uploads/uploads/'.$tour->image) }}" alt=""></a>
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

                </div>
            </div>


            @endforeach

        </div>
    </div>
</div>
<!-- Favourite Places End -->

