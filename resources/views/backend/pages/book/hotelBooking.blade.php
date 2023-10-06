@extends('backend.master')
@section('main')


<div class="col-lg-12">
    <div class="card">
        <div class="card-title">
            <h4>Booking List  </h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($hotel as $booked)


                        <tr>
                            <th scope="row">{{ $booked->id }}</th>
                            <td>{{ $booked->name }}</td>
                            <td>{{ $booked->phone }}</td>
                            <td>{{ $booked->email }}</td>
                            <td>{{ $booked->address }}</td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
