<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengajuan_tema;
use Carbon\Carbon;
use Debugbar;

class ad_pengajuan_tema extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = pengajuan_tema::all();

    	return view('admin.ad-pengajuan_tema')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$pengajuan_tema = pengajuan_tema::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\pengajuan_tema.docx')
        );
        $pathSaveFile = storage_path('app\public\results\pengajuan_tema-'.$pengajuan_tema->npm.'.docx');

        $templateProcessor->setValue('nama', $pengajuan_tema->nama);
        $templateProcessor->setValue('npm', $pengajuan_tema->npm);
        $templateProcessor->setValue('prodi', $pengajuan_tema->prodi);
        $templateProcessor->setValue('karya_tulis', $pengajuan_tema->karya_tulis);
        $templateProcessor->setValue('judul_1', $pengajuan_tema->judul_1);
        $templateProcessor->setValue('judul_2', $pengajuan_tema->judul_2);
        $templateProcessor->setValue('pembimbing', $pengajuan_tema->pembimbing);
        $templateProcessor->setValue('nip_pembimbing', $pengajuan_tema->nip_pembimbing);
        $templateProcessor->setValue('dosen_pa', $pengajuan_tema->dosen_pa);
        $templateProcessor->setValue('nip_pa', $pengajuan_tema->nip_pa);

        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$pengajuan_tema = pengajuan_tema::find($id);
    	$pengajuan_tema->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = pengajuan_tema::all();

    	return view('admin.ad-pengajuan_tema')->with('datas', $datas);
    }
}
