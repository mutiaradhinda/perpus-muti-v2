<!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->username }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active':''}}">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('buku') }}" class="nav-link {{ Request::is('buku') ? 'active':''}}">
              <i class="fa-solid fa-book"></i>
              <p>
                Data Buku
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('penulis') }}" class="nav-link {{ Request::is('penulis') ? 'active':''}}">
              <i class="fa fa-pencil-alt"></i>
              <p>
                Penulis
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('Penerbit') }}" class="nav-link {{ Request::is('Penerbit') ? 'active':''}}">
              <i class="fa fa-building"></i>
              <p>
                  Penerbit
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('Kategori') }}" class="nav-link {{ Request::is('Kategori') ? 'active':''}}">
              <i class="ion ion-pie-graph"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
            
          <li class="nav-item">
            <a href="{{ route('peminjamen.index') }}" class="nav-link {{ Request::is('peminjaman.index') ? 'active':''}}">
              <i class="fa-solid fa-bookmark"></i>
              <p>
                Peminjam
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-lock"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/login')}}" class="nav-link">
              <i class="fa-solid fa-lock"></i>
              <p>
                Login
              </p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>