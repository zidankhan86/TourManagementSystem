<section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                    <img class="img-fluid" src="{{ url('/uploads/uploads/'.$hotels->room_image) }}" alt="" width="500" height="400">


                </div>
                <div class="blog_details">
                   <h2>{{ $hotels->room_title }}</h2>

                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="fa fa-user"></i> {{ $hotels->capacity }} Person Room</a></li>
                      <li><a href="#"><i class=""></i>{{ $hotels->rent }}Tk /Night</a></li>
                   </ul>
                   <p class="excert">
                    <strong>About Our Hotel :</strong>
                     {{ $hotels->description }}
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
             </div>



          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget">

                      <div class="form-group">
                         <div class="mb-3">

                            <div>
                               <button class="btn btn-success"  href="">WE OFFER BEST ROOM</button>
                            </div>

                         </div>
                      </div>


                </aside>
                <aside class="single_sidebar_widget post_category_widget">
                   <h4 class="widget_title">Rooms</h4>
                   <ul class="list cat-list">
                      <li>
                         <a href="#" class="d-flex">
                            <p>{{ $hotels->capacity }} Person Maximum</p>

                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>{{ $hotels->rent }} Tk Only</p>

                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>There is {{ $hotels->facilities }}</p>

                         </a>
                      </li>

                   </ul>


                <aside class="single_sidebar_widget instagram_feeds">
                   <h4 class="widget_title">Instagram Feeds</h4>
                   <ul class="instagram_row flex-wrap">


                      <li>
                         <a href="#">
                            <img class="img-fluid" src="{{url ('/uploads/uploads/'),$hotels->image }}" alt="">
                            <img class="card-img rounded-0" src="{{url ('/uploads/uploads/'.$hotels->image) }}" alt="">
                         </a>
                      </li>


                   </ul>
                </aside>



             </div>
          </div>
       </div>
    </div>
 </section>
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
