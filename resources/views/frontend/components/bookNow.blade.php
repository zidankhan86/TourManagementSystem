<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Booking Form</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <!-- Left Column - Booking Form -->
            <div class="col-md-6">
                <!-- Booking Form -->
                <form action="{{ route('pay.now', $tours->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <section class="order-form m-4">
                        <div class="container pt-4">
                            <div class="row">
                                <div class="col-12 px-4">
                                    <h1>Book by filling up this form</h1>
                                    <span>with some explanation below</span>
                                    <hr class="mt-1" />
                                </div>
                                <div class="col-12">
                                    <div class="row mx-4">
                                        <div class="col-md-6">
                                            <label class="order-form-label">Full Name</label>
                                            <div class="form-outline">
                                                <input type="text" name="name" id="form1" class="form-control order-form-input" />
                                            </div>
                                            @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="order-form-label">Phone Number</label>
                                            <div class="form-outline">
                                                <input type="tel" name="phone" id="form3" class="form-control order-form-input" />
                                            </div>
                                            @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-4">
                                        <div class="col-md-6">
                                            <label class="order-form-label">Email Address</label>
                                            <div class="form-outline">
                                                <input type="email" name="email" id="form4" class="form-control order-form-input" />
                                            </div>
                                            @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="order-form-label">Address</label>
                                            <div class="form-outline">
                                                <input type="text" name="address" id="form5" class="form-control order-form-input" />
                                            </div>
                                            @error('address')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <input type="hidden" name="price" value="{{ $tours->price }}">
                                    </div>
                                    <div>
                                        <input type="hidden" name="currency" value="{{ $tours->currency }}">
                                    </div>
                                    <div>
                                        <input type="hidden" name="tour_id" value="{{ $tours->id }}">
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
                                            <button style="color: black" type="submit" id="" class="btn btn-primary d-block mx-auto ">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>

            <!-- Right Column - Static Card with Product Information -->
            <div class="col-md-6"><br><br>
                <!-- Static card with product information -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tour Information</h5>
                        <hr>
                        <p><strong>Tour Name:</strong> {{ $tours->tittle }}</p>
                        <p><strong>Subtotal:</strong>BDT {{ $tours->price }}  {{ $tours->currency }}</p>
                        <!-- Calculate total based on your logic -->
                        <p><strong>Total: BDT {{ $tours->price }} </strong> <!-- Calculate and display the total here --></p>

                        <hr>
                        <p><strong>To pay: BDT {{ $tours->price }} </strong>
                    </div>
                </div> <br>
            </div>
        </div>
    </div>
</body>
</html>
