<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftar_hadir_skripsi;
use App\Dosen;
use Carbon\Carbon;
use Debugbar;

class daftar_hadir_skripsi_c extends Controller
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
        $status_dosen2         = $request->input('status_dosen2');
        $nama_dosen2    = $request->input('nama_dosen2');
        $pembahas       = $request->input('pembahas');

    	//insert data ke database
    	$daftar_kp = new daftar_hadir_skripsi;
    	$daftar_kp->nama = $nama;
    	$daftar_kp->npm = $npm;
        $daftar_kp->judul = $judul;
        $daftar_kp->jenis_seminar = $jenis_seminar;
        $daftar_kp->pembimbing = $pembimbing;
        $daftar_kp->status_dosen2 = $status_dosen2;
        $daftar_kp->nama_dosen2 = $nama_dosen2;
        $daftar_kp->pembahas = $pembahas;
        $daftar_kp->hari = $hari;
        $daftar_kp->tanggal = $tanggal;
        $daftar_kp->ruang = $ruang;

    	$daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\daftar_hadir.docx')
    );
        $pathSaveFile = storage_path('app\public\form\daftar-hadir-skripsi-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('jenis_seminar', $jenis_seminar);
        $templateProcessor->setValue('hari', $hari);
        $templateProcessor->setValue('tanggal', $tanggal);
        $templateProcessor->setValue('ruang', $ruang);
        $templateProcessor->setValue('judul', $judul);
        $templateProcessor->setValue('pembimbing', $pembimbing);
        $templateProcessor->setValue('status_dosen2', $status_dosen2);
        $templateProcessor->setValue('nama_dosen2', $nama_dosen2);
        $templateProcessor->setValue('pembahas', $pembahas);
        
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
