<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\alih_program_luar;
use Carbon\Carbon;
use Debugbar;

class alih_program_luar_c extends Controller
{

    public function view()
	{
    	//ambil data dosen
    	$dosens = Dosen::all();
        $date = Carbon::now();  

    	return view('form.alih_program_luar')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();

    	//ambil data dari input user
    	$nama 			= $request->input('nama');
    	$npm 			= $request->input('npm');
    	$prodi 	= $request->input('prodi');
        $universitas        = $request->input('universitas');
        $akreditas        = $request->input('akreditasi');
        $sks          = $request->input('sks');
        $ipk          = $request->input('ipk');
        $smt      = $request->input('smt');

    	//insert data ke database
    	$daftar_kp = new alih_program_luar;
    	$daftar_kp->nama = $nama;
    	$daftar_kp->npm = $npm;
        $daftar_kp->prodi = $prodi;
        $daftar_kp->universitas = $universitas;
        $daftar_kp->akreditasi = $akreditas;
        $daftar_kp->sks = $sks;
        $daftar_kp->ipk = $ipk;
        $daftar_kp->smt = $smt;
    	$daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path
            ('app\public\form\alih_program_luar.docx')
        );
        $pathSaveFile = storage_path('app\public\form\alih_program_luar-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('prodi', $prodi);
        $templateProcessor->setValue('universitas', $universitas);
        $templateProcessor->setValue('akreditas', $akreditas);
        $templateProcessor->setValue('sks', $sks);
        $templateProcessor->setValue('ipk', $ipk);
        $templateProcessor->setValue('smt', $smt);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
