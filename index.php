<?php
include('dbcon.php');
include 'base_url.php';

if(empty($_GET['hal'])){
    include 'pages/login.php';
}else{

    include 'layout/header.php';
    include 'layout/sidebar.php';
    include 'layout/navbar.php';
   

    if (isset($_GET['hal']) && $_GET['hal'] == 'beranda_admin') {
        $title = 'Beranda';
        $icon = 'fas fa-tv';
        include 'pages/beranda.php';    
    }else if(isset($_GET['hal']) && $_GET['hal'] == 'informasi'){
        $title = 'Infromasi';
        $icon = 'fas fa-info-circle';
        include 'pages/informasi.php';
    }

    include 'layout/footer.php';
}






?>