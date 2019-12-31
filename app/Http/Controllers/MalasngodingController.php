<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MalasngodingController extends Controller
{
    public function input(){
        return view('input');
    }
    public function proses(Request $request){
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required|min:4',
            'usia' => 'required|numeric'
        ]);

        return view('proses',['data'=>$request]);
    }
}
