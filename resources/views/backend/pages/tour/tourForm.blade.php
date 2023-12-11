@extends('backend.master')
@section('main')



<div class="container">
    <div class="container">
        <div class="container">






  <div class="row">
    <div class="col-lg-12">
        <h4 style="text-align: center">Tour Form</h4>
        <div class="card">
            <div class="card-title">


            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route ('tour.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                          <label for="exampleInputName">Enter Tittle</label>
                          <input type="text" name="tittle" class="form-control" id="" aria-describedby="emailHelp" placeholder="Winter wild tour... ">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputName3">Enter Location</label>
                            <input type="text" name="location" class="form-control" id="" aria-describedby="emailHelp" placeholder="Shundarban... ">

                          </div>
                        <div class="form-group">
                            <label for="exampleInputPrice">Enter Price</label>
                            <input type="number" name="price" class="form-control" id="" aria-describedby="emailHelp" placeholder="1000.. ">

                          </div>

                          <div class="form-group">
                            <label for="exampleInputPrice">Maximum tourist limit</label>
                            <input type="number" name="seat_count" class="form-control" id="" aria-describedby="emailHelp" placeholder="50... ">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputDescription">Enter Description</label>
                            <input type="text" name="description" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

                          </div>

                          <div class="form-group">
                            <label for="exampleInputTime">Enter Duration</label>
                            <input type="number" name="duration" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">
                          </div>

                          <div class="form-group">
                            <label for="">Select Image</label>
                            <input type="file" name="image" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputTime">Enter From Date</label>
                            <input type="datetime-local" name="from_date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputTime">Enter To Date</label>
                            <input type="datetime-local" name="to_date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">
                          </div>


                          <button type="submit" style="display: block; margin: 0 auto;" class="btn btn-info">Post</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>

@endsection
