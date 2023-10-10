<form action="{{ route('pay.now.flight',$book->id) }}" method="post" enctype="multipart/form-data">
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
                        @error('name')

                        <p class="text-danger">{{ $message }}</p>

                        @enderror
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
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>

                        @enderror
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
                        @error('email')

                        <p class="text-danger">{{ $message }}</p>

                        @enderror
                    </div>
                    <div>
                        <input type="hidden" name="price">
                    </div>
                </div>
                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Address</label>
                    </div>
                    <div class="col-12">
                        <div class="form-outline">
                            <input type="text" name="address" id="form5" class="form-control order-form-input" />

                        </div>
                        @error('address')

                        <p class="text-danger">{{ $message }}</p>

                        @enderror
                    </div>
                </div>
                <div>
                    <input type="hidden" name="price" value="{{ $book->price }}">
                </div>

                <div>
                    <input type="hidden" name="currency" value="{{ $book->currency }}">
                </div>

                <div>
                    <input type="hidden" name="flight_id" value="{{ $book->id }}">
                </div>

                <div>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
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
                        <button style="color: black" type="submit" id="" class="btn btn-primary d-block mx-auto ">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

</form>
