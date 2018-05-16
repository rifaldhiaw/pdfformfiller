<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perbaikan_nilai;
use Illuminate\Support\Facades\Auth;
use App\Dosen;
use Carbon\Carbon;
use Debugbar;

class perbaikan_nilai_c extends Controller
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

    	return view('form.perbaikan_nilai')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();
        $dosen_pj_ar = Dosen::find( $request->input('dosen_pj') )->toArray();

    	//ambil data dari input user
    	$nama 			= Auth::User()->nama;
    	$npm 			= Auth::User()->npm;
    	$prodi 	        = Auth::User()->prodi;
        $jurusan          = Auth::User()->jurusan;

        $nama_mk        = $request->input('nama_mk');
        $kode_mk        = $request->input('kode_mk');
        $semester       = $request->input('semester');
        $dosen_pj       = $dosen_pj_ar['nama'];
        $nip_pj         = $dosen_pj_ar['nip'];

    	//insert data ke database
    	$perbaikan_nilai = new perbaikan_nilai;
    	$perbaikan_nilai->user_id = Auth::id();
    	$perbaikan_nilai->nama_mk = $nama_mk;
    	$perbaikan_nilai->kode_mk = $kode_mk;
    	$perbaikan_nilai->semester = $semester;
    	$perbaikan_nilai->dosen_pj = $dosen_pj;
    	$perbaikan_nilai->nip_pj = $nip_pj;
    	$perbaikan_nilai->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\perbaikan_nilai.docx')
        );
        $pathSaveFile = storage_path('app\public\form\perbaikan_nilai-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('prodi', $prodi);
        $templateProcessor->setValue('jurusan', $jurusan);
        $templateProcessor->setValue('nama_mk', $perbaikan_nilai->nama_mk);
        $templateProcessor->setValue('kode_mk', $perbaikan_nilai->kode_mk);
        $templateProcessor->setValue('semester', $perbaikan_nilai->semester);
        $templateProcessor->setValue('dosen_pj', $perbaikan_nilai->dosen_pj);
        $templateProcessor->setValue('nip_pj', $perbaikan_nilai->nip_pj);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
