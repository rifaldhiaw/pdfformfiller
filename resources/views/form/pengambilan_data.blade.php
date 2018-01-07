@extends('layouts.form')

@section('title', 'Izin Pengambilan Data')
@section('h1', 'Izin Pengambilan Data')

@section('content')
<form action="{{ url('pengambilan_data') }}" method="post">
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
                            <label for="pembimbing">Pembimbing:</label>
                                <select class="form-control" name="pembimbing">
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
                    <div class="header">Data Penelitian : </div>
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
                            <label   for="judul">Judul:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="judul"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group  ">
                            <label   for="nama_data">Nama Data:</label>
                            <div >
                                <input type="text" class="form-control" name="nama_data">
                            </div>
                        </div>
                        
                        <div class="form-group  ">
                            <label   for="tempat">Tempat:</label>
                            <div >
                                <input type="text" class="form-control" name="tempat">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label   for="alamat">Alamat:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="alamat"></textarea>
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