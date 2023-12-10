@extends('backend.master')
@section('main')


<br><strong class="text-info">Booking Table</strong><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Location</th>
        <th scope="col">City</th>
        <th scope="col">Road</th>
        <th scope="col">Orders Time</th>
       
      </tr>
    </thead>
    <tbody>

        @foreach ($userBooking as $item)


      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->location }}</td>
        <td>{{ $item->city }}</td>
        <td>{{ $item->road }}</td>
        <td>{{ $item->created_at->diffForHumans() }}</td>
        <td>



       </td>



      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
