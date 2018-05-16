@extends('layouts.form')

@section('title', 'Alih Program dari Luar Unila')
@section('h1', 'Alih Program dari Luar Unila')

@section('content')
<form action="{{ url('alih_program_luar') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="header">Data Studi</div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label  for="nama">Nama:</label>
                                    <div >
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label  for="npm">NPM:</label>
                                    <div >
                                        <input type="text" class="form-control" name="npm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label  for="universitas">Asal Universitas:</label>
                            <div >
                                <input type="text" class="form-control" name="universitas">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label  for="prodi">Prodi:</label>
                                    <div >
                                        <input type="text" class="form-control" name="prodi">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label  for="akreditasi">Akreditasi:</label>
                                    <div >
                                        <input type="text" class="form-control" name="akreditasi">    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group  ">
                                    <label  for="sks">SKS:</label>
                                    <div >
                                        <input type="text" class="form-control" name="sks">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group  ">
                                    <label  for="ipk">IPK:</label>
                                    <div >
                                        <input type="text" class="form-control" name="ipk">    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
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