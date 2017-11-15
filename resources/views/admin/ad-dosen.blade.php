@extends('layouts.admin')
@section('title', 'Daftar Dosen')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Tambah Data Dosen</h4>
            </div>
            <div class="content">
                <form action="{{ route('admin_dosen_tambah') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-md-5  col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama ..." name="nama">
                                </div>
                            </div>
                            <div class="col-md-4  col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="NIP ..." name="nip">
                                </div>
                            </div>
                            <div class="col-md-2 col-md-offset-1  col-xs-12">
                                <div class="form-group  ">
                                    <button type="submit" class="btn btn-info">Tambah</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Daftar Dosen</h4>
                <p class="category">Ilmu Komputer - FMIPA - Unila</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($dosens as $dosen)
                        <tr>
                            <td>{{ $dosen->nama }}</td>
                            <td>{{ $dosen->nip }}</td>
                            <td>
                                <form action="{{ route('admin_dosen_edit') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $dosen->id }}">
                                    <button type="submit" class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                       <i class="fa fa-edit"></i></a>
                                   </button>
                               </form>
                               <form action="{{ route('admin_dosen_delete') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $dosen->id }}">
                                <button type="submit" class="btn btn-simple btn-danger btn-icon remove btn-xs">
                                   <i class="fa fa-times"></i></a>
                               </button>
                           </form>
                       </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>

       </div>
   </div>
</div>
</div>
@endsection