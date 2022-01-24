<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $primaryKey = 'nip';

    protected $fillable = [
        'nama_karyawan', 'alamat_karyawan', 'alamat_karyawan', 'jenis_kelamin', 'no_telp', 'email',
        'status', 'photo', 'tanggal_masuk', 'password', 'tanggal_lahir', 'username'
    ];
}
