@extends('layouts.admin')
@section('title', 'Daftar User / Mahasiswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Daftar User / Mahasiswa</h4>
                <p class="category">Ilmu Komputer - FMIPA - Unila</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Dosen PA</th>
                        <!-- <th>Action</th> -->
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->npm }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->prodi }}</td>
                            <td>{{ $user->dosen->nama }}</td>
                            <!-- <td>
                                <form action="{{ route('admin_dosen_edit') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                       <i class="fa fa-edit"></i></a>
                                   </button>
                               </form>
                               <form action="{{ route('admin_dosen_delete') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <button type="submit" class="btn btn-simple btn-danger btn-icon remove btn-xs">
                                   <i class="fa fa-times"></i></a>
                               </button>
                           </form>
                       </td> -->
                   </tr>
                   @endforeach
               </tbody>
           </table>

       </div>
   </div>
</div>
</div>
@endsection