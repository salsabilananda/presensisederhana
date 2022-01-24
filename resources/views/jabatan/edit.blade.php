@extends('layouts.main')
@section('content')
    <section class="section">
          <div class="section-header">
            <h1>Tambah Data Jabatan</h1>
          </div>
    </section>
    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah Data Jabatan</h4>
                    </div>
                    <form method="post" action="/jabatan" class="form-group">
                    @csrf
                    <div class="card-body">
                            <div class="form-group">
                                <label for="nama_jabatan">Nama Jabatan</label>
                                <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan">
                            </div>
                            
                            <div class="form-group">
                                <label for="gaji_pokok">Gaji Pokok</label>
                                <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok">
                            </div>

                        <br>   
                        <button type="submit" class="btn btn-primary my-3">Simpan</button>
                    </div>
                
                </div>
            </div>
    </div>
@endsection