<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar_kp;
use Carbon\Carbon;
use Debugbar;

class AdminPendaftaranpkl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$daftar_kps = Daftar_kp::all();

    	return view('admin.ad-pkl')->with('daftar_kps', $daftar_kps);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$daftar_kp = Daftar_kp::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\form_test.docx'));
        $pathSaveFile = storage_path('app\public\results\pengajuan-kp-'.$daftar_kp->npm.'.docx');

        $templateProcessor->setValue('nama', $daftar_kp->nama);
        $templateProcessor->setValue('npm', $daftar_kp->npm);
        $templateProcessor->setValue('jurusan', $daftar_kp->program_studi);
        $templateProcessor->setValue('semester', $daftar_kp->semester);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$daftar_kp = Daftar_kp::find($id);
    	$daftar_kp->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$daftar_kps = Daftar_kp::all();

    	return view('admin.ad-pkl')->with('daftar_kps', $daftar_kps);
    }
}
