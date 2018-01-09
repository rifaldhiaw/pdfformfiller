@extends('layouts.form')

@section('title', 'Seminar Usul Hasil')
@section('h1', 'Seminar Usul Hasil')

@section('content')
<form action="{{ url('seminar_usulhasil') }}" method="post">
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
                            <label for="dosen_pa">Dosen PA:</label>
                            <select class="form-control" name="dosen_pa">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">Data Seminar </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label   for="jenis_seminar">Jenis Seminar:</label>
                                    <div class="radio">
                                        <input type="radio" name="jenis_seminar" id="radio1" value="USUL">
                                        <label for="radio1">
                                            USUL
                                        </label>    
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="jenis_seminar"  id="radio2" value="HASIL" checked="">
                                        <label for="radio2">
                                            HASIL
                                        </label>
                                    </div>
                                </div>
                            </div>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label  for="nama">Ruang :</label>
                                    <select class="form-control" name="ruang">
                                        <option value="MIPA T Lt2">MIPA T Lt2</option>
                                        <option value="MIPA T Lt2">MIPA T Lt2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label  for="nama">Pukul :</label>
                                    <input type="text" class="form-control" name="pukul" placeholder="12.00 WIB">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="header">Data Skripsi </div>
                    <div class="content">

                        <div class="form-group  ">
                            <label   for="judul">Judul Skripsi:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="judul"></textarea>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="dosen_pembimbing">Dosen Pembimbing:</label>
                            <select class="form-control" name="pembimbing">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label   for="status_dosen2">Status Dosen ke-2:</label>
                            <div class="radio">
                                <input type="radio" name="status_dosen2" id="radiostatus_dosen21" value="Pembimbing">
                                <label for="radiostatus_dosen21">
                                    Pembimbing
                                </label>    
                            </div>
                            <div class="radio">
                                <input type="radio" name="status_dosen2"  id="radiostatus_dosen22" value="Pembahas" checked="">
                                <label for="radiostatus_dosen22">
                                    Pembahas
                                </label>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="pembahas">Nama Dosen 2:</label>
                            <select class="form-control" name="nama_dosen2">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->nama}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  ">
                            <label for="pembahas">Pembahas:</label>
                            <select class="form-control" name="pembahas">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->nama}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  ">
                            <label   for="tanggal_berkas ">Tanggal Berkas:</label>
                            <div>
                                <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tanggal_berkas" id="tanggal_berkas" data-datepicker-color="">
                            </div>
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