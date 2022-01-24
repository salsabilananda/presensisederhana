<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penggajiancontroller extends Controller
{
    public function penggajian(){
        return view('penggajian.penggajian');
    }
}
