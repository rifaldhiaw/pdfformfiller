<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ujian_skripsi;
use Carbon\Carbon;
use Debugbar;

class ad_ujian_skripsi extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = ujian_skripsi::all();

    	return view('admin.ad-ujian_skripsi')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$ujian_skripsi = ujian_skripsi::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\ujian_skripsi.docx')
        );
        $pathSaveFile = storage_path('app\public\results\ujian_skripsi-'.$ujian_skripsi->user->npm.'.docx');

        $templateProcessor->setValue('nama', $ujian_skripsi->user->nama);
        $templateProcessor->setValue('npm', $ujian_skripsi->user->npm);
        $templateProcessor->setValue('dosen_pa', $ujian_skripsi->user->dosen->nama);
        $templateProcessor->setValue('nip_pa', $ujian_skripsi->user->nip);

        $templateProcessor->setValue('judul', $ujian_skripsi->judul);
        $templateProcessor->setValue('ketua_penguji', $ujian_skripsi->ketua_penguji);
        $templateProcessor->setValue('nip_ketua_penguji', $ujian_skripsi->nip_ketua_penguji);
        $templateProcessor->setValue('status_dosen2', $ujian_skripsi->status_dosen2);
        $templateProcessor->setValue('nama_dosen2', $ujian_skripsi->nama_dosen2);
        $templateProcessor->setValue('nip_dosen2', $ujian_skripsi->nip_dosen2);
        $templateProcessor->setValue('penguji', $ujian_skripsi->penguji);
        $templateProcessor->setValue('nip_penguji', $ujian_skripsi->nip_penguji);
        $templateProcessor->setValue('tanggal_berkas ', $ujian_skripsi->tanggal_berkas );
        $templateProcessor->setValue('hari', $ujian_skripsi->hari);
        $templateProcessor->setValue('tanggal', $ujian_skripsi->tanggal);
        $templateProcessor->setValue('pukul', $ujian_skripsi->pukul);
        $templateProcessor->setValue('ruang', $ujian_skripsi->ruang);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$ujian_skripsi = ujian_skripsi::find($id);
    	$ujian_skripsi->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = ujian_skripsi::all();

    	return view('admin.ad-ujian_skripsi')->with('datas', $datas);
    }
}
