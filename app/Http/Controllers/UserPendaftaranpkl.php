<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar_kp;
use App\Dosen;
use Carbon\Carbon;
use Debugbar;

class UserPendaftaranpkl extends Controller
{
	public function view()
	{
    	//ambil data dosen
    	$dosens = Dosen::all();
    	return view('form.pendaftaran-pkl')->with('dosens', $dosens);
	}

    public function print()
    {
    	//ambil data dari input user
    	$request 		= request();
    	$nama 			= $request->input('nama');
    	$npm 			= $request->input('npm');
    	$program_studi 	= $request->input('program_studi');
    	$semester 		= $request->input('semester');
    	$tahun_ajar		= $request->input('tahun_ajar');
    	$dosen_pa		= $request->input('dosen_pa');
    	$nip_pa			= $request->input('nip_pa');
    	$tempat_pkl		= $request->input('tempat_pkl');
    	$alamat_pkl		= $request->input('alamat_pkl');

    	//insert data ke database
    	$daftar_kp = new Daftar_kp;
    	$daftar_kp->nama = $nama;
    	$daftar_kp->npm = $npm;
    	$daftar_kp->dibuat = Carbon::now();
    	$daftar_kp->program_studi = $program_studi;
    	$daftar_kp->semester = $semester;
    	$daftar_kp->tahun_ajar = $tahun_ajar;
    	$daftar_kp->tanggal = Carbon::now();
    	$daftar_kp->dosen_pa = $dosen_pa;
    	$daftar_kp->nip_pa = $nip_pa;
    	$daftar_kp->tempat_pkl = $tempat_pkl;
    	$daftar_kp->alamat_pkl = $alamat_pkl;
    	$daftar_kp->save();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app\public\form\form_test.docx'));
        $pathSaveFile = storage_path('app\public\results\pengajuan-kp-'.$npm.'.docx');

        $templateProcessor->setValue('nama', $nama);
        $templateProcessor->setValue('npm', $npm);
        $templateProcessor->setValue('jurusan', $program_studi);
        $templateProcessor->setValue('semester', $semester);
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
