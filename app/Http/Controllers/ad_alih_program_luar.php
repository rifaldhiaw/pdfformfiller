<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alih_program_luar;
use Carbon\Carbon;
use Debugbar;

class ad_alih_program_luar extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = alih_program_luar::all();

    	return view('admin.ad-alih_program_luar')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$alih_program_luar = alih_program_luar::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\alih_program_luar.docx')
        );
        $pathSaveFile = storage_path('app\public\results\alih_program_luar-'.$alih_program_luar->npm.'.docx');

        $templateProcessor->setValue('nama', $alih_program_luar->nama);
        $templateProcessor->setValue('npm', $alih_program_luar->npm);
        $templateProcessor->setValue('prodi', $alih_program_luar->prodi);
        $templateProcessor->setValue('universitas', $alih_program_luar->universitas);
        $templateProcessor->setValue('akreditas', $alih_program_luar->akreditas);
        $templateProcessor->setValue('sks', $alih_program_luar->sks);
        $templateProcessor->setValue('ipk', $alih_program_luar->ipk);
        $templateProcessor->setValue('smt', $alih_program_luar->smt);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$alih_program_luar = alih_program_luar::find($id);
    	$alih_program_luar->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = alih_program_luar::all();

    	return view('admin.ad-alih_program_luar')->with('datas', $datas);
    }
}
