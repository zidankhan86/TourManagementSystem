@extends('backend.master')
@section('main')
<form action="{{route ('tour.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputName">Enter Tittle</label>
      <input type="text" name="tittle" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

    </div>
    <div class="form-group">
        <label for="exampleInputPrice">Enter Price</label>
        <input type="number" name="price" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

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
        <label for="">Enter Image</label>
        <input type="file" name="image" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
