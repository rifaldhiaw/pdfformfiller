<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar_kp;
use Carbon\Carbon;
use Debugbar;

class ad_pendaftaran_pkl extends Controller
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

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\pendaftaran_pkl.docx'));
        $pathSaveFile = storage_path('app\public\results\pendaftaran_pkl-'.$daftar_kp->npm.'.docx');

        $templateProcessor->setValue('nama', $daftar_kp->nama);
        $templateProcessor->setValue('npm', $daftar_kp->npm);
        $templateProcessor->setValue('program_studi', $daftar_kp->program_studi);
        $templateProcessor->setValue('dosen_pa', $daftar_kp->dosen_pa);
        $templateProcessor->setValue('nip_pa', $daftar_kp->nip_pa);
        $templateProcessor->setValue('semester', $daftar_kp->semester);
        $templateProcessor->setValue('tahun_ajar', $daftar_kp->tahun_ajar);
        $templateProcessor->setValue('tgl_mulai_pkl', $daftar_kp->tanggal_mulai_pkl);
        $templateProcessor->setValue('tgl_selesai_pkl', $daftar_kp->tanggal_selesai_pkl);
        $templateProcessor->setValue('tempat_pkl', $daftar_kp->tempat_pkl);
        $templateProcessor->setValue('alamat_pkl', $daftar_kp->alamat_pkl);
        $templateProcessor->setValue('tanggal_ttd', $daftar_kp->tanggal_ttd);
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

    	return redirect('home/dashboard');
    }
}
