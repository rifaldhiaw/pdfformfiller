@extends('layouts.form')

@section('title', 'Perbaikan Nilai')
@section('h1', 'Perbaikan Nilai')

@section('content')
<form action="{{ url('perbaikan_nilai') }}" method="post">
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
                            <label   for="prodi">Program Studi:</label>
                            <div >
                                <div class="radio">
                                    <input type="radio" name="prodi" id="radio1" value="S1 Ilmu Komputer">
                                    <label for="radio1">
                                        S1 Ilmu Komputer
                                    </label>    
                                </div>
                                <div class="radio">
                                    <input type="radio" name="prodi" id="radio2" value="D3 Manajemen Informatika" checked="">
                                    <label for="radio2">
                                        D3 Manajemen Informatika
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card">

                    <div class="header">Data Matakuliah</div>

                    <div class="content">
                        <div class="form-group  ">
                            <label  for="nama_mk">Nama MK:</label>
                            <div >
                                <input type="text" class="form-control" name="nama_mk">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="kode_mk">Kode MK:</label>
                            <div >
                                <input type="text" class="form-control" name="kode_mk">    
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="semester">Semester:</label>
                            <div >
                                <input type="text" class="form-control" name="semester">    
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label for="dosen_pj">Dosen PJ:</label>
                            <select class="form-control" name="dosen_pj">
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