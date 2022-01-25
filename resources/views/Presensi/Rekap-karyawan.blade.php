@extends('layouts.main')
@section('content')
    <body class="hold-transition sidebar-mini">
          <section class="section">
              <div class="section-header">
                <h1>Rekap Presensi Karyawan</h1>
              </div>
          </section>

          <div class="section-body">
            <div class="card">
               <div class="content">
                 <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-header">Lihat Data</div>
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
                            <div class="form-group">
                                <table border="1">
                                    <tr>
                                        <th>Nama Karyawan</th>
                                        <th>Tanggal</th>
                                        <th>Masuk</th>
                                        <th>Keluar</th>
                                        <th>Jumlah Jam Kerja</th>
                                    </tr>
                                    @foreach ($presensi as $item)
                                    <tr>
                                        <td>{{ $item->user->nama_karyawan }}</td>
                                        <td>{{ $item->tgl }}</td>
                                        <td>{{ $item->jammasuk }}</td>
                                        <td>{{ $item->jamkeluar }}</td>
                                        <td>{{ $item->jamkerja }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>      
        </div>
@endsection