@extends('layouts.form')

@section('title', 'Form Pelayanan')
@section('h1', 'Form Pelayanan')

@section('content')
<div class="row">
    <div class="col-md-4 col-xs-12">

        @if (!Auth::guest())

        <div class="card mt-4">
            <div class="header">Data Diri</div>
            <div class="content">
                        <div class="text text-info">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="now-ui-icons users_single-02 profil-ico"></i>
                                </div>
                                <div class="col-md-8 mt-4">
                                    <h5>{{ Auth::User()->nama }}</h5>
                                    <h6>{{ Auth::User()->npm }} </h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-primary footer-profil">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Prodi</p>
                                </div>
                                <div class="col-md-8">
                                    <p>: {{ Auth::User()->prodi }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Dosen PA</p>
                                </div>
                                <div class="col-md-8">
                                    <p>: {{ Auth::User()->dosen->nama }}</p> 
                                </div>
                            </div>
                        </div>
                    <hr>
                    <div class="button-container text-center mx-2">
                        <a href="{{ url('/update_data_view') }}">
                            <button class="btn btn-warning btn-fill">EDIT</button>
                        </a>
                    </div>
                <!-- </form> -->
            </div>
        </div>
        @else

        <!-- <div class="card">
            <div class="header">Login</div>
            <div class="content">
                    <form class="mt-3" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control" name="password" required
                                    placeholder="Password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mt-5">
                            <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-info">
                                        Login
                                    </button>
                            </div>
                        </div>
                    </form>
                    <div class="bg-dark">
                            <div class="row justify-content-center">
                                <p> OR </p>
                            </div>

                            <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        Register Here
                                    </button>
                            </div>
                    </div>

            </div>
        </div> -->
        <div class="row">
                        <div class="card card-signup" data-background-color="blue">
                            <form class="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="header text-center">
                                    <h4 class="title-up">LOGIN</h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10">
                                                <input id="password" type="password" class="form-control" name="password" required
                                                placeholder="Password">

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-neutral btn-lg">LOGIN</button>
                                </div>
                                <div class="footer-reg text-center">
                                    OR<br><Br>
                                    <a href="{{url('/register')}}" class="btn btn-primary btn-round btn-md">Register Here</a>
                                </div>
                            </form>
                        </div>
                    </div>
        @endif
        
    </div>
    <div class="col-md-8 col-xs-12">

        <div class="row container-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-6 mt-4">
                <div class="row">
                    <div class="col-xs-8 offset-xs-2 col-sm-4 menu-form">
                        <div class="menu-text">
                            <i class="now-ui-icons education_paper menu-ico"></i>
                            <p>KRS</p>
                        </div>
                    </div>
                    <div class="col-sm-8 menu-lists">
                        <br>
                        <a href=" {{ url('pengisian_krs') }} " style="text-decoration:none;">
                            <div class="menu-list">KRS Semsentara</div>
                        </a>
                        <a href=" {{ url('perbaikan_nilai') }} " style="text-decoration:none;">
                            <div class="menu-list">Perbaikan Nilai</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-6 mt-4">
                <div class="row">
                    <div class="col-xs-8 offset-xs-2 col-sm-4 menu-form">
                        <div class="menu-text">
                            <i class="now-ui-icons business_badge menu-ico"></i>
                            <p> PKL/KP </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <a href=" {{ route('pendaftaran-pkl') }} " style="text-decoration:none;">
                            <div class="menu-list">Pendaftaran PKL</div>
                        </a>
                        <a href=" {{ url('seminar-pkl') }} " style="text-decoration:none;">
                            <div class="menu-list">Seminar PKL</div>
                        </a>
                        <a href=" {{ url('daftar_hadir_kp') }} " style="text-decoration:none;">
                            <div class="menu-list">Daftar Hadir Seminar PKL</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row container-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-6  mt-4">
                <div class="row">
                    <div class=" col-xs-8 offset-xs-2 col-sm-4 menu-form">
                        <div class="menu-text">
                            <i class="now-ui-icons design-2_ruler-pencil menu-ico"></i>
                            <p> Skripsi </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <a href=" {{ url('pengajuan_tema') }} " style="text-decoration:none;">
                            <div class="menu-list">Pengajuan Tema Penelitian</div>
                        </a>
                        <a href=" {{ url('pengambilan_data') }} " style="text-decoration:none;">
                            <div class="menu-list">Izin Pengambilan Data</div>
                        </a>
                        <a href=" {{ url('ujian_skripsi') }} " style="text-decoration:none;">
                            <div class="menu-list">Ujian Skripsi</div>
                        </a>
                    </div>
                </div>   
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-6 mt-4">
                <div class="row">
                    <div class=" col-xs-8 offset-xs-2 col-sm-4 menu-form">
                        <div class="menu-text">
                            <i class="now-ui-icons business_chart-bar-32 menu-ico"></i>
                            <p> Seminar </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <a href=" {{ url('seminar_usulhasil') }} " style="text-decoration:none;">
                            <div class="menu-list">Seminar Usul</div>
                        </a>
                        <a href=" {{ url('seminar_usulhasil') }} " style="text-decoration:none;">
                            <div class="menu-list">Seminar Hasil</div>
                        </a>
                        <a href=" {{ url('daftar-hadir-skripsi') }} " style="text-decoration:none;">
                            <div class="menu-list">Daftar Hadir Seminar Skripsi</div>
                        </a>
                    </div>
                </div>   
            </div>
        </div>
        <div class="row container-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-6 offset-lg-3 mt-4">
                <div class="row">
                    <div class=" col-xs-8 offset-xs-2 col-sm-4 menu-form">
                        <div class="menu-text">
                            <i class="now-ui-icons design_bullet-list-67 menu-ico"></i>
                            <p> Ceklist </p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <a href=" {{ url('alih_program_luar') }} " style="text-decoration:none;">
                            <div class="menu-list">Alih Program dari Luar Unila</div>
                        </a>
                        <a href=" {{ url('alih_program_dalam') }} " style="text-decoration:none;">
                            <div class="menu-list">Alih Program dari Dalam Unila</div>
                        </a>
                        <a href=" {{ url('data_alumni') }} " style="text-decoration:none;">
                            <div class="menu-list">Form Data Lulusan</div>
                        </a>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection