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
                                <a href=" {{ url('pengisian_krs') }} " style="text-decoration:none;">
                                    <div class="menu-list">KRS Semsentara</div>
                                </a>
                                <a href=" {{ url('perbaikan_nilai') }} " style="text-decoration:none;">
                                    <div class="menu-list">Perbaikan Nilai</div>
                                </a>
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
                                <a href=" {{ url('daftar_hadir_kp') }} " style="text-decoration:none;">
                                    <div class="menu-list">Daftar Hadir Seminar PKL</div>
                                </a>
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
                    <div class="col-xs-8 offset-xs-2 col-sm-4">
                        <div class="row">
                            <div class=" col-xs-8 offset-xs-2 col-sm-3 menu-form">
                                <div class="menu-text">
                                    <i class="now-ui-icons business_chart-bar-32 menu-ico"></i>
                                    <p> Seminar </p>
                                </div>
                            </div>
                            <div class="col-sm-9">
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
                    <div class="col-xs-8 offset-xs-2 col-sm-4">
                        <div class="row">
                            <div class=" col-xs-8 offset-xs-2 col-sm-3 menu-form">
                                <div class="menu-text">
                                    <i class="now-ui-icons design_bullet-list-67 menu-ico"></i>
                                    <p> Ceklist </p>
                                </div>
                            </div>
                            <div class="col-sm-9">
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
@endsection