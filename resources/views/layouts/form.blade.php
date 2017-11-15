<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ URL::asset('img/favicon.png') }} ">

        <title>@yield('title')</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        
        <!-- CSS Files -->
        <link href=" {{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href=" {{ URL::asset('css/now-ui-kit.css') }}" rel="stylesheet" />
        
        <!-- CSS custom edit -->
        <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" />

    </head>

<body class="template-page">
    @include('part.navbar')
    <div class="wrapper">

        <div class="page-header page-header-small" filter-color="blue">
            <div class="page-header-image" data-parallax="false" style="background-image: url('{{ URL::asset('img/rd_header.jpg') }}');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="logo-unila" src=" {{ URL::asset('img/logo-unila.png') }}" alt="Logo Unila">
                    <h1 class="h1-seo">@yield('h1')</h1>
                    <h6>Ilmu Komputer | FMIPA | Universitas Lampung</h6>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                @yield('content')
            </div>
        </div>
        
        @include('part.footer')

    </div>
</body>
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