  <!-- Main Sidebar Container -->
  <?php
    $get = $_GET['hal'];
  ?>
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <div class="sideba-head" style="background-color: #3ebdc6;">
      <a href="<?= $base_url ?>prwst/index.php?hal=beranda_admin" class="brand-link">
        <img src="<?= $base_url ?>public/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text text-white"><img src="<?= $base_url ?>public/assets/image/logo/white.png" style="width: 92px; margin: auto;" alt=""></span>
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
          <a href="#" class="d-block"><?= $_SESSION['type_user'] == 'admin' ? 'Administrator' : 'Staf Dinas' ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= $_SESSION['type_user'] == 'admin' ? 'index.php?hal=beranda_admin' : 'index.php?hal=beranda_staff' ?>" class="nav-link <?php if($get == 'beranda_admin' || $get == 'beranda_staff'){ echo 'active';} ?>">
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $_SESSION['type_user'] == 'admin' ? 'index.php?hal=informasi' : 'index.php?hal=informasi_staff' ?>" class="nav-link <?php if($get == 'informasi' || $get == 'informasi_staff'){ echo 'active';} ?>">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Informasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $_SESSION['type_user'] == 'admin' ? 'index.php?hal=map' : 'index.php?hal=map_staff' ?>" class="nav-link <?php if($get == 'map' || $get == 'map_staff'){ echo 'active';} ?>">
              <i class="nav-icon fas fa-map-marked-alt"></i>
              <p>
                Fasilitas / Peta
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $_SESSION['type_user'] == 'admin' ? 'index.php?hal=ulasan' : 'index.php?hal=ulasan_staff' ?>" class="nav-link <?php if($get == 'ulasan' || $get == 'ulasan_staff'){ echo 'active';} ?>">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Ulasan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $_SESSION['type_user'] == 'admin' ? 'index.php?hal=pengguna' : 'index.php?hal=pengguna_staff' ?>" class="nav-link <?php if($get == 'pengguna' || $get == 'pengguna_staff'){ echo 'active';} ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>