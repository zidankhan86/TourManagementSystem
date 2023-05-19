@extends('backend.master')

@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Tittle</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Price</th>
      <th scope="col">Location</th>
      <th>Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($supports as $tour)


    <tr>
      <th scope="row">{{ $tour->id }}</th>
      <th><img width="50" height="50" src="{{ url('/uploads/uploads/'.$tour->image) }}" alt=""></th>
      <td>{{ $tour->tittle }}</td>
      <td>{{ $tour->v_name }}</td>
      <td>{{ $tour->price }}</td>
      <td>{{ $tour->location }}</td>
      <td>{{ $tour->status }}</td>
      <td>
        <a href="{{route ('tour.support.view',$tour->id) }}" class="btn btn-info">View</a>
        <a href="{{route ('tour.support.edit',$tour->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{route ('tour.support.delete',$tour->id) }}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

@endsection
