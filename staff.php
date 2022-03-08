<?php


if ($_SESSION['type_user'] != 'staf' || $S_SESSION['type_user'] == 'admin') {

    ?>
        <script>
            alert('Anda harus login untuk mengakses halaman ini!');
            window.location.href = '<?= $base_url; ?>';
        </script>
    <?php
        return false;
    }
include 'layout/header.php';
include 'layout/sidebar.php';
include 'layout/navbar.php';


if (isset($_GET['hal']) && $_GET['hal'] == 'beranda_staff') {
    $title = 'Beranda';
    $icon = 'fas fa-tv';
    include 'pages/beranda_staff.php';    
}else if(isset($_GET['hal']) && $_GET['hal'] == 'informasi_staff'){
    $title = 'Infromasi';
    $icon = 'fas fa-info-circle';
    include 'pages/informasi_staff.php';
}else if(isset($_GET['hal']) && $_GET['hal'] == 'ulasan_staff'){
    $title = 'Ulasan';
    $icon = 'fas';
    include 'pages/ulasan_staff.php';
}else if(isset($_GET['hal']) && $_GET['hal'] == 'map_staff'){
    $title = 'Map';
    $icon = 'fas';
    include 'pages/map_staff.php';
} else {
    ?>
        <script>
            alert('Anda Tidak Dapat Mengakses Halaman Ini');
            document.location.href = '<?= $base_url ?>/index.php?hal=beranda_staff'
        </script>
    <?php
    }

include 'layout/footer.php';

?>