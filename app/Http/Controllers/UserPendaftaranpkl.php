<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar_kp;
use Illuminate\Support\Facades\Auth;
use App\Dosen;
use Carbon\Carbon;
use Debugbar;

class UserPendaftaranpkl extends Controller
{
	public function view()
	{
    	//ambil data dosen
    	$dosens = Dosen::all();
        $date = Carbon::now();  

    	return view('form.pendaftaran-pkl')
            ->with('dosens', $dosens)
            ->with('year', $date->year);
	}

    public function print()
    {
    	$request 		= request();

    	//ambil data dari input user
    	$nama 			= Auth::User()->nama;
    	$npm 			= Auth::User()->npm;
    	$program_studi 	= Auth::User()->prodi;
        $nip_pa         = Auth::User()->dosen->nip;
        $dosen_pa       = Auth::User()->dosen->nama;

        $tanggal_mulai_pkl       = $request->input('tanggal_mulai_pkl');
        $tanggal_selesai_pkl      = $request->input('tanggal_selesai_pkl');
    	$semester 		= $request->input('semester');
    	$tahun_ajar		= $request->input('tahun_ajar');
    	$tempat_pkl		= $request->input('tempat_pkl');
    	$alamat_pkl		= $request->input('alamat_pkl');
        $tanggal_ttd = Carbon::now()->format('d-m-Y'); 

    	//insert data ke database
    	$daftar_kp = new Daftar_kp;
    	$daftar_kp->user_id = Auth::id();
    	$daftar_kp->dibuat = Carbon::now();
    	$daftar_kp->semester = $semester;
    	$daftar_kp->tahun_ajar = $tahun_ajar;
    	$daftar_kp->tanggal = Carbon::now();
    	$daftar_kp->tempat_pkl = $tempat_pkl;
    	$daftar_kp->alamat_pkl = $alamat_pkl;
    	$daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\pendaftaran_pkl.docx'));
        $pathSaveFile = storage_path('app\public\form\pendaftaran-pkl-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('program_studi', $program_studi);
        $templateProcessor->setValue('dosen_pa', $dosen_pa);
        $templateProcessor->setValue('nip_pa', $nip_pa);
        $templateProcessor->setValue('semester', $semester);
        $templateProcessor->setValue('tahun_ajar', $tahun_ajar);
        $templateProcessor->setValue('tgl_mulai_pkl', $tanggal_mulai_pkl);
        $templateProcessor->setValue('tgl_selesai_pkl', $tanggal_selesai_pkl);
        $templateProcessor->setValue('tempat_pkl', $tempat_pkl);
        $templateProcessor->setValue('alamat_pkl', $alamat_pkl);
        $templateProcessor->setValue('tanggal_ttd', $tanggal_ttd);
        $templateProcessor->saveAs($pathSaveFile);

  //   	//inisialisasi pdf
  //   	$pdf = new Pdf(storage_path('app\public\pdf_template\form_test.pdf'), [
		//     	'command' => 'pdftk.exe',
		//     	'useExec' => true,]);
		
		// //isi data ke pdf
		// $pdf->fillForm(array(
		//         'nama'=>$nama,
		//         'npm' => $npm,
		//         'program_studi' => $program_studi,
		//     ))
		//     ->needAppearances()
		//     ->send('Form_KP/PKL.pdf', [
		//     	'command' => 'C:\Program Files\PDFtk Server\bin\pdftk.exe',
		//     	'useExec' => true,]);

		// debug($nama, $npm, $ps);
  //   	debug($pdf);

    	return response()->download($pathSaveFile)->deleteFileAfterSend(true);
    }
}
