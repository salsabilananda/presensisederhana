<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.Login-aplikasi');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');
        }
        return redirect('/');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function registrasi() {
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request) {
        // dd($request->all());
        User::create([
            'nama_karyawan' => $request->nama_karyawan,
            'level' => 'karyawan',
            'jabatan' => $request->jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return view('Login.Login-aplikasi');
    }
}
