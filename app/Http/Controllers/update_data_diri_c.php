<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class update_data_diri_c extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view()
    {
        //ambil data dari post request

        $user = User::find( Auth::id() );
        $dosens = Dosen::all();

        return view('update_user')
            ->with('user', $user)
            ->with('dosens', $dosens);
    }

    public function update()
    {
    	$request 		= request();


    	//ambil data dari input user
    	$nama 			= $request->input('nama');
    	$npm 			= $request->input('npm');
    	$prodi 			= $request->input('prodi');
    	$dosen_pa 		= $request->input('dosen_pa');

    	//insert data ke database
    	$user = User::find(Auth::id());
;
    	$user->nama = $nama;
    	$user->npm = $npm;
        $user->dosen_id = $dosen_pa;
        $user->prodi = $prodi;
    	$user->save();

    	return redirect('/');
    }
}
