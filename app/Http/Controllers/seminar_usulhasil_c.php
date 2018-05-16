<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\seminar_usulhasil;
use Carbon\Carbon;
use Debugbar;

class seminar_usulhasil_c extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
	{
    	//ambil data dosen
    	$dosens = Dosen::all();
        $date = Carbon::now();  

    	return view('form.seminar_usulhasil')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();

        $pembimbing_ar = Dosen::find( $request->input('pembimbing') )->toArray();
        // $dosen_pa_ar = Dosen::find( $request->input('dosen_pa') )->toArray();

    	//ambil data dari input user
    	$nama 			= Auth::User()->nama;
    	$npm 			= Auth::User()->npm;
        $dosen_pa       = Auth::User()->dosen->nama;
        $nip_pa         = Auth::User()->dosen->nip;

        $judul          = $request->input('judul');
    	$jenis_seminar 	= $request->input('jenis_seminar');
        $pembimbing      = $pembimbing_ar['nama'];
        $nip_pembimbing   = $pembimbing_ar['nip'];
        $status_dosen2    = $request->input('status_dosen2');
        $nama_dosen2      = $request->input('nama_dosen2');
        $pembahas      = $request->input('pembahas');

        $tanggal_berkas      = $request->input('tanggal_berkas');
        $hari      = $request->input('hari');
        $tanggal      = $request->input('tanggal');
        $pukul      = $request->input('pukul');
        $ruang      = $request->input('ruang');

    	//insert data ke database
    	$seminar_usulhasil = new seminar_usulhasil;
    	$seminar_usulhasil->user_id = Auth::id();
        $seminar_usulhasil->judul = $judul;
        $seminar_usulhasil->jenis_seminar = $jenis_seminar;
        $seminar_usulhasil->pembimbing = $pembimbing;
        $seminar_usulhasil->nip_pembimbing = $nip_pembimbing;
        $seminar_usulhasil->status_dosen2 = $status_dosen2;
        $seminar_usulhasil->nama_dosen2 = $nama_dosen2;
        $seminar_usulhasil->pembahas = $pembahas;
        $seminar_usulhasil->tanggal_berkas = $tanggal_berkas;
        $seminar_usulhasil->hari = $hari;
        $seminar_usulhasil->tanggal = $tanggal;
        $seminar_usulhasil->pukul = $pukul;
        $seminar_usulhasil->ruang = $ruang;

    	$seminar_usulhasil->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\seminar_usulhasil.docx')
        );
        $pathSaveFile = storage_path('app\public\form\seminar_usulhasil-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('judul', $judul);
        $templateProcessor->setValue('jenis_seminar', $jenis_seminar);
        $templateProcessor->setValue('pembimbing', $pembimbing);
        $templateProcessor->setValue('nip_pembimbing', $nip_pembimbing);
        $templateProcessor->setValue('status_dosen2', $status_dosen2);
        $templateProcessor->setValue('nama_dosen2', $nama_dosen2);
        $templateProcessor->setValue('pembahas', $pembahas);
        $templateProcessor->setValue('dosen_pa', $dosen_pa);
        $templateProcessor->setValue('nip_pa', $nip_pa);
        $templateProcessor->setValue('tanggal_berkas', $tanggal_berkas);
        $templateProcessor->setValue('hari', $hari);
        $templateProcessor->setValue('tanggal', $tanggal);
        $templateProcessor->setValue('pukul', $pukul);
        $templateProcessor->setValue('ruang', $ruang);

        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
