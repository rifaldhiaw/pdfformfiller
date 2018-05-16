@extends('layouts.form')

@section('title', 'Pendaftaran Pelayanan Form')
@section('h1', 'Pendaftaran Pelayanan Form')

@section('content')
<div class="container">

<form action="{{ route('register') }}" method="post">
    {{ csrf_field() }}
    <div class="form-horizontal content-center container-fluid">
        <div class="row">

            <!-- start box -->
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="header">Data Login</div>
                    <div class="content">
                        <!-- email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="row">
                            <div class="col">
                                <!-- password -->
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" >Password</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
                            <div class="col">
                                <!-- repeat password -->
                                <div class="form-group">
                                    <label for="password-confirm" class="control-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="card">
                    <div class="header">Data Mahasiswa</div>
                    <div class="content">
                        <div class="row">
                            <div class="col">
                                <!-- nama -->
                                <div class="form-group  ">
                                    <label  for="nama">Nama:</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>
                            <div class="col">
                                <!-- npm -->
                                <div class="form-group  ">
                                    <label  for="npm">NPM:</label>
                                    <input type="text" class="form-control" name="npm" required>
                                </div>
                            </div>
                        </div>
                        <!-- prodi -->
                        <div class="form-group  ">
                            <label   for="prodi">Program Studi:</label>
                            <div >
                                <div class="radio">
                                    <input type="radio" name="prodi" id="radio1" value="S1 Ilmu Komputer" checked="">
                                    <label for="radio1">
                                        S1 Ilmu Komputer
                                    </label>    
                                </div>
                                <div class="radio">
                                    <input type="radio" name="prodi" id="radio2" value="D3 Manajemen Informatika" >
                                    <label for="radio2">
                                        D3 Manajemen Informatika
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- dosen pa -->
                        <div class="form-group  ">
                            <label for="dosen_pa">Dosen PA:</label>
                            <select class="form-control" name="dosen_pa">
                                @foreach ($dosens as $dosen)
                                <option value="{{$dosen->id}}">{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>

                <div class="card bg-info">
                    <div class="content">
                        <div class="form-group">
                            <div class=" text-center">
                                <button type="submit" class="btn btn-neutral btn-lg my-0">
                                    Register
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- end box -->

        </div>
    </div>
</form>


@endsection
