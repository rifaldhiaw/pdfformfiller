<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perbaikan_nilai;
use Carbon\Carbon;
use Debugbar;

class ad_perbaikan_nilai extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = perbaikan_nilai::all();

    	return view('admin.ad-perbaikan_nilai')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$perbaikan_nilai = perbaikan_nilai::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\perbaikan_nilai.docx')
        );
        $pathSaveFile = storage_path('app\public\results\perbaikan_nilai-'.$perbaikan_nilai->user->npm.'.docx');

        $templateProcessor->setValue('nama', $perbaikan_nilai->user->nama);
        $templateProcessor->setValue('npm', $perbaikan_nilai->user->npm);
        $templateProcessor->setValue('prodi', $perbaikan_nilai->user->prodi);
        $templateProcessor->setValue('jurusan', $perbaikan_nilai->user->jurusan);
        
        $templateProcessor->setValue('nama_mk', $perbaikan_nilai->nama_mk);
        $templateProcessor->setValue('kode_mk', $perbaikan_nilai->kode_mk);
        $templateProcessor->setValue('semester', $perbaikan_nilai->semester);
        $templateProcessor->setValue('dosen_pj', $perbaikan_nilai->dosen_pj);
        $templateProcessor->setValue('nip_pj', $perbaikan_nilai->nip_pj);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$perbaikan_nilai = perbaikan_nilai::find($id);
    	$perbaikan_nilai->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = perbaikan_nilai::all();

    	return view('admin.ad-perbaikan_nilai')->with('datas', $datas);
    }
}
