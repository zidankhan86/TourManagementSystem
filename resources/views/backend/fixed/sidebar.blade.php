<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                        <!-- <img src="images/logo.png" alt="" /> --><span>Tour Management</span></a></div>
                <li class="label">Main</li>
                <li><a class=""><i class="ti-home"></i> Dashboard <span

                            class="sidebar-collapse-icon"></span></a>
                </li>

                <li class="label">Home</li>
                <li><a href="{{route ('tour.list') }}"><i class="ti-car"></i> Tour</a>

                </li>


                <li><a class="sidebar-sub-toggle"><i class="ti-thumb-up"></i> Support Package <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
            <ul>
                <li><a href="{{route ('tour.support.form') }}"><i class="ti-plus"></i> Add Support Package</a></li>
                <li><a href="{{route ('tour.support.list') }}"><i class="ti-list"></i> Support Package List</a></li>

            </ul>
               </li>
               <li><a href="{{route ('booking.list') }}"><i class="ti-list-ol"></i> Booking List</a></li>

                <li><a href="{{route ('logout') }}"><i class="ti-close"></i> Logout</a></li>

            </ul>
        </div>
    </div>
</div>
