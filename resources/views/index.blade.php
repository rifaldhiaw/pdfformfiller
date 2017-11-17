@extends('layouts.form')

@section('title', 'Form Pelayanan')
@section('h1', 'Form Pelayanan')

@section('content')
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
                                <a href=" {{ url('seminar-pkl') }} " style="text-decoration:none;">
                                    <div class="menu-list">Seminar PKL</div>
                                </a>
                                <div class="menu-list">Daftar Hadir Seminar PKL</div>
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
                                <div class="menu-list">Ujian Skripsi</div>
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
                                <a href=" {{ route('daftar-hadir-skripsi') }} " style="text-decoration:none;">
                                    <div class="menu-list">Daftar Hadir Seminar Skripsi</div>
                                </a>
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
@endsection