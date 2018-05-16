<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengambilan_data;
use Carbon\Carbon;
use Debugbar;

class ad_pengambilan_data extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = pengambilan_data::all();

    	return view('admin.ad-pengambilan_data')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$pengambilan_data = pengambilan_data::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\pengambilan_data.docx')
        );
        $pathSaveFile = storage_path('app\public\results\pengambilan_data-'.$pengambilan_data->user->npm.'.docx');

        $templateProcessor->setValue('nama', $pengambilan_data->user->nama);
        $templateProcessor->setValue('npm', $pengambilan_data->user->npm);
        
        $templateProcessor->setValue('judul', $pengambilan_data->judul);
        $templateProcessor->setValue('pembimbing', $pengambilan_data->pembimbing);
        $templateProcessor->setValue('nama_data', $pengambilan_data->nama_data);
        $templateProcessor->setValue('tempat', $pengambilan_data->tempat);
        $templateProcessor->setValue('alamat', $pengambilan_data->alamat);
        $templateProcessor->setValue('karya_tulis', $pengambilan_data->karya_tulis);
        $templateProcessor->setValue('koor_skripsi', $pengambilan_data->koor_skripsi);
        $templateProcessor->setValue('nip_koor', $pengambilan_data->nip_koor);
        $templateProcessor->setValue('tanggal', $pengambilan_data->tanggal);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$pengambilan_data = pengambilan_data::find($id);
    	$pengambilan_data->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = pengambilan_data::all();

    	return view('admin.ad-pengambilan_data')->with('datas', $datas);
    }
}
