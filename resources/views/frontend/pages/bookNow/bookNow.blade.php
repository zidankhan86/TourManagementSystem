@extends('frontend.master')
@section('main')

<form action="{{ route('tour.book.now.store') }}" method="post" enctype="multipart/form-data">
    @csrf

<section class="order-form m-4">
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 px-4">
                <h1>Book by fill Up This Form</h1>
                <span>with some explanation below</span>
                <hr class="mt-1" />
            </div>

            <div class="col-12">
                <div class="row mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Full Name</label>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-outline">
                            <input type="text" name="name" id="form1" class="form-control order-form-input" />

                        </div>
                    </div>

                </div>

                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Phone Number</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline">
                            <input type="tel" name="phone" id="form3" class="form-control order-form-input" />
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Email Address</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline">
                            <input type="email" name="email" id="form4" class="form-control order-form-input" />
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Adress</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline">
                            <input type="text" name="address" id="form5" class="form-control order-form-input" />
                            <label class="form-label" for="form5">Street Address</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">I know what I need to know</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" id="btnSubmit" class="btn btn-primary d-block mx-auto btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

</form>

@endsection