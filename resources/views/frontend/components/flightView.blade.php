<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <!-- Include any necessary CSS and JavaScript libraries here -->
    <style>
        .center-content {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body center-content"> <!-- Center-align the card content -->
                        <h5 class="card-title">View Details</h5>
                        <img src="{{ url('/uploads/uploads/'.$flights->image) }}" height="50px" width="100px" alt="">
                        <p class="card-text"><strong>{{ $flights->name }}</strong></p>
                        <p class="card-text">Duration:{{ $flights->time }}</p>
                        <p class="card-text"><strong>{{ $flights->from }} TO {{ $flights->to }}</strong></p>
                        <p class="card-text">Date & Time: {{ $flights->date_time }}</p>
                        <p class="card-text">Class: {{ $flights->class }}</p>
                        <p class="card-text">Price: {{ $flights->price }} Tk/Ticket</p>
                        <p class="card-text">Baggage Cabin: {{ $flights->cabin }} Kilograms</p>
                        <p class="card-text">Baggage Check-in: {{ $flights->checkin }} Kilograms</p>
                        <a href="{{ route('book.flight',$flights->id) }}" class="btn btn-primary">Confirm Ticket</a>
                        <br>
                        <br><br>

                        <h3 class="box-title mt-5">Rate Our Service</h3><br>
                        <form action="{{ route('flight.rate',$flights->id) }}" method="POST">
                            @csrf
                            <div class="rating-css">
                                <div class="star-icon">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <input type="radio" value="{{ $i }}" name="rating" id="rating{{ $i }}">
                                        <label for="rating{{ $i }}" class="fa fa-star"></label>
                                    @endfor
                                </div>
                                <button type="submit" class="" style="color: black">Rate Our Service</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html><br><br>
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
