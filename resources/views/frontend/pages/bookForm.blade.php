@extends('frontend\master')
@section('main')


<style>
    .order-form .container {
      color: #4c4c4c;
      padding: 20px;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
      max-width: 650px;
    }

    .order-form-label {
      margin: 8px 0 0 0;
      font-size: 14px;
      font-weight: bold;
    }

.order-form-input,
.form-label,
.form-check-label {
      font-family: 'Open Sans', sans-serif;
      font-size: 14px;

    }

    .btn-submit:hover {
      background-color: #0D47A1 !important;
    }
</style>

<br><br><br><br><section class="order-form m-4">
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 px-4">
                <h5 style="text-align: center"> Booking Form</h5>

                <hr class="mt-1" />
            </div>
        <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="col-12">
                <div class="row mx-4">
                    <div class="col-12">

                    </div>
                    <div class="col-sm-6">
                        <div class="form-outline">
                            <input type="text" id="form1" name="name" class="form-control order-form-input" placeholder="Reea"/>

                            @error('name')

                            <p class="text-danger">{{ $message }}</p>

                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 mt-2 mt-sm-0">
                        <div class="form-outline">

                            <input type="tel" id="form2" name="phone" class="form-control order-form-input" placeholder="01700000000" />

                        </div>

                        @error('phone')

                            <p class="text-danger">{{ $message }}</p>

                            @enderror
                    </div>
                </div>

                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Pick-Up Date</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline">
                            <input type="date" id="form4" name="from_date" class="form-control order-form-input" />
                        </div>
                        @error('from_date')

                        <p class="text-danger">{{ $message }}</p>

                        @enderror
                    </div>
                </div>

                <div>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                </div>

                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label" for="date-picker-example">Drop Date</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline datepicker" data-mdb-toggle-button="false">
                            <input
                            type="date" name="to_date" class="form-control order-form-input" id="datepicker1" data-mdb-toggle="datepicker" />

                        </div>
                        @error('to_date')

                        <p class="text-danger">{{ $message }}</p>


                        @enderror
                    </div>
                </div>

                <div class="row mt-3 mx-4">
                    <div class="col-12">

                        <div class="form-group">
                          <label for=""></label>
                          <input type="text"
                            class="form-control" name="road" id="" aria-describedby="helpId" placeholder="road 12,sector12">

                        </div>

                        @error('road')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-6 mt-2 pe-sm-2">
                        <div class="form-outline">
                            <input type="text" id="form9" name="city" class="form-control order-form-input" placeholder="Khulna" />

                        </div>
                        @error('city')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-sm-6 mt-2 ps-sm-0">
                        <div class="form-outline">
                            <input type="text" name="location" id="form10" class="form-control order-form-input" placeholder="khulna ,road 12,sector 12" />

                        </div>
                        @error('location')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror




                    </div><br>




                    <div class="col-sm-6 mt-2 pe-sm-2">
                        <br>
                        <label for="">Insert the hours* </label>
                        <div class="form-outline">
                            <input type="number" id="hour" name="hour" class="form-control order-form-input" placeholder="i.e:2" oninput="calculateTotal()" />
                        </div>
                        @error('hour')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-sm-6 mt-2 ps-sm-0">
                        <br>
                        <div class="form-outline">
                            <label for="">You have to pay Tk.*</label>
                            <input type="text" id="total" name="total" class="form-control order-form-input" placeholder="Pay tk." readonly />
                        </div>
                        @error('total')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                </div>



                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" id="btnSubmit" class="btn btn-primary d-block mx-auto btn-submit">Confirm Booking</button>
                    </div>
                </div>
            </div>



            <div>
                <input type="hidden" name="price" value="{{ $product->price }}">
            </div>



            <div>
                <input type="hidden" name="product_id" value="{{ $product->id }}">
            </div>
            <div>
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            </div>



        </form>
        </div>
    </div>
  </section>
  <script>

    function calculateTotal() {
        // Get the values entered by the user
        var hour = document.getElementById('hour').value;
        var price = {{ $product->price }}; // Replace with your actual price

        // Perform the calculation
        var total = hour * price;

        // Display the result in the 'total' input field
        document.getElementById('total').value = total;
    }
</script>

  @endsection
