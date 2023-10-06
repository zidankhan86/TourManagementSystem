@extends('backend.master')


@section('main')

<div class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Hello, <span>Welcome Here</span></h1>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                    <div class="page-title">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-car color-success border-success"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Tour</div>
                                <div class="stat-digit">{{ $totalTour }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-car color-primary border-primary"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Support Tour</div>
                                <div class="stat-digit">{{ $totalSupportTour }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user color-pink border-pink"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total User</div>
                                <div class="stat-digit">{{ $totalUser }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-car color-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Tour Booking</div>
                                <div class="stat-digit">{{ $totalBooking }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-plane color-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Flight</div>
                                <div class="stat-digit">{{ $totalFlight }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-hotel color-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Hotel</div>
                                <div class="stat-digit">{{ $totalHotel }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-plane color-pink border-pink"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Flight Booking</div>
                                <div class="stat-digit">{{ $totalFlightBook }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-hotel color-pink border-pink"></i>
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Hotel Booking</div>
                                <div class="stat-digit">{{ $totalFlightBook }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /# row -->




            <div class="row">
                <div class="col-lg-12">
                    <div class="footer">
                        <p>2023 IUBAT - <a href="#">TourManagement.com</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
