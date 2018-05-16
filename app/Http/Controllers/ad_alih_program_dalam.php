<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alih_program_dalam;
use Carbon\Carbon;
use Debugbar;

class ad_alih_program_dalam extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = alih_program_dalam::all();

    	return view('admin.ad-alih_program_dalam')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$alih_program_dalam = alih_program_dalam::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\alih_program_dalam.docx')
        );
        $pathSaveFile = storage_path('app\public\results\alih_program_dalam-'.$alih_program_dalam->user->npm.'.docx');

        $templateProcessor->setValue('nama', $alih_program_dalam->user->nama);
        $templateProcessor->setValue('npm', $alih_program_dalam->user->npm);
        $templateProcessor->setValue('prodi', $alih_program_dalam->user->prodi);
        $templateProcessor->setValue('sks', $alih_program_dalam->sks);
        $templateProcessor->setValue('ipk', $alih_program_dalam->ipk);
        $templateProcessor->setValue('smt', $alih_program_dalam->smt);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$alih_program_dalam = alih_program_dalam::find($id);
    	$alih_program_dalam->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = alih_program_dalam::all();

    	return view('admin.ad-alih_program_dalam')->with('datas', $datas);
    }
}
