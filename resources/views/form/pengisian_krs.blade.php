@extends('layouts.form')

@section('title', 'Pengisian KRS')
@section('h1', 'Pengisian KRS')

@section('content')
<form action="{{ url('pengisian_krs') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center ">
        <div class="row">
            
            <!-- CARD  -->
            <div class="col-md-6">
                <div class="card">
                    <div class="header">Data Utama</div>
                    <div class="content">
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
                        <div class="form-group  ">
                            <label  for="npm">Jumlah SKS:</label>
                            <div >
                                <input type="text" class="form-control" name="npm">    
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- CARD  -->
                <div class="card">
                    <!-- HEADER -->
                    <div class="header">Mata Kuliah 1:</div>
                    <!-- CONTENT -->
                    <div class="content">

                        <div class="form-group  ">
                            <label  for="kode_1">Kode :</label>
                            <div >
                                <input type="text" class="form-control" name="kode_1">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="makul_1">Mata Kuliah :</label>
                            <div >
                                <input type="text" class="form-control" name="makul_1">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="sks_1">SKS :</label>
                            <div >
                                <input type="text" class="form-control" name="sks_1">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="ambil_1">Pengambilan Ke- :</label>
                            <div >
                                <input type="text" class="form-control" name="ambil_1">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="kelas_1">Kelas :</label>
                            <div >
                                <input type="text" class="form-control" name="kelas_1">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label for="dosen_1">Dosen PJ:</label>
                            <select class="form-control" name="dosen_1">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            <!-- CARD  -->
                <div class="card">
                    <!-- HEADER -->
                    <div class="header">Mata Kuliah 4:</div>
                    <!-- CONTENT -->
                    <div class="content">

                        <div class="form-group  ">
                            <label  for="kode_4">Kode :</label>
                            <div >
                                <input type="text" class="form-control" name="kode_4">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="makul_4">Mata Kuliah :</label>
                            <div >
                                <input type="text" class="form-control" name="makul_4">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="sks_4">SKS :</label>
                            <div >
                                <input type="text" class="form-control" name="sks_4">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="ambil_4">Pengambilan Ke- :</label>
                            <div >
                                <input type="text" class="form-control" name="ambil_4">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="kelas_4">Kelas :</label>
                            <div >
                                <input type="text" class="form-control" name="kelas_4">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label for="dosen_4">Dosen PJ:</label>
                            <select class="form-control" name="dosen_4">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            </div>

            <!-- CARD  -->
            <div class="col-md-6">
                <div class="card">
                    <!-- HEADER -->
                    <div class="header">Mata Kuliah 2:</div>
                    <!-- CONTENT -->
                    <div class="content">

                        <div class="form-group  ">
                            <label  for="kode_2">Kode :</label>
                            <div >
                                <input type="text" class="form-control" name="kode_2">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="makul_2">Mata Kuliah :</label>
                            <div >
                                <input type="text" class="form-control" name="makul_2">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="sks_2">SKS :</label>
                            <div >
                                <input type="text" class="form-control" name="sks_2">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="ambil_2">Pengambilan Ke- :</label>
                            <div >
                                <input type="text" class="form-control" name="ambil_2">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="kelas_2">Kelas :</label>
                            <div >
                                <input type="text" class="form-control" name="kelas_2">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label for="dosen_2">Dosen PJ:</label>
                            <select class="form-control" name="dosen_2">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>

            <!-- CARD  -->
                <div class="card">
                    <!-- HEADER -->
                    <div class="header">Mata Kuliah 3:</div>
                    <!-- CONTENT -->
                    <div class="content">

                        <div class="form-group  ">
                            <label  for="kode_3">Kode :</label>
                            <div >
                                <input type="text" class="form-control" name="kode_3">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="makul_3">Mata Kuliah :</label>
                            <div >
                                <input type="text" class="form-control" name="makul_3">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="sks_3">SKS :</label>
                            <div >
                                <input type="text" class="form-control" name="sks_3">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="ambil_3">Pengambilan Ke- :</label>
                            <div >
                                <input type="text" class="form-control" name="ambil_3">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label  for="kelas_3">Kelas :</label>
                            <div >
                                <input type="text" class="form-control" name="kelas_3">
                            </div>
                        </div>

                        <div class="form-group  ">
                            <label for="dosen_3">Dosen PJ:</label>
                            <select class="form-control" name="dosen_3">
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