<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar_kp;
use App\Dosen;
use Carbon\Carbon;
use Debugbar;

class UserDaftarHadirSkripsi extends Controller
{
    public function view()
	{
    	//ambil data dosen
    	$dosens = Dosen::all();
        $date = Carbon::now();  

    	return view('form.daftar-hadir-skripsi')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();

    	//ambil data dari input user
    	$nama 			= $request->input('nama');
    	$npm 			= $request->input('npm');
    	$jenis_seminar 	= $request->input('jenis_seminar');
        $hari        = $request->input('hari');
        $tanggal        = $request->input('tanggal');
        $ruang          = $request->input('ruang');
        $judul          = $request->input('judul');
        $pembimbing      = $request->input('pembimbing');
        $dosen2         = $request->input('dosen2');
        $nama_dosen2    = $request->input('nama_dosen2');
        $pembahas       = $request->input('pembahas');

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

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\daftar_hadir.docx'));
        $pathSaveFile = storage_path('app\public\form\daftar-hadir-skripsi-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('jenis_seminar', $jenis_seminar);
        $templateProcessor->setValue('hari', $hari);
        $templateProcessor->setValue('tanggal', $tanggal);
        $templateProcessor->setValue('ruang', $ruang);
        $templateProcessor->setValue('judul', $judul);
        $templateProcessor->setValue('pembimbing', $pembimbing);
        $templateProcessor->setValue('dosen2', $dosen2);
        $templateProcessor->setValue('nama_dosen2', $nama_dosen2);
        $templateProcessor->setValue('pembahas', $pembahas);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
