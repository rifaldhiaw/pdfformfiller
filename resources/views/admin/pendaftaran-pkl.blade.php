<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href=" {{ URL::asset('img/favicon.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap core CSS     -->
    <link href=" {{ URL::asset('css/admin/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href=" {{ URL::asset('css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href=" {{ URL::asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=" {{ URL::asset('css/demo.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=" {{ URL::asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image=" {{ URL::asset('img/sidebar-5.jpg') }}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    @include('admin/part/sidebar')

    <div class="main-panel">

        @include('admin/part/navbar')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NPM</th>
                                        <th>Nama</th>
                                        <th>Tempat PKL</th>
                                        <th>Dibuat Pada</th>
                                        <th>Print</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($daftar_kps as $daftar_kp)
                                        <tr>
                                            <td>{{ $daftar_kp->npm }}</td>
                                            <td>{{ $daftar_kp->nama }}</td>
                                            <td>{{ $daftar_kp->tempat_pkl }}</td>
                                            <td>{{ $daftar_kp->dibuat }}</td>
                                            <td>
                                                <form action="{{ route('print_daftar_pkl') }}" method="post">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $daftar_kp->id }}">
                                                    <button type="submit" class="btn btn-primary btn-xs">print</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('delete_daftar_pkl') }}" method="post">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $daftar_kp->id }}">
                                                    <button type="submit" class="btn btn-warning btn-xs">delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src=" {{ URL::asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src=" {{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src=" {{ URL::asset('js/bootstrap-checkbox-radio-switch.js') }}"></script>

	<!--  Charts Plugin -->
	<script src=" {{ URL::asset('js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src=" {{ URL::asset('js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"  type="text/javascript" ></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src=" {{ URL::asset('js/light-bootstrap-dashboard.js') }}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src=" {{ URL::asset('js/demo.js') }}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>