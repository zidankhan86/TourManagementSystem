<section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                    <img class="img-fluid" src="{{ url('/uploads/uploads/'.$hotels->image) }}" alt="" width="620" height="500">
                    <div class="card-body">
                        <div class="row">
                            <div style="margin-right: 20px;"> <!-- Adjust the value to your preferred spacing -->
                                <a><small>ROOMS </small> </a>
                            </div>
                            <div style="margin-right: 20px;"> <!-- Adjust the value to your preferred spacing -->
                                <a> <small>WHAT'S NEARBY</small>  </a>
                            </div>
                            <div style="margin-right: 20px;"> <!-- Adjust the value to your preferred spacing -->
                                <a><small>FACILITIES  </small> </a>
                            </div>
                            <div> <!-- No margin on the last one -->
                                <a><small>POLICY </small> </a>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">
                            <small>Hotel Description</small>
                        </div>
                        <div class="card-body">

                            <p>Our hotel provides various facilities such as a swimming pool, spa, and gym.</p>

                            <a href="" style="color: rgb(61, 61, 156)"> <small>see more</small></a>
                        </div>
                    </div>

                    </div>

                </div>



             </div>



          </div>

       </div>
    </div>
 </section>




<section class="blog_area section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">


                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="img-fluid" src="{{ url('/uploads/uploads/'.$hotels->room_image) }}" alt="" height="150px" width="220px"  >

                        </div>

                        <div class="blog_details">
                            <h2>{{ $hotels->room_title }}</h2>

                            <ul class="blog-info-link mt-3 mb-4">
                               <li><a href="#"><i class="fa fa-user"></i> {{ $hotels->capacity }} Person Room</a></li>
                               <li><a href="#"><i class=""></i>{{ $hotels->rent }}Tk /Night</a></li>
                            </ul>


                            <div>
                                <a  data-toggle="modal" data-target="#myModal" style="color: blue">
                                    View Room Details
                                </a>
                            </div><br>


                               <p class="excert">
                                <strong class="text-danger">Hurry Up! Only {{ $hotels->no_of_room }} Room Left</strong>

                               </p>



                            <div>
                             <a href="{{ route('hotel.book.now',$hotels->id) }}" class="btn btn-primary btn-rounded">Book Now</a>
                            </div>
                            <h3 class="box-title mt-5">Rate Our Service</h3>
                                 <form action="{{ route('hotel.rate',$hotels->id) }}" method="POST">
                                     @csrf
                                     <div class="rating-css">
                                         <div class="star-icon">
                                             @for ($i = 1; $i <= 5; $i++)
                                                 <input type="radio" value="{{ $i }}" name="rating" id="rating{{ $i }}">
                                                 <label for="rating{{ $i }}" class="fa fa-star"></label>
                                             @endfor
                                         </div>
                                         <button type="submit" style="color: black">Rate Our Service</button>
                                     </div>
                                 </form>

                         </div>
                    </article>



                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog_right_sidebar">


                    <aside class="single_sidebar_widget post_category_widget">
                        <button class="btn btn-info">Option 1</button>
                        <ul class="list cat-list"><br>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Inspiration</p>
                                    <p>21</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care (21)</p>
                                    <p>09</p>
                                </a>
                            </li>
                        </ul>
                    </aside>


                </div>
            </div>

        </div>
    </div>
</section>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Room Details</h4>

                </div>
                <div class="modal-body">
                    <!-- Content for your modal -->
                    <h5>Single, Double</h5>
                    <p>
                        4 Adults , 2 Children</p>
                    <hr>

                    <p>Adult Occupancy: 4
                        Complementary Child Occupancy: 2
                        On Demand Extra Bed: 1
                        Maximum Number of Guests Allowed: 5.</p>
                        <hr>

                        <p>Room Type : Suite
                            Non-Smoking Room
                            Room Characteristics : Premium
                            Room Size : None
                            Room View : Sea View</p>
                            <hr>
                            <h5>Facilities</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Air Conditioning <br>
                                    Balcony <br>
                                    In-Room Safe <br>
                                    Blankets <br>
                                    Closet <br>
                                    Curtain</p>
                                </div>
                                <div class="col-md-6">
                                    <h5>Bathroom Facilities</h5>
                                    <p>Toiletries <br>
                                    Bathroom <br>
                                    Hairdryer <br>
                                    Hot Water <br>
                                    Towels</p>
                                </div>
                            </div>

                            <h5>Others</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Housekeeping <br>
                                        Electric Kettle <br>
                                        Room Service <br>

                                </div>
                                <div class="col-md-6">
                                    <h5>Food & Drink</h5>
                                    <p>Mini Fridge <br>
                                        Free Bottled Water <br>
                                </div>
                            </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


<style>
    /* rating */
.rating-css div {
    color: #ffe400;
    font-size: 5px;
    font-family: sans-serif;
    font-weight: 300;
    text-align: ;
    text-transform: uppercase;
    padding: 10px 0;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 25px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }

/* End of Star Rating */
</style>


