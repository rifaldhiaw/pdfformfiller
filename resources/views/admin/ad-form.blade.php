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
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Daftar Hadir Seminar</td>
                            <td>
                                <form action="{{ $daftar_hadir }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $daftar_hadir }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                   		</tr>
                        <tr>
                            <td>2.</td>
                            <td>Pendaftaran KP/PKL</td>
                            <td>
                                <form action="{{ $pendaftaran_pkl }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $pendaftaran_pkl }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Pengajuan Tema</td>
                            <td>
                                <form action="{{ $pengajuan_tema }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $pengajuan_tema }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Pengambilan Data</td>
                            <td>
                                <form action="{{ $pengambilan_data }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $pengambilan_data }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Pengisian KRS</td>
                            <td>
                                <form action="{{ $pengisian_krs }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $pengisian_krs }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Perbaikan Nilai</td>
                            <td>
                                <form action="{{ $perbaikan_nilai }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $perbaikan_nilai }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Seminar KP/PKL</td>
                            <td>
                                <form action="{{ $seminar_kp }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $seminar_kp }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Seminar TA</td>
                            <td>
                                <form action="{{ $seminar_ta }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $seminar_ta }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Seminar Usul/Hasil</td>
                            <td>
                                <form action="{{ $seminar_usulhasil }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $seminar_usulhasil }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Ujian SKripsi</td>
                            <td>
                                <form action="{{ $ujian_skripsi }}" method="post">
                                    <button class="btn btn-simple btn-info btn-icon remove btn-xs">
                                        <i class="fa fa-download" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ $ujian_skripsi }}" method="post">
                                    <button class="btn btn-simple btn-warning btn-icon remove btn-xs">
                                        <i class="fa fa-upload" aria-hidden="true"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
               		</tbody>
           		</table>

       		</div>
   		</div>
	</div>
</div>
@endsection