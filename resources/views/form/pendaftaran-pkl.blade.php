@extends('layouts.form')

@section('title', 'Pendaftaran PKL')
@section('h1', 'Pendaftaran PKL')

@section('content')
<form action="{{ url('pendaftaran-pkl') }}" method="post">
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
                            <label   for="program_studi">Program Studi:</label>
                            <div >
                                <div class="radio">
                                    <input type="radio" name="program_studi" id="radio1" value="S1 Ilmu Komputer">
                                    <label for="radio1">
                                        S1 Ilmu Komputer
                                    </label>    
                                </div>
                                <div class="radio">
                                    <input type="radio" name="program_studi" id="radio2" value="D3 Manajemen Informatika" checked="">
                                    <label for="radio2">
                                        D3 Manajemen Informatika
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="dosen_pa_id">Dosen PA:</label>
                                <select class="form-control" name="dosen_pa_id">
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
                    <div class="header">Data PKL</div>
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
                                <input type="text" class="form-control" name="tahun_ajar" placeholder="2000/2001">
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