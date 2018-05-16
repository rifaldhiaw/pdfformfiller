<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use Illuminate\Support\Facades\Auth;
use App\seminar_kp;
use Carbon\Carbon;
use Debugbar;

class seminar_kp_c extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
	{
    	//ambil data dosen
    	$dosens = Dosen::all();

    	return view('form.seminar_kp')->with('dosens', $dosens);
	}

    public function print()
    {
    	$request 		= request();

    	$dosen_pembimbing_id = $request->input('dosen_pembimbing');
    	$dosen_pembimbing_ar = Dosen::find($dosen_pembimbing_id)->toArray();

        $koor_pkl_id = $request->input('koor_pkl');
        $koor_pkl_ar = Dosen::find($koor_pkl_id)->toArray();

    	//ambil data dari input user
    	$nama 			= Auth::User()->nama;
    	$npm 			= Auth::User()->npm;
        $nip_pa         = Auth::User()->dosen->nip;
        $dosen_pa       = Auth::User()->dosen->nama;

        $judul          = $request->input('judul');
        $nip_dosen      = $dosen_pembimbing_ar["nip"];
        $dosen_pembimbing      = $dosen_pembimbing_ar["nama"];
    	$pembimbing_lapang 	= $request->input('pembimbing_lapang');
    	$nip_lapang 	= $request->input('nip_lapang');
        $nip_koor      = $koor_pkl_ar["nip"];
        $koor_pkl      = $koor_pkl_ar["nama"];
        $hari        = $request->input('hari');
        $tanggal        = $request->input('tanggal');
        $pukul        = $request->input('pukul');
        $ruang          = $request->input('ruang');
        $tempat_pkl       = $request->input('tempat_pkl');

    	//insert data ke database
    	$daftar_kp = new seminar_kp;
    	$daftar_kp->user_id = Auth::id();
        $daftar_kp->judul = $judul;
        $daftar_kp->nip_dosen = $nip_dosen;
        $daftar_kp->dosen_pembimbing = $dosen_pembimbing;
        $daftar_kp->pembimbing_lapang = $pembimbing_lapang;
        $daftar_kp->nip_lapang = $nip_lapang;
        $daftar_kp->nip_koor = $nip_koor;
        $daftar_kp->koor_kp = $koor_pkl;
        $daftar_kp->hari = $hari;
        $daftar_kp->tanggal = $tanggal;
        $daftar_kp->pukul = $pukul;
        $daftar_kp->ruang = $ruang;
        $daftar_kp->tempat_pkl = $tempat_pkl;
    	$daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\seminar_kp.docx'));
        $pathSaveFile = storage_path('app\public\form\seminar-kp-pkl-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('judul', $judul);
        $templateProcessor->setValue('dosen_pembimbing', $dosen_pembimbing);
        $templateProcessor->setValue('nip_dosen', $nip_dosen);
        $templateProcessor->setValue('pembimbing_lapang', $pembimbing_lapang);
        $templateProcessor->setValue('nip_lapang', $nip_lapang);
        $templateProcessor->setValue('koor_pkl', $koor_pkl);
        $templateProcessor->setValue('nip_koor', $nip_koor);
        $templateProcessor->setValue('dosen_pa', $dosen_pa);
        $templateProcessor->setValue('nip_pa', $nip_pa);
        $templateProcessor->setValue('hari', $hari);
        $templateProcessor->setValue('tanggal', $tanggal);
        $templateProcessor->setValue('pukul', $pukul);
        $templateProcessor->setValue('ruang', $ruang);
        $templateProcessor->setValue('tempat_pkl', $tempat_pkl);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
