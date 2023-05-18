 @extends('frontend.master')
 @section('main')


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
                        <img src="{{ url('/uploads/uploads/'.$tour->image) }}" alt="">
                    </div>
                    <div class="place-cap">
                        <div class="place-cap-top">
                            <h3><a href="#">{{ $tour->tittle }}</a></h3>
                            <p class="dolor">{{ $tour->price }}<span>/ Per Person</span></p>
                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li><i class="far fa-clock"></i>{{ $tour->duration }} Days</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $tour->location }}</li>
                            </ul>
                        </div>

                    </div>
                    <a href="{{route ('tour.view.details',$tour->id) }}" class="btn btn-info">View Details</a>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
<!-- Favourite Places End -->

@endsection
