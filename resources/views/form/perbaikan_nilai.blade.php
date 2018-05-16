@extends('layouts.form')

@section('title', 'Perbaikan Nilai')
@section('h1', 'Perbaikan Nilai')

@section('content')
<form action="{{ url('perbaikan_nilai') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center container-fluid">
        <div class="row">

            <div class="col-md-8 offset-md-2 ">
                <div class="card">

                    <div class="header">Data Matakuliah</div>

                    <div class="content">
                        <div class="form-group  ">
                            <label  for="nama_mk">Nama MK:</label>
                            <div >
                                <input type="text" class="form-control" name="nama_mk">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group  ">
                                    <label  for="kode_mk">Kode MK:</label>
                                    <div >
                                        <input type="text" class="form-control" name="kode_mk">    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group  ">
                                    <label  for="semester">Semester:</label>
                                    <div >
                                        <input type="text" class="form-control" name="semester">    
                                    </div>
                                </div>
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