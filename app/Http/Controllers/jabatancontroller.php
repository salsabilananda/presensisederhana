<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\jabatan;
use Illuminate\Support\Str;

class jabatancontroller extends Controller
{

    public function index() {
        $jabatan = jabatan::All();
        return view('jabatan.jabatan', ['jabatan' => $jabatan]);
    }

    // public function create()
    // {
    //     $data = array(
    //         'menu' => 'jabatan',
    //         'submenu' => 'jabatan'
    //     ); 
    //     return view ('jabatan.create', $data);
    // }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'id' => 'required',
    //         'nama_jabatan' => 'required',
    //         'gaji_pokok' => 'required'
    //     ]);

    //     jabatan::create($request->all());   

    //     return redirect()->route('jabatan.jabatan')->with('succes','Data Berhasil di Input');
    // }
}
