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
	<!-- CategoryWise/1 -->

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($products as $item)
                <div class="col mb-5">
                    <div class="card h-100">
                        <h3 class="text-center py-3">{{ $item->name }}</h3>
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ url('/uploads/uploads/',$item->image) }}" alt="Product Image" style="width: 100%; height: 200px; object-fit: cover;" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $item->name }}</h5>
                                <!-- Product price-->
                                BDT {{ $item->price }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('product.details',$item->id) }}"></i>Details</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


	