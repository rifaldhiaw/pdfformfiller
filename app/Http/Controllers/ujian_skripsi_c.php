<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\ujian_skripsi;
use Carbon\Carbon;
use Debugbar;

class ujian_skripsi_c extends Controller
{
    public function view()
	{
    	//ambil data dosen
    	$dosens = Dosen::all();
        $date = Carbon::now();  

    	return view('form.ujian_skripsi')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();

        $ketua_penguji_ar = Dosen::find( $request->input('ketua_penguji') )->toArray();
        $dosen2_ar = Dosen::find( $request->input('dosen2') )->toArray();
        $penguji_ar = Dosen::find( $request->input('penguji') )->toArray();
        $dosen_pa_ar = Dosen::find( $request->input('dosen_pa') )->toArray();

    	//ambil data dari input user
    	$nama 			= $request->input('nama');
    	$npm 			= $request->input('npm');
    	$judul 	= $request->input('judul');

        $ketua_penguji  = $ketua_penguji_ar['nama'];
        $nip_ketua_penguji  = $ketua_penguji_ar['nip'];

        $status_dosen2  = $request->input('status_dosen2');
        $nama_dosen2  = $dosen2_ar['nama'];
        $nip_dosen2  = $dosen2_ar['nip'];

        $penguji  = $penguji_ar['nama'];
        $nip_penguji  = $penguji_ar['nip'];

        $dosen_pa  = $dosen_pa_ar['nama'];
        $nip_pa  = $dosen_pa_ar['nip'];

        $tanggal_berkas   = $request->input('tanggal_berkas');
        $hari  = $request->input('hari');
        $tanggal  = $request->input('tanggal');
        $pukul  = $request->input('pukul');
        $ruang  = $request->input('ruang');

    	//insert data ke database
    	$daftar_kp = new ujian_skripsi;
    	$daftar_kp->nama = $nama;
    	$daftar_kp->npm = $npm;
        $daftar_kp->judul = $judul;
        $daftar_kp->ketua_penguji = $ketua_penguji;
        $daftar_kp->nip_ketua_penguji = $nip_ketua_penguji;
        $daftar_kp->status_dosen2 = $status_dosen2;
        $daftar_kp->nama_dosen2 = $nama_dosen2;
        $daftar_kp->nip_dosen2 = $nip_dosen2;
        $daftar_kp->penguji = $penguji;
        $daftar_kp->nip_penguji = $nip_penguji;
        $daftar_kp->dosen_pa = $dosen_pa;
        $daftar_kp->nip_pa = $nip_pa;
        $daftar_kp->tanggal_berkas  = $tanggal_berkas ;
        $daftar_kp->hari = $hari;
        $daftar_kp->tanggal = $tanggal;
        $daftar_kp->pukul = $pukul;
        $daftar_kp->ruang = $ruang;
    	$daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\ujian_skripsi.docx'));
        $pathSaveFile = storage_path('app\public\form\ujian_skripsi-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('judul', $judul);
        $templateProcessor->setValue('ketua_penguji', $ketua_penguji);
        $templateProcessor->setValue('nip_ketua_penguji', $nip_ketua_penguji);
        $templateProcessor->setValue('status_dosen2', $status_dosen2);
        $templateProcessor->setValue('nama_dosen2', $nama_dosen2);
        $templateProcessor->setValue('nip_dosen2', $nip_dosen2);
        $templateProcessor->setValue('penguji', $penguji);
        $templateProcessor->setValue('nip_penguji', $nip_penguji);
        $templateProcessor->setValue('dosen_pa', $dosen_pa);
        $templateProcessor->setValue('nip_pa', $nip_pa);
        $templateProcessor->setValue('tanggal_berkas ', $tanggal_berkas );
        $templateProcessor->setValue('hari', $hari);
        $templateProcessor->setValue('tanggal', $tanggal);
        $templateProcessor->setValue('pukul', $pukul);
        $templateProcessor->setValue('ruang', $ruang);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
