<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\seminar_usulhasil;
use Carbon\Carbon;
use Debugbar;

class ad_seminar_usulhasil extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = seminar_usulhasil::all();

    	return view('admin.ad-seminar_usulhasil')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$seminar_usulhasil = seminar_usulhasil::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\seminar_usulhasil.docx')
        );
        $pathSaveFile = storage_path('app\public\results\seminar_usulhasil-'.$seminar_usulhasil->npm.'.docx');

        $templateProcessor->setValue('nama', $seminar_usulhasil->nama);
        $templateProcessor->setValue('npm', $seminar_usulhasil->npm);
        $templateProcessor->setValue('judul', $seminar_usulhasil->judul);
        $templateProcessor->setValue('jenis_seminar', $seminar_usulhasil->jenis_seminar);
        $templateProcessor->setValue('pembimbing', $seminar_usulhasil->pembimbing);
        $templateProcessor->setValue('nip_pembimbing', $seminar_usulhasil->nip_pembimbing);
        $templateProcessor->setValue('status_dosen2', $seminar_usulhasil->status_dosen2);
        $templateProcessor->setValue('nama_dosen2', $seminar_usulhasil->nama_dosen2);
        $templateProcessor->setValue('pembahas', $seminar_usulhasil->pembahas);
        $templateProcessor->setValue('dosen_pa', $seminar_usulhasil->dosen_pa);
        $templateProcessor->setValue('nip_pa', $seminar_usulhasil->nip_pa);
        $templateProcessor->setValue('tanggal_berkas', $seminar_usulhasil->tanggal_berkas);
        $templateProcessor->setValue('hari', $seminar_usulhasil->hari);
        $templateProcessor->setValue('tanggal', $seminar_usulhasil->tanggal);
        $templateProcessor->setValue('pukul', $seminar_usulhasil->pukul);
        $templateProcessor->setValue('ruang', $seminar_usulhasil->ruang);
        
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$seminar_usulhasil = seminar_usulhasil::find($id);
    	$seminar_usulhasil->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = seminar_usulhasil::all();

    	return view('admin.ad-seminar_usulhasil')->with('datas', $datas);
    }
}
