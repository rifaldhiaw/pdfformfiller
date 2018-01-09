@extends('layouts.form')

@section('title', 'Daftar Hadir Seminar Skripsi / TA')
@section('h1', 'Daftar Hadir Seminar Skripsi / TA')

@section('content')
<form action="{{ url('daftar-hadir-skripsi') }}" method="post">
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
                    </div>
                </div>
                <div class="card">
                    <div class="header">Data Seminar </div>
                    <div class="content">
                        <div class="form-group  ">
                            <label  for="nama">Jenis Seminar:</label>
                            <select class="form-control" name="jenis_seminar">
                                <option value="USUL PENELITIAN">USUL PENELITIAN</option>
                                <option value="HASIL PENELITIAN">HASIL PENELITIAN</option>
                                <option value="TUGAS AKHIR">TUGAS AKHIR</option>
                            </select>
                        </div>
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
                                    <label   for="tempat_pkl">Tanggal Seminar:</label>
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
                    <div class="header">Data Skripsi / TA </div>
                    <div class="content">
                        <div class="form-group  ">
                            <label   for="judul">Judul Skripsi / TA:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="judul"></textarea>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="pembimbing">Pembimbing Utama:</label>
                            <select class="form-control" name="pembimbing">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->nama}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label   for="dosen2">Status Dosen ke-2:</label>
                            <div class="radio">
                                <input type="radio" name="status_dosen2" id="radio1" value="Pembimbing">
                                <label for="radio1">
                                    Pembimbing
                                </label>    
                            </div>
                            <div class="radio">
                                <input type="radio" name="status_dosen2"  id="radio2" value="Pembahas" checked="">
                                <label for="radio2">
                                    Pembahas
                                </label>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="nama_dosen2">Dosen ke-2:</label>
                            <select class="form-control" name="nama_dosen2">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->nama}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  ">
                            <label for="pembahas">Pembahas Utama:</label>
                            <select class="form-control" name="pembahas">
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