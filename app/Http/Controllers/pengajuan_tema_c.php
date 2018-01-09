<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\pengajuan_tema;
use Carbon\Carbon;
use Debugbar;

class pengajuan_tema_c extends Controller
{
    public function view()
	{
    	//ambil data dosen
    	$dosens = Dosen::all();
        $date = Carbon::now();  

    	return view('form.pengajuan_tema')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();

        $dosen_pa_ar = Dosen::find( $request->input('dosen_pa') )->toArray();
        $pembimbing_ar = Dosen::find( $request->input('pembimbing') )->toArray();

    	//ambil data dari input user
    	$nama 			= $request->input('nama');
    	$npm 			= $request->input('npm');
    	$prodi 	= $request->input('prodi');
        $karya_tulis  = $request->input('karya_tulis');
        $judul_1  = $request->input('judul_1');
        $judul_2  = $request->input('judul_2');
        $pembimbing  = $pembimbing_ar['nama'];
        $nip_pembimbing  = $pembimbing_ar['nip'];
        $dosen_pa  = $dosen_pa_ar['nama'];
        $nip_pa  = $dosen_pa_ar['nip'];

    	//insert data ke database
    	$daftar_kp = new pengajuan_tema;
    	$daftar_kp->nama = $nama;
    	$daftar_kp->npm = $npm;
        $daftar_kp->prodi = $prodi;
        $daftar_kp->karya_tulis = $karya_tulis;
        $daftar_kp->judul_1 = $judul_1;
        $daftar_kp->judul_2 = $judul_2;
        $daftar_kp->pembimbing = $pembimbing;
        $daftar_kp->nip_pembimbing = $nip_pembimbing;
        $daftar_kp->dosen_pa = $dosen_pa;
        $daftar_kp->nip_pa = $nip_pa;
    	$daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\pengajuan_tema.docx')
        );
        
        $pathSaveFile = storage_path('app\public\form\pengajuan_tema-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('prodi', $prodi);
        $templateProcessor->setValue('karya_tulis', $karya_tulis);
        $templateProcessor->setValue('judul_1', $judul_1);
        $templateProcessor->setValue('judul_2', $judul_2);
        $templateProcessor->setValue('pembimbing', $pembimbing);
        $templateProcessor->setValue('nip_pembimbing', $nip_pembimbing);
        $templateProcessor->setValue('dosen_pa', $dosen_pa);
        $templateProcessor->setValue('nip_pa', $nip_pa);

        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
