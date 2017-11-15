@extends('layouts.admin')
@section('title', 'Edit Data Dosen')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="card">
            <form action="{{ route('admin_dosen_update') }}" method="post">
                {{ csrf_field() }}
                <div class="header text-center">Edit Data Dosen</div>
                <div class="content">

                    <div class="form-group">
                        <label class="control-label">Nama </label>
                        <input class="form-control" name="nama" type="text" required="true" aria-required="true" value="{{ $nama_dosen }}">
                    </div>

                    <div class="form-group">
                        <label class="control-label">NIP </label>
                        <input class="form-control" name="nip" type="text" required="true" aria-required="true" value="{{ $nip_dosen }}">
                    </div>

                    <input type="hidden" name="id" value="{{ $id_dosen }}">
                </div>

                <div class="footer text-center">
                    <button type="submit" class="btn btn-warning btn-fill btn-wd">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection