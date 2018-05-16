@extends('layouts.form')

@section('title', 'Form Data Lulusan')
@section('h1', 'Form Data Lulusan')

@section('content')
<form action="{{ url('data_alumni') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center container-fluid">
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="header">Data Skripsi </div>
                    <div class="content">

                        <div class="form-group  ">
                            <label   for="judul">Judul Skripsi:</label>
                            <div >
                                <textarea class="form-control" rows="5" name="judul"></textarea>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="dosen_pembimbing">Dosen Pembimbing:</label>
                            <select class="form-control" name="pembimbing">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label   for="status_dosen2">Status Dosen ke-2:</label>
                            <div class="radio">
                                <input type="radio" name="status_dosen2" id="radio11" value="Pembimbing">
                                <label for="radio11">
                                    Pembimbing
                                </label>    
                            </div>
                            <div class="radio">
                                <input type="radio" name="status_dosen2"  id="radio21" value="Pembahas" checked="">
                                <label for="radio21">
                                    Pembahas
                                </label>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="dosen_pembimbing">Nama Dosen 2:</label>
                            <select class="form-control" name="dosen2">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  ">
                            <label for="pembahas">Pembahas:</label>
                            <select class="form-control" name="pembahas">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group  ">
                            <label   for="lama_skripsi">Lama Skripsi:</label>
                            <div > 
                                <input type="text" class="form-control" name="lama_skripsi">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label   for="ipk">IPK:</label>
                            <div > 
                                <input type="text" class="form-control" name="ipk">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label   for="toefl">TOEFL:</label>
                            <div > 
                                <input type="text" class="form-control" name="toefl">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label   for="toefl">Masa Studi:</label>
                            <div class="row">
                                <div class="col-md-6"> 
                                    <input type="text" class="form-control" name="studi_th" placeholder="(Tahun)">
                                </div>
                                <div class="col-md-6"> 
                                    <input type="text" class="form-control" name="studi_bln" placeholder="(bulan)">
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
            <div class="col-md-6">

                <div class="card">
                    <div class="header">Data Nilai</div>
                    <div class="content">
                        <div class="form-group  ">
                            <label   for="tgl_sk_pembimbing ">Tanggal SK Pembimbing:</label>
                            <div>
                                <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tgl_sk_pembimbing" id="tgl_sk_pembimbing" data-datepicker-color="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group  ">
                                    <label   for="tgl_usul">Tanggal Usul:</label>
                                    <div>
                                        <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tgl_usul" id="tgl_usul" data-datepicker-color="">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group  ">
                                    <label   for="nilai_usul">Nilai Usul:</label>
                                    <div > 
                                        <input type="text" class="form-control" name="nilai_usul">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group  ">
                                    <label   for="tgl_hasil">Tanggal Hasil:</label>
                                    <div>
                                        <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tgl_hasil" id="tgl_usul" data-datepicker-color="">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group  ">
                                    <label   for="nilai_hasil">Nilai Hasil:</label>
                                    <div > 
                                        <input type="text" class="form-control" name="nilai_hasil">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group  ">
                                    <label   for="tgl_ujian_skripsi ">Tanggal Ujian Skripsi:</label>
                                    <div>
                                        <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tgl_ujian_skripsi" id="tgl_ujian_skripsi" data-datepicker-color="">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label   for="nilai_ujian_skripsi">Nilai Ujian Skripsi:</label>
                                    <div > 
                                        <input type="text" class="form-control" name="nilai_ujian_skripsi">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">Data Kontak</div>
                    <div class="content">
                        <div class="form-group  ">
                            <label  for="email">Email:</label>
                            <div >
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label  for="nohp">No HP:</label>
                            <div >
                                <input type="text" class="form-control" name="nohp">    
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group  ">
                                    <label   for="tempat_lahir">Tempat Lahir:</label>
                                    <div > 
                                        <input type="text" class="form-control" name="tempat_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group  ">
                                    <label   for="tanggal_lahir">Tanggal Lahir:</label>
                                    <div>
                                        <input data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="tanggal_lahir" id="tanggal_lahir" data-datepicker-color="">
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
                            <label   for="kota">Kota:</label>
                            <div >
                                <input type="text" class="form-control" name="kota">
                            </div>
                        </div>
                        
                        <div class="form-group  ">
                            <label   for="provinsi">Provinsi:</label>
                            <div >
                                <input type="text" class="form-control" name="provinsi">
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div> 
    </div>
</form> 
@endsection