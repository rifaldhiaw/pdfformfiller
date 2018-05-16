@extends('layouts.form')

@section('title', 'Alih Program dari Dalam Unila')
@section('h1', 'Alih Program dari Dalam Unila')

@section('content')
<form action="{{ url('alih_program_dalam') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="header">Data Studi</div>
                    <div class="content">
                        <div class="form-group  ">
                            <label  for="smt">Semester:</label>
                            <div >
                                <input type="text" class="form-control" name="smt">    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label  for="ipk">IPK:</label>
                                    <div >
                                        <input type="text" class="form-control" name="ipk">    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label  for="sks">SKS:</label>
                                    <div >
                                        <input type="text" class="form-control" name="sks">    
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