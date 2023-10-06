 <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="frontend/assets/img/hero/contact_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Flight</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- slider Area End-->


	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h3 class="mb-30">Our Flight</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">

                        @foreach ($flight as $item)


						<div class="table-row card">
                            <div class="card-body" style="display: flex; flex-direction: row; align-items: center;">

                                <div class=""> <img height="100" width="150" src="{{ url('/uploads/uploads/'.$item->image) }}" alt="flag">
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
                                <div class="visit">{{ $item->name }}</div>
                                <div class="visit"><small> <strong> {{ $item->from }} To  {{ $item->to }}</strong></small></div>
                                <div class="visit">{{ $item->ticket }} <small class="text danger"> Tickets Remain</small> </div>
                                <div class="visit"> <small>{{ $item->time }}</small></div>
                                <div class="visit"> {{ $item->class }}</div>
                                <div class="visit">{{ $item->date_time }}</div>
                                <div class="visit"><small> <strong>{{ $item->price }} Tk</small></strong></div>
                                <div class="visit"><a href="{{ url('/flight/view',$item->id) }}" class="genric-btn success-border circle arrow">SELECT<span
                                    class="lnr lnr-arrow-right"></span></a></div>

                            </div>
                        </div><br><br>


                        @endforeach

					</div>
				</div>
			</div>




		</div>
	</div>
	<!-- End Align Area -->
