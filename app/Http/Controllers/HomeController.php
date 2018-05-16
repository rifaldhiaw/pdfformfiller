<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dosens = Dosen::all();
        
        return view('home')
            ->with('dosens', $dosens);
    }
}
