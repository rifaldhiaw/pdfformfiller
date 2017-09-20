<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mikehaertl\pdftk\Pdf;
use App\Daftar_kp;
use Carbon\Carbon;
use Debugbar;

class AdminPendaftaranpkl extends Controller
{
    public function view()
    {
    	$daftar_kps = Daftar_kp::all();

    	return view('admin.pendaftaran-pkl')->with('daftar_kps', $daftar_kps);
    }

    public function print()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id tersebut
    	$daftar_kp = Daftar_kp::find($id);

    	//inisialisasi pdf
    	$pdf = new Pdf(storage_path('app\public\pdf_template\form_test.pdf'), [
		    	'command' => 'pdftk.exe',
		    	'useExec' => true,]);
		
		//isi data ke pdf
		$pdf->fillForm(array(
		        'nama'=>$daftar_kp->nama,
		        'npm' => $daftar_kp->npm,
		        'program_studi' => $daftar_kp->program_studi,
		    ))
		    ->needAppearances()
		    ->send('Form_KP/PKL.pdf', [
		    	'command' => 'C:\Program Files\PDFtk Server\bin\pdftk.exe',
		    	'useExec' => true,]);

    	//ambil data untuk ditampilkan kembali
    	$daftar_kps = Daftar_kp::all();

    	return view('admin.pendaftaran-pkl')->with('daftar_kps', $daftar_kps);
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

    	return view('admin.pendaftaran-pkl')->with('daftar_kps', $daftar_kps);
    }
}
