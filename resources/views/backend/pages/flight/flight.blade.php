@extends('backend.master')

@section('main')
<h4 style="text-align: center">Flight Form</h4>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">

            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('flight.Store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tittle">Flight Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="US Bangla">
                        </div>
                        <div class="form-group">
                            <label for="tittle">Ticket Price</label>
                            <input type="number" name="price" class="form-control" id="name" placeholder="3400">
                        </div>

                        <div class="form-group">
                            <label for="v_name">From Journey</label>
                            <input type="text" name="from" class="form-control" id="location" placeholder="Cox's Bazar">
                        </div>

                        <div class="form-group">
                            <label for="v_name">To Journey</label>
                            <input type="text" name="to" class="form-control" id="location" placeholder="Dhaka">
                        </div>

                        <div class="form-group">
                            <label for="v_name">Company Logo</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">No Of Ticket</label>
                            <input type="number" name="ticket" class="form-control" placeholder="32" >
                        </div>

                        <div class="form-group">
                            <label for="description">Baggage Cabin</label>
                            <input type="number" name="cabin" class="form-control" placeholder="20" >
                        </div>
                        <div class="form-group">
                            <label for="description">Baggage Check-in</label>
                            <input type="number" name="checkin" class="form-control" placeholder="7" >
                        </div>

                        <div class="form-group">
                            <label for="price">Time Needed</label>
                            <input type="text" name="time" class="form-control" id="price" placeholder="1hr 20 min">
                        </div>

                        <div class="form-group">
                            <label for="location_for">Class</label>
                            <input type="text" name="class" class="form-control"  id="location_for" placeholder="Economy">
                        </div>

                        <div class="form-group">
                            <label for="location_for">Flight Date&Time</label>
                            <input type="datetime-local" name="date_time" class="form-control" id="" placeholder="4000">
                        </div>

                        <button type="submit" style="display: block; margin: 0 auto;" class="btn btn-info">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
