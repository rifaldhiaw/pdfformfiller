<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use Illuminate\Support\Facades\Auth;
use App\alih_program_dalam;
use Carbon\Carbon;
use Debugbar;

class alih_program_dalam_c extends Controller
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

    	return view('form.alih_program_dalam')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request       = request();

        //ambil data dari input user
        $nama           = Auth::User()->nama;
        $npm            = Auth::User()->npm;
        $prodi          = Auth::User()->prodi;
        $sks          = $request->input('sks');
        $ipk          = $request->input('ipk');
        $smt          = $request->input('smt');

        //insert data ke database
        $daftar_kp = new alih_program_dalam;
        $daftar_kp->user_id = Auth::id();
        $daftar_kp->sks = $sks;
        $daftar_kp->ipk = $ipk;
        $daftar_kp->smt = $smt;
        $daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path
            ('app\public\form\alih_program_dalam.docx')
        );
        $pathSaveFile = storage_path('app\public\form\alih_program_dalam-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('prodi', $prodi);
        $templateProcessor->setValue('sks', $sks);
        $templateProcessor->setValue('ipk', $ipk);
        $templateProcessor->setValue('smt', $smt);
        $templateProcessor->saveAs($pathSaveFile);

        return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
