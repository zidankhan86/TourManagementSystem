@extends('backend.master')
@section('main')

<div class="container">
    <div class="container">
        <div class="container">
            <div class="col-12"><br><br>
                <form class="card" method="POST" action="{{ route('product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center">Package Form</h3>
                        <div class="row row-cards">
                            <div class="col-md-12">
                                <div class="mb-12">
                                    <label class="form-label">Car Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Car Name">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="mb-12">
                                    <label class="form-label">Price/hr</label>
                                    <input type="number" class="form-control" name="price" placeholder="Price">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="mb-12">
                                    <label class="form-label">Select Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div><br>

                                <div class="mb-12">
                                    <label class="form-label">Select Package</label>
                                   <select name="category_id" id="" class="form-control">

                                    @foreach ($packageName as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach

                                   </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="mb-12">
                                    <label class="form-label">Description</label>
                                    <textarea rows="5" name="description" class="form-control" placeholder="Product Description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Create Package</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
