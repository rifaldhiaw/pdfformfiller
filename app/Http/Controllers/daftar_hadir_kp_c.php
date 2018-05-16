<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use Illuminate\Support\Facades\Auth;
use App\daftar_hadir_kp;
use Carbon\Carbon;
use Debugbar;

class daftar_hadir_kp_c extends Controller
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

    	return view('form.daftar_hadir_kp')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();

    	//ambil data dari input user
    	$nama 			= Auth::User()->nama;
    	$npm 			= Auth::User()->npm;
        $prodi            = Auth::User()->prodi;
        $judul            = $request->input('judul');
        $tempat_kp            = $request->input('tempat_kp');
        $alamat            = $request->input('alamat');
        $kabupaten            = $request->input('kabupaten');
        $provinsi            = $request->input('provinsi');
        $pembimbing            = $request->input('pembimbing');
        $tanggal            = $request->input('tanggal');
        $ruang            = $request->input('ruang');
        $hari            = $request->input('hari');

    	//insert data ke database
    	$daftar_kp = new daftar_hadir_kp;
    	$daftar_kp->user_id = Auth::id(); 
        $daftar_kp->judul = $judul; 
        $daftar_kp->tempat_kp = $tempat_kp; 
        $daftar_kp->alamat = $alamat; 
        $daftar_kp->kabupaten = $kabupaten; 
        $daftar_kp->provinsi = $provinsi; 
        $daftar_kp->pembimbing = $pembimbing; 
        $daftar_kp->tanggal = $tanggal; 
        $daftar_kp->ruang = $ruang; 
        $daftar_kp->hari = $hari; 
    	$daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\daftar_hadir.docx'));
        $pathSaveFile = storage_path('app\public\form\daftar_hadir_kp-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('prodi', $prodi);
        $templateProcessor->setValue('judul', $judul);
        $templateProcessor->setValue('tempat_kp', $tempat_kp);
        $templateProcessor->setValue('alamat', $alamat);
        $templateProcessor->setValue('kabupaten', $kabupaten);
        $templateProcessor->setValue('provinsi', $provinsi);
        $templateProcessor->setValue('pembimbing', $pembimbing);
        $templateProcessor->setValue('tanggal', $tanggal);
        $templateProcessor->setValue('ruang', $ruang);
        $templateProcessor->setValue('hari', $hari);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
