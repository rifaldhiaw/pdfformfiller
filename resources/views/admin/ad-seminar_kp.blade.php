@extends('layouts.admin')
@section('title', 'Seminar KP/PKL')

@section('content')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Seminar KP/PKL</h4>
                                <p class="category">Ilmu Komputer - FMIPA - Unila</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NPM</th>
                                        <th>Nama</th>
                                        <th>Tanggal Seminar</th>
                                        <th>Dibuat Pada</th>
                                        <th>Print</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                        <tr>
                                            <td>{{ $data->npm }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->created_at->format('d-m-Y') }}</td>
                                            <td>
                                                <form action="{{ url()->current() }}/print" method="post">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                                    <button type="submit" class="btn btn-simple btn-info btn-icon remove btn-xs">
                                                    	<i class="fa fa-print"></i></a>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ url()->current() }}" method="post">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
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