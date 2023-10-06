<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Tour Management System</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <!-- Styles -->
    <link href="{{url ('css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{url ('css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{url ('css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{url ('css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{url ('css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{url ('css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{url ('css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{url ('css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{url ('css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{url ('css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{url ('css/style.css') }}" rel="stylesheet">
</head>

<body>



@include('backend.fixed.sidebar')


    <!-- /# sidebar -->





    @include('backend.fixed.header')


    <div class="content-wrap">


        @yield('main')


        @include('sweetalert::alert')



    </div>

    <!-- jquery vendor -->
    <script src="{{url ('js/lib/jquery.min.js') }}"></script>
    <script src="{{url ('js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{url ('js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{url ('js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{url ('js/lib/bootstrap.min.js') }}"></script>
    <script src="{{url ('js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{url ('js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{url ('js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{url ('js/lib/calendar-2/pignose.init.js') }}"></script>


    <script src="{{url ('js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{url ('js/lib/weather/weather-init.js') }}"></script>
    <script src="{{url ('js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{url ('js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{url ('js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{url ('js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{url ('js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{url ('js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{url ('js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{url ('js/dashboard2.js') }}"></script>
</body>

</html>
