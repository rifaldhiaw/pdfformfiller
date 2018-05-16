<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use Illuminate\Support\Facades\Auth;
use App\data_alumni;
use Carbon\Carbon;
use Debugbar;

class data_alumni_c extends Controller
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

    	return view('form.data_alumni')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();

        $pembimbing_ar = Dosen::find( Auth::User()->dosen_id)->toArray();
        $dosen2_ar = Dosen::find( $request->input('dosen2') )->toArray();
        $pembahas_ar = Dosen::find( $request->input('pembahas') )->toArray();

    	//ambil data dari input user
    	$nama 			= Auth::User()->nama;
    	$npm 			= Auth::User()->npm;
    	$prodi 	        = Auth::User()->prodi;

        $email  = $request->input('email');
        $nohp  = $request->input('nohp');
        $alamat  = $request->input('alamat');
        $kota  = $request->input('kota');
        $provinsi  = $request->input('provinsi');
        $tempat_lahir  = $request->input('tempat_lahir');
        $tanggal_lahir  = $request->input('tanggal_lahir');
        $judul  = $request->input('judul');

        $pembimbing  = $pembimbing_ar['nama'];
        $nip_pembimbing  = $pembimbing_ar['nip'];

        $status_dosen2  = $request->input('status_dosen2');
        $nama_dosen2  = $dosen2_ar['nama'];
        $nip_dosen2  = $dosen2_ar['nip'];

        $pembahas  = $pembahas_ar['nama'];
        $nip_pembahas  = $pembahas_ar['nip'];

        $tgl_sk_pembimbing  = $request->input('tgl_sk_pembimbing');
        $tgl_usul  = $request->input('tgl_usul');
        $nilai_usul  = $request->input('nilai_usul');
        $tgl_hasil  = $request->input('tgl_hasil');
        $nilai_hasil  = $request->input('nilai_hasil');
        $tgl_ujian_skripsi  = $request->input('tgl_ujian_skripsi');
        $nilai_ujian_skripsi  = $request->input('nilai_ujian_skripsi');
        $lama_skripsi  = $request->input('lama_skripsi');
        $ipk  = $request->input('ipk');
        $toefl  = $request->input('toefl');
        $studi_th  = $request->input('studi_th');
        $studi_bln  = $request->input('studi_bln');

    	//insert data ke database
    	$daftar_kp = new data_alumni;
    	$daftar_kp->user_id = Auth::id();
        $daftar_kp->email = $email;
        $daftar_kp->nohp = $nohp;
        $daftar_kp->alamat = $alamat;
        $daftar_kp->kota = $kota;
        $daftar_kp->provinsi = $provinsi;
        $daftar_kp->tempat_lahir = $tempat_lahir;
        $daftar_kp->tanggal_lahir = $tanggal_lahir;
        $daftar_kp->judul = $judul;
        $daftar_kp->pembimbing = $pembimbing;
        $daftar_kp->nip_pembimbing = $nip_pembimbing;
        $daftar_kp->status_dosen2 = $status_dosen2;
        $daftar_kp->nama_dosen2 = $nama_dosen2;
        $daftar_kp->nip_dosen2 = $nip_dosen2;
        $daftar_kp->pembahas = $pembahas;
        $daftar_kp->nip_pembahas = $nip_pembahas;
        $daftar_kp->tgl_sk_pembimbing = $tgl_sk_pembimbing;
        $daftar_kp->tgl_usul = $tgl_usul;
        $daftar_kp->nilai_usul = $nilai_usul;
        $daftar_kp->tgl_hasil = $tgl_hasil;
        $daftar_kp->nilai_hasil = $nilai_hasil;
        $daftar_kp->tgl_ujian_skripsi = $tgl_ujian_skripsi;
        $daftar_kp->nilai_ujian_skripsi = $nilai_ujian_skripsi;
        $daftar_kp->lama_skripsi = $lama_skripsi;
        $daftar_kp->ipk = $ipk;
        $daftar_kp->toefl = $toefl;
        $daftar_kp->studi_th = $studi_th;
        $daftar_kp->studi_bln = $studi_bln;

    	$daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\data_alumni.docx'));
        $pathSaveFile = storage_path('app\public\form\data_alumni-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('prodi', $prodi);
        $templateProcessor->setValue('email', $email);
        $templateProcessor->setValue('nohp', $nohp);
        $templateProcessor->setValue('alamat', $alamat);
        $templateProcessor->setValue('kota', $kota);
        $templateProcessor->setValue('provinsi', $provinsi);
        $templateProcessor->setValue('tempat_lahir', $tempat_lahir);
        $templateProcessor->setValue('tanggal_lahir', $tanggal_lahir);
        $templateProcessor->setValue('judul', $judul);
        $templateProcessor->setValue('pembimbing', $pembimbing);
        $templateProcessor->setValue('nip_pembimbing', $nip_pembimbing);
        $templateProcessor->setValue('status_dosen2', $status_dosen2);
        $templateProcessor->setValue('nama_dosen2', $nama_dosen2);
        $templateProcessor->setValue('nip_dosen2', $nip_dosen2);
        $templateProcessor->setValue('pembahas', $pembahas);
        $templateProcessor->setValue('nip_pembahas', $nip_pembahas);
        $templateProcessor->setValue('tgl_sk_pembimbing', $tgl_sk_pembimbing);
        $templateProcessor->setValue('tgl_usul', $tgl_usul);
        $templateProcessor->setValue('nilai_usul', $nilai_usul);
        $templateProcessor->setValue('tgl_hasil', $tgl_hasil);
        $templateProcessor->setValue('nilai_hasil', $nilai_hasil);
        $templateProcessor->setValue('tgl_ujian_skripsi', $tgl_ujian_skripsi);
        $templateProcessor->setValue('nilai_ujian_skripsi', $nilai_ujian_skripsi);
        $templateProcessor->setValue('lama_skripsi', $lama_skripsi);
        $templateProcessor->setValue('ipk', $ipk);
        $templateProcessor->setValue('toefl', $toefl);
        $templateProcessor->setValue('studi_th', $studi_th);
        $templateProcessor->setValue('studi_bln', $studi_bln);

        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
