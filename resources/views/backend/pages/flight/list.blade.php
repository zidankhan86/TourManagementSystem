@extends('backend.master')

@section('main')
<br><br><a href="{{route ('flight.form') }}" class="btn btn-info">Add Flight</a><br><br>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th>Hotel Image</th>
      <th scope="col"> Name</th>
      <th scope="col">Price</th>
      <th scope="col">Location</th>
      <th scope="col">Ticket</th>
      <th scope="col">Duration</th>
      <th scope="col">Class</th>
      <th scope="col">Date&Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($flight as $tour)


    <tr>
      <th scope="row">{{ $tour->id }}</th>
      <td><img height="50" width="50" src="{{ url('/uploads/uploads/'.$tour->image) }}" alt=""></td>
      <td>{{ $tour->name }}</td>
      <td>{{ $tour->price }} Tk.</td>
      <td>{{ $tour->from }} To {{ $tour->to }}</td>
      <td>{{ $tour->ticket }}</td>
      <td>{{ $tour->time }}</td>
      <td>{{ $tour->class }}</td>
      <td>{{ $tour->date_time }}</td>
      <td>

        <a href="{{ route('flight.delete',$tour->id) }}" class="btn btn-danger" onclick="return confirm('Do Your Wants to Delete ?')">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

@endsection
