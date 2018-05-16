@extends('layouts.admin')
@section('title', 'Form Template')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Form Template</h4>
                <p class="category">Ilmu Komputer - FMIPA - Unila</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama File</th>
                        <th>Download </th>
                        <th>Update </th>
                        <th>Update Terkahir</th>
                    </thead>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>
                                <form action="{{ url('/'.$data->dl_link) }}" method="post">
                                    <button class="btn btn-info remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                        download
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ url('admin/form/update') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="file" name="file" required="">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-warning remove btn-xs" type="submit">
                                                <i class="fa fa-upload" aria-hidden="true"></i> 
                                                Upload
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>{{ $data->updated_at }}</td>
                   		</tr>
                        @endforeach

               		</tbody>
           		</table>

       		</div>
   		</div>
	</div>
</div>
@endsection