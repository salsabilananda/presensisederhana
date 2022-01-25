<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\karyawan;
use App\Models\User;

class karyawancontroller extends Controller
{
    public function index() {
        $karyawan = User::All();
        return view('karyawan.karyawan', ['karyawan' => $karyawan]);
    }

    // public function create()
    // {
    //     $data = array(
    //         'menu' => 'karyawan',
    //         'submenu' => 'karyawan'
    //     ); 
    //     return view ('karyawan.create', $data);
    // }

    // public function store(Request $request)
    // {
    //     $data = array(
    //         'menu' => 'karyawan',
    //         'submenu' => 'karyawan'
    //     ); 
    
    //     karyawan::create($request->all());
    //     return redirect('/karyawan')->with('status', 'Data karyawan berhasil ditambahkan!');
    // }

    // public function edit(karyawan $karyawan)
    // {
    //     {
    //         $data = array(
    //             'menu' => 'karyawan',
    //             'submenu' => 'karyawan'
    //         ); 
    //         return view ('karyawan.edit', compact('karyawan'), $data);
    //     }
    // }

    // public function update(Request $request, karyawan $karyawan)
    // {
    //     karyawan::where('nip', $karyawan->nip) -> update ([
    //     'nip' => $request-> nip,
    //     'nama_karyawan' => $request -> nama_karyawan,
    //     'alamat_karyawan' => $request -> alamat_karyawan,
    //     'jenis_kelamin' => $request -> jenis_kelamin,
    //     'no_telp' => $request -> no_telp,
    //     'email' => $request -> email,
    //     'status' => $request -> status,
    //     'tanggal_masuk' => $request -> tanggal_masuk,
    //     'password' => $request -> password,
    //     'tanggal_lahir' => $request -> tanggal_lahir,
    //     'username' => $request -> username
    //     ]);

    //     return redirect('/karyawan')->with('status', 'Data karyawan berhasil diubah!');
    // }

    // public function destroy(karyawan $karyawan)
    // {
    //     {   jabatan::destroy($jabatan->nip);
    //         return redirect('/karyawan', compact('karyawan'), $data);
    //     }
    // }
}
