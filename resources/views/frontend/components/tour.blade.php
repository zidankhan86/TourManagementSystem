<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- Favourite Places Start -->
<div class="favourite-place place-padding">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span>FEATURED TOUR PACKAGES</span>
                    <h2>Favourite Places</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Favourite Places End -->

<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="progress-table-wrap">
                <div class="progress-table">

                    @foreach ($tours as $tour)
                    <div class="table-row card">
                        <div class="card-body" style="display: flex; flex-direction: row; align-items: center;">
                            <div>

                                <a href="{{ route('tour.view.details', $tour->id) }}">
                                    <img src="{{ url('/uploads/uploads/'.$tour->image) }}" height="150" width="200px" alt="" style="margin: 20px;">
                                </a>



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



                            <div class="visit">

                                <ul>
                                    <h3><a href="#">{{ $tour->tittle }}</a></h3>
                                    <li><i class="fas fa-map-marker-alt"></i> <small> {{ $tour->location }}</small></li> <br>
                                    <li><i class="far fa-clock"></i> <small>{{ $tour->duration }}   Days</small></li>
                                    <li> <i class="fas fa-chair"></i> <small> {{ $tour->seat_count }} <span>  Seat Left </small> </span></li>

                                </ul>
                            </div>

                            <div class="visit">

                            </div>
                            <div class="visit">

                                <ul>
                                    <h6> Starting From </h6>
                                    <li> <p class="dolor">BDT <strong>{{ $tour->price }}</strong> <span> <br> Per Person</span></p></li>


                                </ul>
                            </div>

<p></p>

                        </div>
                    </div> <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
