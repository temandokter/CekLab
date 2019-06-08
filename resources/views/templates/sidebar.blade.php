<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
              <li>
                <a href="{{ route('admin.index') }}">
                  <i class="fa fa-home"></i> <span>Home</span>
                </a>
              </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Data Pasien</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('admin.patient.index') }}"><i class="fa fa-circle-o"></i> Pasien</a></li>
                <li><a href="{{ route('admin.doctor.index') }}"><i class="fa fa-circle-o"></i> Dokter Pengirim</a></li>
                <li><a href="{{ route('admin.cinfo.index') }}""><i class="fa fa-circle-o"></i> Formulir Pemeriksaan</a></li>
              </ul>
            </li>
            <li class="treeview">
                <a href="#">
                  <i class="fa  fa-stethoscope"></i> <span>Data Dokter/Klinik</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ route('admin.doctor.index') }}""><i class="fa fa-circle-o"></i> Dokter</a></li>
                  <li><a href="{{ route('admin.clinic.index') }}""><i class="fa fa-circle-o"></i> Klinik</a></li>
                  <li><a href="{{ route('admin.clab.index') }}""><i class="fa fa-circle-o"></i> Cek Lab</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-user"></i> <span>Data Pegawai</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Pegawai</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Tanggal Spesimen</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Kondisi Spesimen</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Konfirmasi Petugas</a></li>
                </ul>
              </li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out text-red"></i> <span>{{ ('Logout') }}</span></a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>