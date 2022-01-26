<div class="main-sidebar">
        <aside id="sidebar-wrapper"><br>
          <div class="sidebar-brand">
            <img src="{{ asset('assets/img/rajawali.png') }}">
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
          </div>
          <ul class="sidebar-menu">

              <br><br>
              <li class="nav-item">
                <a href="{{url('/dashboard')}}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-check"></i><span>Presensi Karyawan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/presensi-masuk')}}">Presensi Masuk</a></li>
                  <li><a class="nav-link" href="{{url('/presensi-keluar')}}">Presensi Keluar</a></li>
                </ul>
              </li>

              @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="{{url('/filter-data')}}" class="nav-link"><i class="fas fa-columns"></i><span>Rekap Presensi</span></a>
              </li>
              @endif

              @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="{{url('/karyawan')}}" class="nav-link"><i class="fas fa-columns"></i><span>Data Karyawan</span></a>
              </li>
              @endif

              @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="{{url('/jabatan')}}" class="nav-link"><i class="fas fa-columns"></i><span>Data Jabatan</span></a>
              </li>
              @endif

            </ul>

            <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                 Logout
              </a>
            </div> -->

        </aside>
      </div>