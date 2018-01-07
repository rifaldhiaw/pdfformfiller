@extends('layouts.form')

@section('title', 'Alih Program dari Luar Unila')
@section('h1', 'Alih Program dari Luar Unila')

@section('content')
<form action="{{ url('alih_program_dalam') }}" method="post">
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
                            <label  for="prodi">Program Studi:</label>
                            <div >
                                <input type="text" class="form-control" name="prodi">    
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label  for="universitas">Universitas:</label>
                            <div >
                                <input type="text" class="form-control" name="universitas">    
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label  for="akreditas">Akreditas:</label>
                            <div >
                                <input type="text" class="form-control" name="akreditas">    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="header">Data Studi</div>
                    <div class="content">
                        <div class="form-group  ">
                            <label  for="sks">SKS:</label>
                            <div >
                                <input type="text" class="form-control" name="sks">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label  for="ipk">IPK:</label>
                            <div >
                                <input type="text" class="form-control" name="ipk">    
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label  for="smt">Semester:</label>
                            <div >
                                <input type="text" class="form-control" name="smt">    
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