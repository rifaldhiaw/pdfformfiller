@extends('layouts.form')

@section('title', 'Pengajuan Tema')
@section('h1', 'Pengajuan Tema')

@section('content')
<form action="{{ url('pengajuan_tema') }}" method="post">
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
                        <div class="form-group  ">
                            <label for="dosen_pa_id">Dosen PA:</label>
                                <select class="form-control" name="dosen_pa_id">
                                    @foreach ($dosens as $dosen)
                                    <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="header">Data Tema Penelitian</div>
                    <div class="content">

                        <div class="form-group  ">
                            <label   for="karya_tulis">Jenis Karya Tulis:</label>
                            <div >
                                <div class="radio">
                                    <input type="radio" name="karya_tulis" id="radio3" value="SKRIPSI">
                                    <label for="radio3">
                                        SKRIPSI
                                    </label>    
                                </div>
                                <div class="radio">
                                    <input type="radio" name="karya_tulis" id="radio4" value="TUGAS AKHIR" checked="">
                                    <label for="radio4">
                                        TUGAS AKHIR
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label   for="judul_1">Judul 1:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="judul_1"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group  ">
                            <label   for="judul_2">Judul 2:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="judul_2"></textarea>
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

                        <div class="form-group  ">
                            <label for="dosen_pa">Dosen PA:</label>
                            <select class="form-control" name="dosen_pa">
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