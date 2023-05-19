@extends('backend.master')
@section('main')
<form action="" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="exampleInputName">Enter Tittle</label>
      <input type="text" value="{{ $supportEdit->tittle }}" name="tittle" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

    </div>
    <div class="form-group">
        <label for="exampleInputName">Enter Vehicle Name</label>
        <input type="text" value="{{ $supportEdit->v_name }}" name="v_name" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

      </div>
      <div class="form-group">
        <label for="exampleInputDescription">Enter Description</label>
        <input type="text" value="{{ $supportEdit->description }}" name="description" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

      </div>

      <div class="form-group">
        <label for="exampleInputAmount">Enter Price</label>
        <input type="number" value="{{ $supportEdit->price }}" name="price" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">
      </div>

      <div class="form-group">
        <label for="exampleInputName2">Enter For Location</label>
        <input type="text" value="{{ $supportEdit->location_for }}" name="location_for" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">

      </div>

      <div class="form-group">
        <label for="exampleInput">Enter Image</label>
        <input type="file" value="{{ $supportEdit->image }}" name="image" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter ">
      </div>

      <div class="form-control" >
        <label for="exampleInputName3">Enter Status</label>
       <select value="{{ $supportEdit->status }}" name="status" id="">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
       </select>
      </div><br>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
