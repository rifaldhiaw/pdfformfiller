<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use Carbon\Carbon;
use Debugbar;

class UserSeminarPKL extends Controller
{
    public function view()
	{
    	//ambil data dosen
    	$dosens = Dosen::all();

    	return view('form.seminar-pkl')->with('dosens', $dosens);
	}

    public function print()
    {
    	$request 		= request();

    	$dosen_pembimbing_id = $request->input('dosen_pembimbing');
    	$dosen_pembimbing = Dosen::find($dosen_pembimbing_id)->toArray();

        $koor_pkl_id = $request->input('koor_pkl');
        $koor_pkl = Dosen::find($koor_pkl_id)->toArray();

        $dosen_pa_id = $request->input('dosen_pa');
        $dosen_pa = Dosen::find($dosen_pa_id)->toArray();

    	//ambil data dari input user
    	$nama 			= $request->input('nama');
    	$npm 			= $request->input('npm');
        $judul          = $request->input('judul');
        $nip_dosen      = $dosen_pembimbing["nip"];
        $dosen_pembimbing      = $dosen_pembimbing["nama"];
    	$pembimbing_lapang 	= $request->input('pembimbing_lapang');
    	$nip_lapang 	= $request->input('nip_lapang');
        $nip_koor      = $koor_pkl["nip"];
        $koor_pkl      = $koor_pkl["nama"];
        $nip_pa      = $dosen_pa["nip"];
        $dosen_pa      = $dosen_pa["nama"];
        $hari        = $request->input('hari');
        $tanggal        = $request->input('tanggal');
        $pukul        = $request->input('pukul');
        $ruang          = $request->input('ruang');
        $tempat_pkl       = $request->input('tempat_pkl');

    	//insert data ke database
    	// $daftar_kp = new Daftar_kp;
    	// $daftar_kp->nama = $nama;
    	// $daftar_kp->npm = $npm;
    	// $daftar_kp->dibuat = Carbon::now();
    	// $daftar_kp->program_studi = $program_studi;
    	// $daftar_kp->semester = $semester;
    	// $daftar_kp->tahun_ajar = $tahun_ajar;
    	// $daftar_kp->tanggal = Carbon::now();
    	// $daftar_kp->dosen_pa = $dosen_pa;
    	// $daftar_kp->nip_pa = $nip_pa;
    	// $daftar_kp->tempat_pkl = $tempat_pkl;
    	// $daftar_kp->alamat_pkl = $alamat_pkl;
    	// $daftar_kp->save();

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
