<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftar_hadir_skripsi;
use Carbon\Carbon;
use Debugbar;

class ad_daftar_hadir_skripsi extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = daftar_hadir_skripsi::all();

    	return view('admin.ad-daftar_hadir_skripsi')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$daftar_hadir_skripsi = daftar_hadir_skripsi::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\daftar_hadir.docx')
        );
        $pathSaveFile = storage_path('app\public\results\daftar_hadir-'.$daftar_hadir_skripsi->user->npm.'.docx');

        $templateProcessor->setValue('nama', $daftar_hadir_skripsi->user->nama);
        $templateProcessor->setValue('npm', $daftar_hadir_skripsi->user->npm);
        $templateProcessor->setValue('jenis_seminar', $daftar_hadir_skripsi->jenis_seminar);
        $templateProcessor->setValue('hari', $daftar_hadir_skripsi->hari);
        $templateProcessor->setValue('tanggal', $daftar_hadir_skripsi->tanggal);
        $templateProcessor->setValue('ruang', $daftar_hadir_skripsi->ruang);
        $templateProcessor->setValue('judul', $daftar_hadir_skripsi->judul);
        $templateProcessor->setValue('pembimbing', $daftar_hadir_skripsi->pembimbing);
        $templateProcessor->setValue('dosen2', $daftar_hadir_skripsi->dosen2);
        $templateProcessor->setValue('nama_dosen2', $daftar_hadir_skripsi->nama_dosen2);
        $templateProcessor->setValue('pembahas', $daftar_hadir_skripsi->pembahas);
        
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$daftar_hadir_skripsi = daftar_hadir_skripsi::find($id);
    	$daftar_hadir_skripsi->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = daftar_hadir_skripsi::all();

    	return view('admin.ad-daftar_hadir_skripsi')->with('datas', $datas);
    }
}
