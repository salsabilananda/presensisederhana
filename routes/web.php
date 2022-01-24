<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\jabatancontroller;
use App\Http\Controllers\penggajiancontroller;
use App\Http\Controllers\karyawancontroller;
use App\Http\Controllers\presensicontroller;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [dashboardcontroller::class, 'dashboard']);

//jabatan
// Route::resource('jabatan', jabatancontroller::class);
Route::get('/jabatan', [jabatancontroller::class, 'index']);
Route::get('/createjabatan', [jabatancontroller::class, 'create']);
Route::post('/jabatan', [jabatancontroller::class, 'store']);

//karyawan
Route::get('/karyawan', [karyawancontroller::class, 'index']);
Route::get('/createkaryawan', [karyawancontroller::class, 'create']);

//penggajian
Route::get('/penggajian', [penggajiancontroller::class, 'penggajian']);

//presensi
Route::get('/presensi', [presensicontroller::class, 'presensi']);
Route::get('/perizinan', [presensicontroller::class, 'perizinan']);