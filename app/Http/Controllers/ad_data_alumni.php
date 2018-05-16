<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_alumni;
use Carbon\Carbon;
use Debugbar;

class ad_data_alumni extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$datas = data_alumni::all();

    	return view('admin.ad-data_alumni')->with('datas', $datas);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$data_alumni = data_alumni::find($id);

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(
            storage_path('app\public\form\data_alumni.docx')
        );
        $pathSaveFile = storage_path('app\public\results\data_alumni-'.$data_alumni->user->npm.'.docx');
        
        $templateProcessor->setValue('nama', $data_alumni->user->nama);
        $templateProcessor->setValue('npm', $data_alumni->user->npm);
        $templateProcessor->setValue('prodi', $data_alumni->user->prodi);
        
        $templateProcessor->setValue('email', $data_alumni->email);
        $templateProcessor->setValue('nohp', $data_alumni->nohp);
        $templateProcessor->setValue('alamat', $data_alumni->alamat);
        $templateProcessor->setValue('kota', $data_alumni->kota);
        $templateProcessor->setValue('provinsi', $data_alumni->provinsi);
        $templateProcessor->setValue('tempat_lahir', $data_alumni->tempat_lahir);
        $templateProcessor->setValue('tanggal_lahir', $data_alumni->tanggal_lahir);
        $templateProcessor->setValue('judul', $data_alumni->judul);
        $templateProcessor->setValue('pembimbing', $data_alumni->pembimbing);
        $templateProcessor->setValue('nip_pembimbing', $data_alumni->nip_pembimbing);
        $templateProcessor->setValue('status_dosen2', $data_alumni->status_dosen2);
        $templateProcessor->setValue('nama_dosen2', $data_alumni->nama_dosen2);
        $templateProcessor->setValue('nip_dosen2', $data_alumni->nip_dosen2);
        $templateProcessor->setValue('pembahas', $data_alumni->pembahas);
        $templateProcessor->setValue('nip_pembahas', $data_alumni->nip_pembahas);
        $templateProcessor->setValue('tgl_sk_pembimbing', $data_alumni->tgl_sk_pembimbing);
        $templateProcessor->setValue('tgl_usul', $data_alumni->tgl_usul);
        $templateProcessor->setValue('nilai_usul', $data_alumni->nilai_usul);
        $templateProcessor->setValue('tgl_hasil', $data_alumni->tgl_hasil);
        $templateProcessor->setValue('nilai_hasil', $data_alumni->nilai_hasil);
        $templateProcessor->setValue('tgl_ujian_skripsi', $data_alumni->tgl_ujian_skripsi);
        $templateProcessor->setValue('nilai_ujian_skripsi', $data_alumni->nilai_ujian_skripsi);
        $templateProcessor->setValue('lama_skripsi', $data_alumni->lama_skripsi);
        $templateProcessor->setValue('ipk', $data_alumni->ipk);
        $templateProcessor->setValue('toefl', $data_alumni->toefl);
        $templateProcessor->setValue('studi_th', $data_alumni->studi_th);
        $templateProcessor->setValue('studi_bln', $data_alumni->studi_bln);
        $templateProcessor->saveAs($pathSaveFile);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$data_alumni = data_alumni::find($id);
    	$data_alumni->delete();
    	
    	//ambil data untuk ditampilkan kembali
    	$datas = data_alumni::all();

    	return view('admin.ad-data_alumni')->with('datas', $datas);
    }
}
