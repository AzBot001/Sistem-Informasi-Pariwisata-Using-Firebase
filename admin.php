<?php

if ($_SESSION['type_user'] != 'admin' || $S_SESSION['type_user'] == 'staf') {

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


if (isset($_GET['hal']) && $_GET['hal'] == 'beranda_admin') {
    $title = 'Beranda';
    $icon = 'fas fa-tv';
    include 'pages/beranda.php';
} else if (isset($_GET['hal']) && $_GET['hal'] == 'informasi') {
    $title = 'Infromasi';
    $icon = 'fas fa-info-circle';
    include 'pages/informasi.php';
} else if (isset($_GET['hal']) && $_GET['hal'] == 'ulasan') {
    $title = 'Ulasan';
    $icon = 'fas';
    include 'pages/ulasan.php';
} else if (isset($_GET['hal']) && $_GET['hal'] == 'map') {
    $title = 'Map';
    $icon = 'fas';
    include 'pages/map.php';
} else {
?>
    <script>
        alert('Anda Tidak Dapat Mengakses Halaman Ini');
        document.location.href = '<?= $base_url ?>/index.php?hal=beranda_admin'
    </script>
<?php
}

include 'layout/footer.php';

?>