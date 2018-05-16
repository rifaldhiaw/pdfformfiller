<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Form_template;
use Debugbar;
use Carbon\Carbon;

class FormTemplate extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view()
    {
        $datas = Form_template::all();

    	return view('admin.ad-form')->with('datas', $datas);
    }
    
    public function update()
    {
        $request        = request();

        $form = Form_template::find( $request->input('id') );
        $form->updated_at = Carbon::now();
        $form->save();

        $path = $request->file('file')
            ->storeAs('public/form', $form->nama);

        return redirect()->back();
    }


}
