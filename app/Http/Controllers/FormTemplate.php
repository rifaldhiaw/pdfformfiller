<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FormTemplate extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view()
    {

    	$daftar_hadir = asset('storage/form/daftar_hadir.docx');
    	$pendaftaran_pkl = Storage::url('app\public\form\pendaftaran_pkl.docx');
    	$pengajuan_tema = Storage::url('app\public\form\pengajuan_tema.docx');
    	$pengambilan_data = Storage::url('app\public\form\pengambilan_data.docx');
    	$pengisian_krs = Storage::url('app\public\form\pengisian_krs.docx');
    	$perbaikan_nilai = Storage::url('app\public\form\perbaikan_nilai.docx');
    	$seminar_kp = Storage::url('app\public\form\seminar_kp.docx');
    	$seminar_ta = Storage::url('app\public\form\seminar_ta.docx');
    	$seminar_usulhasil = Storage::url('app\public\form\seminar_usulhasil.docx');
    	$ujian_skripsi = Storage::url('app\public\form\ujian_skripsi.docx');

    	return view('admin.ad-form')
    		->with('daftar_hadir', $daftar_hadir)
    		->with('pendaftaran_pkl', $pendaftaran_pkl)
    		->with('pengajuan_tema', $pengajuan_tema)
    		->with('pengambilan_data', $pengambilan_data)
    		->with('pengisian_krs', $pengisian_krs)
    		->with('perbaikan_nilai', $perbaikan_nilai)
    		->with('seminar_kp', $seminar_kp)
    		->with('seminar_ta', $seminar_ta)
    		->with('seminar_usulhasil', $seminar_usulhasil)
    		->with('ujian_skripsi', $ujian_skripsi);
    }

    public function tambah()
    {
    	$request = request();
        $dosen = new Dosen;

        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->save();

    	return redirect()->route('admin_dosen');
    }

    public function edit()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$dosen = Dosen::find($id);
    	
        return view('admin.ad-dosen-edit')
        	->with('nama_dosen', $dosen->nama)
        	->with('nip_dosen', $dosen->nip)
        	->with('id_dosen', $id);
    }

    public function update()
    {
    	$request = request();
    	$id = request()->input('id');
        $dosen = Dosen::find($id);

        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->save();

    	return redirect()->route('admin_dosen');
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$dosens = Dosen::find($id);
    	$dosens->delete();
    	
        return redirect()->route('admin_dosen');
    }
}
