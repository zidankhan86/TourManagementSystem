
@extends('backend.master')
@section('main')
<div class="container">
    <br><h2 style="text-align: center">Car Location Table</h2>
    <div style="text-align: right">
        <a href="{{ route('category.form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Location</a>
    </div><br><br>
    <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table
    class="table table-vcenter table-mobile-md card-table">
              <thead>
                <tr>
                    <th>Title</th>
                  <th>Area</th>


                  <th class="w-1">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($list as $item)

                <tr>
                    <tr>
                        <td data-label="Name" >{{$item->name}}</td>

                        <td data-label="Name" ><img height="100" width="100" src="{{url('/uploads/uploads/',$item->image)}}" alt=""></td>
                  <td>
                    <div class="btn-list flex-nowrap">
                      <a href="{{route('category.delete',$item->id)}}" class="btn btn-danger">
                        Delete
                      </a>
                      <div class="dropdown">

                        <div class="dropdown-menu dropdown-menu-end">


                        </div>
                      </div>
                    </div>
                  </td>
                </tr>



                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>
@endsection
