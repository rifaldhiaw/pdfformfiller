<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ URL::asset('ad/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ URL::asset('ad/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ URL::asset('ad/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('ad/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('ad/css/demo.css') }}" rel="stylesheet" />
    
        <!-- CSS Files -->
        <link href=" {{ URL::asset('css/now-ui-kit2.css') }}" rel="stylesheet" />

        <!-- CSS custom edit -->
        <link href="{{ URL::asset('css/custom2.css') }}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
	@include('part.user_sidebar')
    <div class="main-panel">
    	@include('part.admin_nav')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                	@yield('content')
                </div>
            </div>
        </div>

        @include('part.admin_footer')
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ URL::asset('ad/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('ad/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ URL::asset('ad/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ URL::asset('ad/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ URL::asset('ad/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{ URL::asset('ad/js/demo.js') }}"></script>

<!--   Core JS Files   -->
<script src="{{ URL::asset('js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/core/tether.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ URL::asset('js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ URL::asset('js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ URL::asset('js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ URL::asset('js/now-ui-kit.js') }}" type="text/javascript"></script>


</html>
