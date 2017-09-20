<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ URL::asset('img/favicon.png') }} ">

        <title>Form Pengajuan</title>

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
    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md bg-info fixed-top navbar-transparent" color-on-scroll="200">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="http://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                    Now Ui Kit
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ URL::asset('/img/blurred-image-1.jpg') }}">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <p>Link</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <p>Link</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="hidden-lg-up">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="hidden-lg-up">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="hidden-lg-up">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="blue">
            <div class="page-header-image" data-parallax="false" style="background-image: url('{{ URL::asset('img/rd_header.jpg') }}');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="logo-unila" src=" {{ URL::asset('img/logo-unila.png') }}" alt="Logo Unila">
                    <h1 class="h1-seo">Form pelayanan</h1>
                    <h6>Ilmu Komputer - FMIPA - Universitas Lampung</h6>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 offset-xs-2 col-sm-4 offset-sm-2">
                        <div class="row">
                            <div class="col-xs-8 offset-xs-2 col-sm-4 menu-form">
                                <div class="menu-text">
                                    <i class="now-ui-icons education_paper menu-ico"></i>
                                    <p>KRS</p>
                                </div>
                            </div>
                            <div class="col-sm-8 menu-lists">
                                <br>
                                <div class="menu-list">KRS Sementara</div>
                                <div class="menu-list">Perbaikan Nilai</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-8 offset-xs-2 col-sm-4">
                        <div class="row">
                            <div class="col-xs-8 offset-xs-2 col-sm-4 menu-form">
                                <div class="menu-text">
                                    <i class="now-ui-icons business_badge menu-ico"></i>
                                    <p> PKL/KP </p>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <br>
                                <a href=" {{ route('pendaftaran-pkl') }} " style="text-decoration:none;">
                                    <div class="menu-list">Pendaftaran PKL</div>
                                </a>
                                <div class="menu-list">Seminar PKL</div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-xs-8 offset-xs-2 col-sm-4">
                        <div class="row">
                            <div class=" col-xs-8 offset-xs-2 col-sm-3 menu-form">
                                <div class="menu-text">
                                    <i class="now-ui-icons design-2_ruler-pencil menu-ico"></i>
                                    <p> Skripsi </p>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="menu-list">Pengajuan Tema Penelitian</div>
                                <div class="menu-list">Izin Pengambilan Data</div>
                                <div class="menu-list">Daftar Hadir Seminar</div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-xs-8 offset-xs-2 col-sm-4">
                        <div class="row">
                            <div class=" col-xs-8 offset-xs-2 col-sm-3 menu-form">
                                <div class="menu-text">
                                    <i class="now-ui-icons business_chart-bar-32 menu-ico"></i>
                                    <p> Seminar </p>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="menu-list">Seminar Usul</div>
                                <div class="menu-list">Seminar Hasil</div>
                                <div class="menu-list">Ujian Skripsi</div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-xs-8 offset-xs-2 col-sm-4">
                        <div class="row">
                            <div class=" col-xs-8 offset-xs-2 col-sm-3 menu-form">
                                <div class="menu-text">
                                    <i class="now-ui-icons design_bullet-list-67 menu-ico"></i>
                                    <p> Ceklist </p>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="menu-list">Alih Program dari Luar Unila</div>
                                <div class="menu-list">Alih Program dari Dalam Unila</div>
                                <div class="menu-list">Form Data Lulusan</div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
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