@extends('layouts.main2')
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{ asset('assets/img/rajawali.png') }}" alt="logo" width="170" class="shadow-light">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Registrasi Akun</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('simpanregistrasi') }}">
                    {{ csrf_field() }}  
                
                <div class="row">
                    <div class="form-group col-12">
                      <label for="nama_karyawan">Nama Karyawan</label>
                      <input id="nama_karyawan" type="text" class="form-control" name="nama_karyawan" autofocus>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input id="jabatan" type="text" class="form-control" name="jabatan">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input id="no_telp" type="text" class="form-control" name="no_telp">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Daftar
                    </button>
                  </div>

                  <a href="{{ route('login') }}" >saya sudah mempunyai akun</a>

                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Salsabila 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>