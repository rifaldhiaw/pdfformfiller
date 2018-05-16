@extends('layouts.admin')
@section('title', 'Update Form Template')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="card">
            <form action="{{ url('/admin/form/upload') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="header text-center">{{ $nama }}</div>
                <div class="content">

                    <div class="form-group text-center mx-0">
                        <input type="file" name="file">
                        <input type="hidden" name="nama" value=" {{ $nama }} ">
                    </div>

                </div>

                <div class="footer text-center">
                    <button type="submit" class="btn btn-warning btn-fill btn-wd">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection