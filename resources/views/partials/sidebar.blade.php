<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">{{ auth()->user()->name }}</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
          </div>
          <ul class="sidebar-menu">

              <!-- <li class="menu-header">Dashboard</li> -->
              <br><br>
              @if (auth()->user()->level == "karyawan")
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Presensi Karyawan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/presensi-masuk')}}">Presensi Masuk</a></li>
                  <li><a class="nav-link" href="{{url('/presensi-keluar')}}">Presensi Keluar</a></li>
                </ul>
              </li>
              @endif

              @if (auth()->user()->level == "admin")
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Rekap Presensi</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/penggajian')}}">Rekap Per Karyawan</a></li>
                  <li><a class="nav-link" href="{{url('/penggajian')}}">Rekap Keseluruhan</a></li>
                </ul>
              </li>
              @endif
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                 Logout
              </a>
            </div>

        </aside>
      </div>