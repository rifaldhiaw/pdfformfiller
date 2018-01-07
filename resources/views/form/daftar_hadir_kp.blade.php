@extends('layouts.form')

@section('title', 'Daftar Hadir KP / PKL')
@section('h1', 'Daftar Hadir KP / PKL')

@section('content')
<form action="{{ url('daftar_hadir_kp') }}" method="post">
     {{ csrf_field() }}
    <div class="form-horizontal content-center ">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">Data Diri</div>
                    <div class="content">

                        <div class="form-group  ">
                            <label  for="nama">Nama:</label>
                            <div >
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="npm">NPM:</label>
                            <div >
                                <input type="text" class="form-control" name="npm">    
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label   for="program_studi">Program Studi:</label>
                            <div >
                                <div class="radio">
                                    <input type="radio" name="program_studi" id="radio1" value="S1 Ilmu Komputer">
                                    <label for="radio1">
                                        S1 Ilmu Komputer
                                    </label>    
                                </div>
                                <div class="radio">
                                    <input type="radio" name="program_studi" id="radio2" value="D3 Manajemen Informatika" checked="">
                                    <label for="radio2">
                                        D3 Manajemen Informatika
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">Data Seminar </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-3">
                                <label  for="nama">Hari:</label>
                                <select class="form-control" name="hari">
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                </select>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group  ">
                                    <label   for="tanggal">Tanggal Seminar:</label>
                                    <div>
                                        <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tanggal" id="tanggal" data-datepicker-color="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label  for="nama">Ruang :</label>
                            <select class="form-control" name="ruang">
                                <option value="MIPA T Lt2">MIPA T Lt2</option>
                                <option value="MIPA T Lt2">MIPA T Lt2</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="header">Data KP / PKL </div>
                    <div class="content">

                        <div class="form-group  ">
                            <label   for="judul">Judul Laporan:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="judul"></textarea>
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label   for="tempat_kp">Tempat PKL:</label>
                            <div >
                                <input type="text" class="form-control" name="tempat_kp">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label   for="alamat">Alamat PKL:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="alamat"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group  ">
                            <label   for="kabupaten">Kabupaten:</label>
                            <div >
                                <input type="text" class="form-control" name="kabupaten">
                            </div>
                        </div>
                        
                        <div class="form-group  ">
                            <label   for="provinsi">Provinsi:</label>
                            <div >
                                <input type="text" class="form-control" name="provinsi">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label for="pembimbing">Pembimbing :</label>
                            <select class="form-control" name="pembimbing">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->nama}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space"></div>
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="form-group  ">
                <button type="submit" class="btn btn-info">Print</button>
            </div>
        </div>
    </div>
</form> 
@endsection