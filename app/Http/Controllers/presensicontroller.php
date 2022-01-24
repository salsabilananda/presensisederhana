<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class presensicontroller extends Controller
{
    public function presensi(){
        return view('presensi.presensi');
    }

    public function perizinan(){
        return view('presensi.perizinan');
    }
}
