@extends('layouts.form')

@section('title', 'Pendaftaran PKL')
@section('h1', 'Pendaftaran PKL')

@section('content')
<form action="{{ url('pendaftaran_pkl') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-md-2 ">
                <div class="card">
                    <div class="header">Data PKL</div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                            <div class="form-group  ">
                                <label   for="semester">Semester:</label>
                                <div >
                                    <div class="radio">
                                        <input type="radio" name="semester" id="radio3" value="GANJIL">
                                        <label for="radio3">
                                            Ganjil
                                        </label>    
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="semester" id="radio4" value="GENAP" checked="">
                                        <label for="radio4">
                                            Genap
                                        </label>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group  ">
                                    <label   for="tahun_ajar">Tahun Ajar:</label>
                                    <div >
                                        <div class="radio">
                                            <input type="radio" name="tahun_ajar" id="radio5" value="{{ $year-1}} / {{$year }}">
                                            <label for="radio5">
                                                {{ $year-1}} / {{$year }}
                                            </label>    
                                        </div>
                                        <div class="radio">
                                            <input type="radio" name="tahun_ajar" id="radio6" value="{{ $year}} / {{$year+1 }}" checked="">
                                            <label for="radio6">
                                                {{ $year}} / {{$year+1 }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label   for="tempat_pkl">Tanggal Mulai PKL:</label>
                                    <div>
                                        <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tanggal_mulai_pkl" id="tanggal_mulai_pkl" data-datepicker-color="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label   for="tempat_pkl">Tanggal Selesai PKL:</label>
                                    <div>
                                        <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tanggal_selesai_pkl" id="tanggal_selesai_pkl" data-datepicker-color="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label   for="tempat_pkl">Tempat PKL:</label>
                            <div >
                                <input type="text" class="form-control" name="tempat_pkl">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label   for="alamat_pkl">Alamat PKL:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="alamat_pkl"></textarea>
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