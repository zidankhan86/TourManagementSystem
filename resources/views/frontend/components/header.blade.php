<header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
               <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="header-info-left">
                            <ul>
                               <p>Tour Management System</p>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-info-right f-right">
                            <ul class="header-social">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                               <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                   </div>
               </div>
            </div>
           <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                              <h4  style="color:rgb(5, 56, 71)">TMS</h4>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('landing.page') }}">Home</a></li>
                                        <li><a href="#">Services</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('product.page') }}">Rent Car</a></li>
                                        <li><a href="{{ url('/hotel') }}">Hotel</a></li>
                                        <li><a href="{{route ('tour.package.page') }}">Tour</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url ('/about') }}">About</a>
                                            <li><a href="{{url ('/contact') }}">Contact</a>
                                        </li>

                                        @auth
                                       @if (auth()->user()->role=='customer')
                                       <li><a href="{{route ('logout') }}" style="color: brown">Logout</a></li>

                                       <li><p>{{ auth()->user()->name }}</p>
                                        <ul class="submenu">
                                            <li><a href="{{route ('customer.profile') }}">My Profile</a></li>

                                        </ul>
                                    </li>
                                       @endif

                                       @else
                                        <li><a href="{{route ('login') }}" style="color: brown">SignIn</a></li>
                                        <li><a href="{{route ('registration.website') }}" style="color: blueviolet">SignUp</a></li>

                                        @endauth
                                    </ul>

                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>
