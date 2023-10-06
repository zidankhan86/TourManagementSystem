@extends('backend.master')

@section('main')
<h4 style="text-align: center">Hotel Form</h4>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">

            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('hotel.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tittle">Hotel Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Sea Pearl Hotel">
                        </div>

                        <div class="form-group">
                            <label for="v_name">Hotel Location</label>
                            <input type="text" name="location" class="form-control" id="location" placeholder="Inani ,Cox's Bazar">
                        </div>

                        <div class="form-group">
                            <label for="v_name">Room Name</label>
                            <input type="text" name="room_title" class="form-control" id="location" placeholder="Garden View">
                        </div>

                        <div class="form-group">
                            <label for="v_name">Room Image</label>
                            <input type="file" name="room_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Facilities</label>
                            <textarea name="facilities" class="form-control" id="description" placeholder="Enter Facilities"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Room Capacity</label>
                            <input type="number" name="capacity" class="form-control" id="price" placeholder="2">
                        </div>

                        <div class="form-group">
                            <label for="location_for">Number Of Room</label>
                            <input type="number" name="no_of_room" class="form-control"  id="location_for" placeholder="40">
                        </div>

                        <div class="form-group">
                            <label for="location_for">Rent/Day</label>
                            <input type="number" name="rent" class="form-control" id="" placeholder="4000">
                        </div>

                        <div class="form-group">
                            <label for="image">Hotel Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>

                        <div class="form-group">
                            <label for="location_for">Description</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="About hotel" style="height: auto; min-height: 100px; resize: none;" rows="4"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="status">Select Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <button type="submit" style="display: block; margin: 0 auto;" class="btn btn-info">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
