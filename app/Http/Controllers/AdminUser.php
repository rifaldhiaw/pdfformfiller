<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUser extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view()
    {
    	$users = User::where('is_admin', 0)
                    ->get();

    	return view('admin.ad-user')->with('users', $users);
    }

    public function tambah()
    {
    	$request = request();
        $user = new user;

        $user->nama = $request->nama;
        $user->nip = $request->nip;
        $user->save();

    	return redirect()->route('admin_user');
    }

    public function edit()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$user = user::find($id);
    	
        return view('admin.ad-user-edit')
        	->with('nama_user', $user->nama)
        	->with('nip_user', $user->nip)
        	->with('id_user', $id);
    }

    public function update()
    {
    	$request = request();
    	$id = request()->input('id');
        $user = user::find($id);

        $user->nama = $request->nama;
        $user->nip = $request->nip;
        $user->save();

    	return redirect()->route('admin_user');
    }

    public function delete()
    {
    	//ambil data dari post request
    	$id = request()->input('id');

    	//ambil data pendaftaran kp dengan id lalu delete
    	$users = user::find($id);
    	$users->delete();
    	
        return redirect()->route('admin_user');
    }
}
