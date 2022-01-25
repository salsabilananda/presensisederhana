@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <body class="hold-transition sidebar-mini">
          <section class="section">
              <div class="section-header">
                <h1>Halaman Rekap Presensi Karyawan</h1>
              </div>
          </section>

          <div class="section-body">
            <div class="card">
               <div class="content"><br>
                 <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-header"><b>Periode Presensi</b></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="label">Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="label">Tanggal Akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                            </div>
                            <div class="form-group">
                                <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                                    Lihat <i class="fas fa-print"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </body>
</html> 
@endsection

  