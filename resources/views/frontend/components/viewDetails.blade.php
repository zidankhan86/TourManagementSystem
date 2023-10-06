<style>

    body{
        background-color: #edf1f5;
        margin-top:20px;
    }
    .card {
        margin-bottom: 30px;
    }
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 0;
    }
    .card .card-subtitle {
        font-weight: 300;
        margin-bottom: 10px;
        color: #8898aa;
    }
    .table-product.table-striped tbody tr:nth-of-type(odd) {
        background-color: #f3f8fa!important
    }
    .table-product td{
        border-top: 0px solid #dee2e6 !important;
        color: #728299!important;
    }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title"> {{ $toursData->tittle }}</h3>
                <h6 class="card-subtitle"></h6>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center"><img height="300px" width="350px" src="{{ url('/uploads/uploads/'.$toursData->image) }}" class="img-responsive"></div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6">
                        <h4 class="box-title mt-5">Product description</h4>
                        <p>{{ $toursData->description }}</p>
                        <h2 class="mt-5">
                        Tour Cost - {{ $toursData->price }} Tk /Person
                        </h2>
                        <p style="color: black font-weight: bold;"> {{ $toursData->seat_count }} <span>Seat Left</span></p>

                        <a href="{{ route('tour.book.now',$toursData->id) }}" class="btn btn-primary btn-rounded">Book Now</a>
                        <h3 class="box-title mt-5">Key Highlights</h3>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success"></i>Whether you're a thrill-seeker</li>
                            <li><i class="fa fa-check text-success"></i>leaving you with cherished memories</li>
                            <li><i class="fa fa-check text-success"></i>Travel opens up a world of possibilities</li>
                        </ul>
                        <h3 class="box-title mt-5">Rate Our Service</h3>
                        <form action="{{ route('tour.rate',$toursData->id) }}" method="POST">
                            @csrf
                            <div class="rating-css">
                                <div class="star-icon">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <input type="radio" value="{{ $i }}" name="rating" id="rating{{ $i }}">
                                        <label for="rating{{ $i }}" class="fa fa-star"></label>
                                    @endfor
                                </div>
                                <button type="submit" class="btn btn-info">Rate This Product</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    </div>
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
