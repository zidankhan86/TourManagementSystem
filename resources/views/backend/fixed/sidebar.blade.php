<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('home') }}">
                        <!-- <img src="images/logo.png" alt="" /> --><span>Tour Management</span></a></div>
                <li class="label">Main</li>
                <li><a class="" href="{{ route('home') }}"><i class="ti-home"></i> Dashboard <span
                            class="sidebar-collapse-icon"></span></a>
                </li>

                <li class="label">Home</li>
                <li><a href="{{route ('tour.list') }}"><i class="ti-car"></i> Tour</a>
                </li>

                </li>
                <li><a href="{{route ('hotel.list') }}"><i class="ti-home"></i> Hotel</a>
                </li>



            </li>
            <li><a href="{{ route('category.list') }}"><i class="fas fa-location"></i>Car Location</a>
            </li>


        </li>
        <li><a href="{{ route('products.index') }}"><i class="fas fa-car"></i>Car</a>
        </li>

                <li><a class="sidebar-sub-toggle"><i class="ti-thumb-up"></i> Support Package <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                <ul>

                <li><a href="{{route ('tour.support.form') }}"><i class="ti-plus"></i> Add Support Package</a></li>
                <li><a href="{{route ('tour.support.list') }}"><i class="ti-list"></i> Support Package List</a></li>
                </ul>
                </li>
                <li><a href="{{route ('booking.list') }}"><i class="ti-list-ol"></i>Tour Booking List</a></li>
                <li><a href="{{ route('booking.hotel') }}"><i class="ti-list-ol"></i>Hotel Booking List</a></li>
                <li><a href="{{ route('booking.flight') }}"><i class="ti-list-ol"></i>Flight Booking List</a></li>

                <li><a class="sidebar-sub-toggle"><i class="fas fa-book"></i> Report <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                <ul>

                <li><a href="{{route ('report') }}"><i class="ti-car"></i>Tour Report</a></li>
                <li><a href="#"><i class="ti-home"></i> Hotel Report</a></li>
                <li><a href="#"><i class="fas fa-plane"></i> Flight Report</a></li>
                </ul>
                </li>
                <li><a href="{{route ('logout') }}" class="text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

            </ul>
        </div>
    </div>
</div>
