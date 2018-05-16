<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\seminar_kp;
use Carbon\Carbon;
use Debugbar;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ambil data dosen
        $dosens = Dosen::all();
        
        return view('user.user')->with('dosens', $dosens);
    }
}
