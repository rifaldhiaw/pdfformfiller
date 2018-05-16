<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use Illuminate\Support\Facades\Auth;
use App\pengambilan_data;
use Carbon\Carbon;
use Debugbar;

class pengambilan_data_c extends Controller
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

    	return view('form.pengambilan_data')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();

        //$koor_ar = Dosen::find( $request->input('koor_skripsi') )->toArray();
        $pembimbing_ar = Dosen::find( Auth::User()->dosen_id )->toArray();

    	//ambil data dari input user
    	$nama 			= Auth::User()->nama;;
    	$npm 			= Auth::User()->npm;
        $judul          = $request->input('judul');
    	$pembimbing 	= $pembimbing_ar['nama'];
        $nama_data  = $request->input('nama_data');
        $tempat  = $request->input('tempat');
        $alamat  = $request->input('alamat');
        $karya_tulis  = $request->input('karya_tulis');
        //$koor_skripsi  = $koor_ar['nama'];
        //$nip_koor  = $koor_ar['nip'];
        $tanggal          = $request->input('tanggal');

    	//insert data ke database
    	$pengambilan_data = new pengambilan_data;
    	$pengambilan_data->user_id = Auth::id();
        $pengambilan_data->judul = $judul;
        $pengambilan_data->pembimbing = $pembimbing;
        $pengambilan_data->nama_data = $nama_data;
        $pengambilan_data->tempat = $tempat;
        $pengambilan_data->alamat = $alamat;
        $pengambilan_data->karya_tulis = $karya_tulis;
        //$pengambilan_data->koor_skripsi = $koor_skripsi;
        //$pengambilan_data->nip_koor = $nip_koor;
        $pengambilan_data->tanggal = $tanggal;
    	$pengambilan_data->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\pengambilan_data.docx')
        );
        $pathSaveFile = storage_path('app\public\form\pengambilan_data-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('judul', $judul);
        $templateProcessor->setValue('pembimbing', $pembimbing);
        $templateProcessor->setValue('nama_data', $nama_data);
        $templateProcessor->setValue('tempat', $tempat);
        $templateProcessor->setValue('alamat', $alamat);
        $templateProcessor->setValue('karya_tulis', $karya_tulis);
        //$templateProcessor->setValue('koor_skripsi', $koor_skripsi);
        //$templateProcessor->setValue('nip_koor', $nip_koor);
        $templateProcessor->setValue('tanggal',  $tanggal);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
