@extends('layouts.main')
@section('content')
<section class="section">
          <div class="section-header">
            <h1>Karyawan</h1>
          </div>
        </section>
<body>
  <!-- <a href="/createkaryawan" class="btn btn-primary my-3">Tambah Data</a> -->
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
                            <th scope="col">Id</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">No. Telp</th>
                            <!-- <th scope="col">Opsi</th> -->
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($karyawan as $data)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $data -> id }}</td>
                          <td>{{ $data -> nama_karyawan }}</td>
                          <td>{{ $data -> email }}</td>
                          <td>{{ $data -> jabatan }}</td>
                          <td>{{ $data -> no_telp }}</td>
                          <!-- <td>
                          <a href="/karyawan/{{ $data->id }}/edit" class="btn btn-primary">Edit</a>
                          <form action="/karyawan" method="post" class="inline">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                          </td> -->
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