
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <Img src="<?= base_url()?>assets/dist/img/huawei.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminHuawei</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <Img src="<?= base_url(); ?>assets/dist/img/<?php echo $userdata->foto; ?>" class="img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $userdata->nama; ?></a>
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Rumah
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('admin')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('admin/index2')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Produk</p>
                </a>
              </li>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('tabel/view_tabel')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Tabel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('tabel')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Tabel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('tabel/tambah')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Account</li>
          <li class="nav-item">
            <a href="<?= site_url('profile')?>" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('auth/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out!
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>