@extends('layouts.form')

@section('title', 'Ujain SKripsi')
@section('h1', 'Ujian SKripsi')

@section('content')
<form action="{{ url('ujian_skripsi') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center ">
        <div class="row">
            <div class="col-md-6">
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

                <div class="card">
                    <div class="header">Print / Download</div>
                    <div class="content">
                        <div class="form-group">
                            <div class=" text-center">
                                <button type="submit" class="btn btn-primary btn-lg my-0">
                                    Print / Download
                                </button>
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
                            <label for="ketua_penguji">Ketua Penguji:</label>
                            <select class="form-control" name="ketua_penguji">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label   for="status_dosen2">Status Dosen ke-2:</label>
                            <div class="radio">
                                <input type="radio" name="status_dosen2" id="radio1" value="Sekretaris Penguji">
                                <label for="radio1">
                                    Sekretaris Penguji
                                </label>    
                            </div>
                            <div class="radio">
                                <input type="radio" name="status_dosen2"  id="radio2" value="Penguji Pembahas" checked="">
                                <label for="radio2">
                                    Penguji Pembahas
                                </label>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="dosen2">Dosen ke-2:</label>
                            <select class="form-control" name="dosen2">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  ">
                            <label for="penguji">Penguji:</label>
                            <select class="form-control" name="penguji">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  ">
                            <label   for="tanggal_berkas">Tanggal Berkas:</label>
                            <div>
                                <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tanggal_berkas" id="tanggal_berkas" data-datepicker-color="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> 
@endsection