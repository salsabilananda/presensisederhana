<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\jabatancontroller;
use App\Http\Controllers\penggajiancontroller;
use App\Http\Controllers\karyawancontroller;
use App\Http\Controllers\presensicontroller;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('Login.Login-aplikasi');
});

//login
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    route::get('/dashboard', [dashboardcontroller::class,'dashboard'])->name('dashboard');
});

// //jabatan
// // Route::resource('jabatan', jabatancontroller::class);
// Route::get('/jabatan', [jabatancontroller::class, 'index']);
// Route::get('/createjabatan', [jabatancontroller::class, 'create']);
// Route::post('/jabatan', [jabatancontroller::class, 'store']);

// //karyawan
// Route::get('/karyawan', [karyawancontroller::class, 'index']);
// Route::get('/createkaryawan', [karyawancontroller::class, 'create']);

// //penggajian
// Route::get('/penggajian', [penggajiancontroller::class, 'penggajian']);

// //presensi
// Route::get('/presensi', [presensicontroller::class, 'presensi']);
// Route::get('/perizinan', [presensicontroller::class, 'perizinan']);

