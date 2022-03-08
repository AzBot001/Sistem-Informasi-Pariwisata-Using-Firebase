<?php
session_start();
error_reporting(0);
include('dbcon.php');
include 'base_url.php';

if(empty($_GET['hal'])){
    include 'pages/login.php';
}else{


if (!isset($_SESSION['unique_user'])) {
    ?>
        <script>
            alert('Anda harus login untuk mengakses halaman ini!');
            window.location.href = '<?= $base_url; ?>';
        </script>
    <?php
        return false;
}else{

if($_SESSION['type_user'] == 'admin'){

    require_once 'admin.php';

}else if($_SESSION['type_user'] == 'staf'){

    require_once 'staff.php';

}
}




   
}






?>