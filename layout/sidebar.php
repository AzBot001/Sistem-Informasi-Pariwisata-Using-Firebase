  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <div class="sideba-head" style="background-color: #3ebdc6;">
      <a href="<?= $base_url ?>prwst/index.php?hal=beranda_admin" class="brand-link">
        <img src="<?= $base_url ?>public/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text text-white">Pentadio</span>
      </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $base_url ?>public/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php?hal=beranda_admin" class="nav-link">
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?hal=informasi" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Informasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $base_url ?>lapak" class="nav-link">
              <i class="nav-icon fas fa-map-marked-alt"></i>
              <p>
                Fasilitas / Peta
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?hal=ulasan" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Ulasan
              </p>
            </a>
          </li>
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>