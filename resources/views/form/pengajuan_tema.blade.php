@extends('layouts.form')

@section('title', 'Pengajuan Tema')
@section('h1', 'Pengajuan Tema')

@section('content')
<form action="{{ url('pengajuan_tema') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-md-2 ">
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
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
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
        </div> 
    </div>
    
</form> 
@endsection