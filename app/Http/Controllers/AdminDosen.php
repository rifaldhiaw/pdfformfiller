<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class adminDosen extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view()
    {
    	$dosens = Dosen::all();

    	return view('admin.ad-dosen')->with('dosens', $dosens);
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
