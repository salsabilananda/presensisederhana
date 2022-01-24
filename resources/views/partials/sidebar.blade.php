<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Admin</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Admin</a>
          </div>
          <ul class="sidebar-menu">

              <!-- <li class="menu-header">Dashboard</li> -->
              <br><br>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Karyawan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/karyawan')}}">Data Karyawan</a></li>
                  <!-- <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li> -->
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Penggajian</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/penggajian')}}">Penggajian Karyawan</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Kehadiran</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/presensi')}}">Presensi Karyawan</a></li>
                  <li><a class="nav-link" href="{{url('/perizinan')}}">Pengajuan Perizinan</a></li>
                  <!-- <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li> -->
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Jabatan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/jabatan')}}">Jabatan</a></li>
                </ul>
              </li>
              
              <!-- <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li> -->
            
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                 Logout
              </a>
            </div>
        </aside>
      </div>