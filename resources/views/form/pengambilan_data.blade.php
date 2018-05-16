@extends('layouts.form')

@section('title', 'Izin Pengambilan Data')
@section('h1', 'Izin Pengambilan Data')

@section('content')
<form action="{{ url('pengambilan_data') }}" method="post">
  {{ csrf_field() }}
    <div class="form-horizontal content-center container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-md-2 ">
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
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label   for="nama_data">Nama Data:</label>
                                    <div >
                                        <input type="text" class="form-control" name="nama_data">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group  ">
                                    <label   for="tempat">Tempat:</label>
                                    <div >
                                        <input type="text" class="form-control" name="tempat">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label   for="alamat">Alamat:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="alamat"></textarea>
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label   for="tanggal">Tanggal Berkas:</label>
                            <div>
                                <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tanggal" id="tanggal" data-datepicker-color="">
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