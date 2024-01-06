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
                <h3 class="card-title"></h3>
                <h6 class="card-subtitle"></h6>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12"> <br><br>
                        <div class="white-box "><img height="300px" width="350px" src="{{ url('/uploads/uploads/'.$toursData->image) }}" class="img-responsive">

                            <div id="sectionId" style="display: flex; justify-content: space-between; margin-top: 20px;">
                                <!-- Details -->
                                <div style="flex: 1; padding: 10px; cursor: pointer; transition: background-color 0.3s ease;" id="detailsOption">
                                    <p style="color: black">Details</p>
                                    <p style="color: black;">{{ $toursData->description }}</p>
                                </div>

                                {{-- <!-- Options -->
                                <div style="flex: 1;  padding: 10px; cursor: pointer; transition: background-color 0.3s ease;" id="optionsOption">
                                    <h4>Options</h4>
                                    <p>Options content goes here.</p>
                                </div>

                                <!-- Policy -->
                                <div style="flex: 1;  padding: 10px; cursor: pointer; transition: background-color 0.3s ease;" id="policyOption">
                                    <h4>Policy</h4>
                                    <p>Policy content goes here.</p>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-lg-6">
                        <h4 class="box-title mt-5">{{ $toursData->tittle }}</h4>

                        <h2 class="mt-5">
                        Tour Cost - {{ $toursData->price }} Tk /Person
                        </h2>
                        <p style="color: black font-weight: bold;"> {{ $toursData->seat_count }} <span>Seat Left</span></p>


                        <h3 class="box-title mt-5">Journey Date</h3>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success"></i> Journey Date <br>

                                <input type="text" class="form-control-sm" id="disabledInput" value="{{ $toursData->from_date }}"   disabled>
                            </li><br>
                            <li><i class="fa fa-check text-success"></i>End Date <br>
                                <input type="text" class="form-control-sm" id="disabledInput" value="{{ $toursData->to_date }}"   disabled></li><br>
                            <li><i class="fa fa-check text-success"></i>Starting from <br> <strong>BDT {{ $toursData->price }}</strong> </li><br>
                            <a href="{{ route('tour.book.now',$toursData->id) }}" class="btn btn-primary btn-rounded">Continue</a>
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
                                <button type="submit" class="btn btn-info">Rate This Tour</button>
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


<script>
    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: "smooth" });
        }
    }
</script>
