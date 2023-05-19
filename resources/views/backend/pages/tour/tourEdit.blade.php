@extends('backend.master')
@section('main')
<form action="" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="exampleInputName">Enter Tittle</label>
      <input type="text" name="tittle" value="{{ $tour->tittle }}" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

    </div>
    <div class="form-group">
        <label for="exampleInputName3">Enter Location</label>
        <input type="text" name="location" value="{{ $tour->location }}" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

      </div>
    <div class="form-group">
        <label for="exampleInputPrice">Enter Price</label>
        <input type="number" name="price" value="{{ $tour->price }}" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

      </div>
      <div class="form-group">
        <label for="exampleInputDescription">Enter Description</label>
        <input type="text" name="description" value="{{ $tour->description }}" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

      </div>

      <div class="form-group">
        <label for="exampleInputTime">Enter Duration</label>
        <input type="number" name="duration" value="{{ $tour->duration }}" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">
      </div>

      <div class="form-group">
        <label for="">Enter Image</label>
        <input type="file" name="image" value="{{ $tour->image }}" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

      </div>
      <div class="form-group">
        <label for="exampleInputTime">Enter From Date</label>
        <input type="datetime-local" name="from_date" value="{{ $tour->from_date }}" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">
      </div>
      <div class="form-group">
        <label for="exampleInputTime">Enter To Date</label>
        <input type="datetime-local" value="{{ $tour->to_date }}" name="to_date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
