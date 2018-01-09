<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\seminar_kp;
use Carbon\Carbon;
use Debugbar;

class ad_seminar_kp extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = seminar_kp::all();

    	return view('admin.ad-seminar_kp')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$seminar_kp = seminar_kp::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\seminar_kp.docx')
        );
        $pathSaveFile = storage_path('app\public\results\seminar_kp-'.$seminar_kp->npm.'.docx');

        $templateProcessor->setValue('nama', $seminar_kp->nama);
        $templateProcessor->setValue('npm', $seminar_kp->npm);
        $templateProcessor->setValue('judul', $seminar_kp->judul);
        $templateProcessor->setValue('dosen_pembimbing', $seminar_kp->dosen_pembimbing);
        $templateProcessor->setValue('nip_dosen', $seminar_kp->nip_dosen);
        $templateProcessor->setValue('pembimbing_lapang', $seminar_kp->pembimbing_lapang);
        $templateProcessor->setValue('nip_lapang', $seminar_kp->nip_lapang);
        $templateProcessor->setValue('koor_pkl', $seminar_kp->koor_pkl);
        $templateProcessor->setValue('nip_koor', $seminar_kp->nip_koor);
        $templateProcessor->setValue('dosen_pa', $seminar_kp->dosen_pa);
        $templateProcessor->setValue('nip_pa', $seminar_kp->nip_pa);
        $templateProcessor->setValue('hari', $seminar_kp->hari);
        $templateProcessor->setValue('tanggal', $seminar_kp->tanggal);
        $templateProcessor->setValue('pukul', $seminar_kp->pukul);
        $templateProcessor->setValue('ruang', $seminar_kp->ruang);
        $templateProcessor->setValue('tempat_pkl', $seminar_kp->tempat_pkl);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$seminar_kp = seminar_kp::find($id);
    	$seminar_kp->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = seminar_kp::all();

    	return view('admin.ad-seminar_kp')->with('datas', $datas);
    }
}
