@extends('backend.master')

@section('main')
<br><br><a href="{{route ('tour.form') }}" class="btn btn-info">Add Tour</a><br><br>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th>Image</th>
      <th scope="col">Tittle</th>
      <th scope="col">Price</th>
      <th scope="col">Duration</th>
      <th scope="col">Seat Left</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($tours as $tour)


    <tr>
      <th scope="row">{{ $tour->id }}</th>
      <td><img height="50" width="50" src="{{ url('/uploads/uploads/'.$tour->image) }}" alt=""></td>
      <td>{{ $tour->tittle }}</td>
      <td>{{ $tour->price }}</td>
      <td>{{ $tour->duration }}</td>
      <td>{{ $tour->seat_count }}</td>
      <td>{{ $tour->status }}</td>
      <td>
        <a href="{{route ('tour.view',$tour->id) }}" class="btn btn-info">View</a>
        <a href="{{route ('tour.edit',$tour->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('tour.delete',$tour->id) }}" class="btn btn-danger" onclick="return confirm('Do Your Wants to Delete ?')">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

@endsection
