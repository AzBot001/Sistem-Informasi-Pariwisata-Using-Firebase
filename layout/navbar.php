<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand  navbar-light" style="background-color: #3ebdc6;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
          <div class="text-white nav-link" role="button">Pentadio Resort</div>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link text-white" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i> <?= $_SESSION['nama'] ?>
          </a>
          <div class="dropdown-menu">
            <!-- <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-cog"></i> Pengaturan Akun
            </button> -->
            <a href="<?= $base_url ?>app/logout.php" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-cog"></i> Pengaturan Akun</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Nama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Password</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form action="" method="post">
                  <input type="hidden" name="uid" value="<?= $_SESSION['uid']; ?>">
                  <div class="form-group mb-2">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $_SESSION['nama'] ?>">
                  </div>
                  <div class="form-group mt-2">
                    <button name="ganti_nama" type="submit" class="btn btn-block btn-primary"><i class="fas fa-save"></i> Simpan</button>
                  </div>
                  
                </form>
              </div>


              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
