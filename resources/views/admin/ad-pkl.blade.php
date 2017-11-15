@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Pendaftaran KP/PKL</h4>
                                <p class="category">Ilmu Komputer - FMIPA - Unila</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NPM</th>
                                        <th>Nama</th>
                                        <th>Tempat PKL</th>
                                        <th>Dibuat Pada</th>
                                        <th>Print</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($daftar_kps as $daftar_kp)
                                        <tr>
                                            <td>{{ $daftar_kp->npm }}</td>
                                            <td>{{ $daftar_kp->nama }}</td>
                                            <td>{{ $daftar_kp->tempat_pkl }}</td>
                                            <td>{{ $daftar_kp->dibuat }}</td>
                                            <td>
                                                <form action="{{ route('print_daftar_pkl') }}" method="post">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $daftar_kp->id }}">
                                                    <button type="submit" class="btn btn-simple btn-info btn-icon remove btn-xs">
                                                    	<i class="fa fa-print"></i></a>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('delete_daftar_pkl') }}" method="post">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $daftar_kp->id }}">
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
@endsection