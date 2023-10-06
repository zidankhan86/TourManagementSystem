@extends('backend.master')

@section('main')
<br><br><a href="{{route ('hotel.form') }}" class="btn btn-info">Add Hotel</a><br><br>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th>Hotel Image</th>
      <th scope="col">Hotel Name</th>
      <th scope="col">Hotel Location</th>
      <th scope="col">Room Name</th>
      <th scope="col">Room Image</th>
      <th scope="col">Facilities</th>
      <th scope="col">Room Capacity</th>
      <th scope="col">Rent/Day</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($hotel as $tour)


    <tr>
      <th scope="row">{{ $tour->id }}</th>
      <td><img height="50" width="50" src="{{ url('/uploads/uploads/'.$tour->image) }}" alt=""></td>
      <td>{{ $tour->name }}</td>
      <td>{{ $tour->location }}</td>
      <td>{{ $tour->room_title }}</td>
      <td><img height="50" width="50" src="{{ url('/uploads/uploads/'.$tour->room_image) }}" alt=""></td>
      <td>{{ $tour->facilities }}</td>
      <td>{{ $tour->capacity }} Person</td>
      <td>{{ $tour->rent }} Tk.</td>
      <td>
        <a href="{{ route('hotel.delete',$tour->id) }}" class="btn btn-danger" onclick="return confirm('Do Your Wants to Delete ?')">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

@endsection
