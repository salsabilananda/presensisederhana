@extends('layouts.main')
@section('content')
<section class="section">
          <div class="section-header">
            <h1>Karyawan</h1>
          </div>
        </section>
<body>
  <a href="/createkaryawan" class="btn btn-primary my-3">Tambah Data</a>
      <div class="main-wrapper">
      <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Karyawan</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Alamat Karyawan</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Tanggal Masuk</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($karyawan as $data)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $data -> nip }}</td>
                          <td>{{ $data -> nama_karyawan }}</td>
                          <td>{{ $data -> alamat_karyawan }}</td>
                          <td>{{ $data -> jenis_kelamin }}</td>
                          <td>{{ $data -> no_telp }}</td>
                          <td>{{ $data -> email }}</td>
                          <td>{{ $data -> status }}</td>
                          <td>{{ $data -> photo }}</td>
                          <td>{{ $data -> tanggal_masuk }}</td>
                          <td>{{ $data -> username }}</td>
                          <td>{{ $data -> password }}</td>
                          <td>{{ $data -> tanggal_lahir }}</td>
                          <td>
                          <a href="/karyawan/{{ $data->nip }}/edit" class="btn btn-primary">Edit</a>
                          <form action="/karyawan" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                          </td>
                        </tr>
                         @endforeach
                      </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
</body>

@endsection