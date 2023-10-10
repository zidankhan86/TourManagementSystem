@extends('backend.master')

@section('main')
<h4 style="text-align: center">Add more tour</h4>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">

            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('tour.support.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tittle">Enter Title</label>
                            <input type="text" name="tittle" class="form-control" id="tittle" placeholder="Enter Title">
                        </div>

                        <div class="form-group">
                            <label for="v_name">Enter Vehicle Name</label>
                            <input type="text" name="v_name" class="form-control" id="v_name" placeholder="Enter Vehicle Name">
                        </div>

                        <div class="form-group">
                            <label for="description">Enter Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Enter Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price">
                        </div>

                        <div class="form-group">
                            <label for="location_for">Enter For Location</label>
                            <input type="text" name="location_for" class="form-control" id="location_for" placeholder="Enter For Location">
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file" class="form-control" name="image" class="form-control-file" id="image">
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
