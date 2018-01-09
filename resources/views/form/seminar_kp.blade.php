@extends('layouts.form')

@section('title', 'Seminar KP / PKL')
@section('h1', 'Seminar KP / PKL')

@section('content')
<form action="{{ url('seminar-pkl') }}" method="post">
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
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="header">Data PKL / KP </div>
                    <div class="content">
                        <div class="form-group  ">
                            <label   for="judul">Judul PKL / KP:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="judul"></textarea>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label   for="tempat_pkl">Tempat PKL / KP:</label>
                            <div >
                                <textarea class="form-control" rows="2" name="tempat_pkl"></textarea>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="dosen_pembimbing">Dosen Pembimbing:</label>
                            <select class="form-control" name="dosen_pembimbing">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  ">
                            <label  for="pembimbing_lapang">Nama Pembimbing Lapang:</label>
                            <div >
                                <input type="text" class="form-control" name="pembimbing_lapang">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label  for="nip_lapang">NIP Pembimbing Lapang:</label>
                            <div >
                                <input type="text" class="form-control" name="nip_lapang">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="koor_pkl">Koor KP / PKL:</label>
                            <select class="form-control" name="koor_pkl">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
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