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
                        <th>Download</th>
                        <th>Update</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Daftar Hadir Seminar</td>
                            <td>
                            	<a href="{{ $daftar_hadir }}" >
                            		<i class="fa fa-download" aria-hidden="true"></i> 
                            	</a>
                            </td>
                            <td>
                            	<a href="{{ $daftar_hadir }}" >
                            		<i class="fa fa-upload" aria-hidden="true"></i> 
                            	</a>
                            </td>
                   		</tr>
               		</tbody>
           		</table>

       		</div>
   		</div>
	</div>
</div>
@endsection