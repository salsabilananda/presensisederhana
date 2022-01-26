@extends('layouts.main')
@section('content')
<section class="section">
          <div class="section-header">
            <h1>Jabatan</h1>
          </div>
<body>
  <!-- <a href="/createjabatan" class="btn btn-primary my-3">Tambah Data</a> -->
  <div id="app">
      <div class="main-wrapper"> 
            <div class="row">
              <div class="col-12 ">
                <div class="card">
                
                <div class="card">
                  <div class="card-header">
                    <h4>Data Jabatan</h4>
                  </div>
                  
                  <div class="card-body">

                    <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Id</th>
                          <th scope="col">Nama Jabatan</th>
                          <th scope="col">Gaji Pokok</th>
                          <!-- <th scope="col">Opsi</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($jabatan as $data)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $data -> id }}</td>
                          <td>{{ $data -> nama_jabatan }}</td>
                          <td>{{ $data -> gaji_pokok }}</td>
                          <!-- <td>
                        
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
      </div>
</body>
</section>
@endsection