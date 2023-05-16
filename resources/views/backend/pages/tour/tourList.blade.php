@extends('backend.master')

@section('main')
<br><br><a href="{{route ('tour.form') }}" class="btn btn-info">Add Tour</a><br><br>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tittle</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Duration</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($tours as $tour)


    <tr>
      <th scope="row">{{ $tour->id }}</th>
      <td>{{ $tour->tittle }}</td>
      <td>{{ $tour->price }}</td>
      <td>{{ $tour->description }}</td>
      <td>{{ $tour->duration }}</td>
      <td>{{ $tour->status }}</td>
      <td>
        <a href="" class="btn btn-info">View</a>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

@endsection
