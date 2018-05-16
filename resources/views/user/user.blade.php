@extends('layouts.user')
@section('title', 'Dashboard')

@section('content')

<form action="{{ url('pendaftaran-pkl') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center  container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
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
                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                            <div class="card ">
                                <div class="card-body">
                        				<div class="big-print text-center">
                        					<i class="pe-7s-print"></i></h4>
                        				</div>

                                    <p class="description text-center">
                                        Klik tomboldibawah ini untuk
                                        <br> mendownload file
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container text-center mb-5">
                        			<button type="submit" class="btn btn-success btn-fill">Print / Download</button>
                        			<div class="clearfix"></div>
                        			<div class="clearfix"></div>
                                </div>
                            </div>
            </div>
        </div> 
    </div>
    <!-- <div class="space"></div> -->
<!--     <div class="row">
        <div class="col-md-12 text-center">
            <div class="form-group  ">
                <button type="submit" class="btn btn-lg btn-warning">UPDATE</button>
            </div>
        </div>
    </div> -->
</form> 
@endsection
