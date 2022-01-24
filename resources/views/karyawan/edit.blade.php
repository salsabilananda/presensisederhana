@extends('layouts.main')
@section('content')
    <section class="section">
          <div class="section-header">
            <h1>Edit Data Karyawan</h1>
          </div>
    </section>
    <div class="row">
            <div class="col-12  ">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Edit Data Karyawan</h4>
                  </div>
                  <form method="post" action="/karyawan/{{ $jabatan->id }}" class="form-group">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip">
                            </div>
                            
                            <div class="form-group">
                                <label for="nama_karyawan">Nama Karyawan</label>
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan">
                            </div>

                            <div class="form-group">
                                <label for="alamat_karyawan">Alamat Karyawan</label>
                                <input type="text" class="form-control" id="alamat_karyawan" name="alamat_karyawan">
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            </div>

                            <div class="form-group">
                                <label for="no_telp">Nomor Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status">
                            </div>

                            <div class="form-group">
                                <label for="gaji_pokok">Gaji Pokok</label>
                                <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok">
                            </div>

                            <div class="form-group">
                                <label for="photo">Foto</label>
                                <input type="text" class="form-control" id="photo" name="photo">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_masuk">Tanggal Masuk</label>
                                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>

                        <br>   
                        <button type="submit" class="btn btn-primary my-3">Ubah</button>
                </div>
@endsection