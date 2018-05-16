@extends('layouts.form')

@section('title', 'Daftar Hadir KP / PKL')
@section('h1', 'Daftar Hadir KP / PKL')

@section('content')
<form action="{{ url('daftar_hadir_kp') }}" method="post">
     {{ csrf_field() }}
    <div class="form-horizontal content-center container-fluid">
        <div class="row">
            <div class="col-md-6 ">
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
                                <option value="GIK">GIK</option>
                            </select>
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
            
            <Div class="col-md-6">
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
</form> 
@endsection