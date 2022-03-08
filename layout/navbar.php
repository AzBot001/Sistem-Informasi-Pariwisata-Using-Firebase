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
            <a href="<?= $base_url ?>app/logout.php" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>