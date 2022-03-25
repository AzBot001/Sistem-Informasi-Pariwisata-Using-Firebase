<?php

// session_start();
if (isset($_POST['login'])) {
    $l_username = $_POST['username'];
    $l_pass = md5($_POST['pass']);
    $l_level = $_POST['level'];

    $fetch_data = $database->getReference('pengelola')->getValue();
    foreach ($fetch_data as $key => $row) {
        $array[] = $row['username'];
        $arr[] = $key;
    }
    $array_combine = array_combine($arr, $array);

    $cari = array_search($l_username, $array);
    //  var_dump($cari);
    $user =  $array[$cari];

    if ($cari === false) {
?>
        <script>
            alert('Username Yang Anda Masukan Tidak Ada');
        </script>
        <?php
    } else {

        $cari_id = array_search($l_username, $array_combine);
        $get_data_id = $database->getReference('pengelola')->getChild($cari_id)->getValue();
        $pass_db = $get_data_id['pass'];
        $nama_db = $get_data_id['nama'];
        $level_db = $get_data_id['level'];

        if ($l_pass == $pass_db) {

            if ($l_level == $level_db) {
                if ($l_level == 'Admin') {
                    $_SESSION['unique_user'] = $l_username;
                    $_SESSION['uid'] = $cari_id;
                    $_SESSION['nama'] = $nama_db;
                    $_SESSION['type_user'] = "admin";
                    $_SESSION['pass'] = $pass_db;
                    ?>
                    <script>
                        document.location.href = '<?= $base_url ?>index.php?hal=beranda_admin';
                    </script>
                    <?php
                } else if ($l_level = 'Staf Dinas') {
                    $_SESSION['unique_user'] = $l_username;
                    $_SESSION['uid'] = $cari_id;
                    $_SESSION['nama'] = $nama_db;
                    $_SESSION['type_user'] = "staf";
                    $_SESSION['pass'] = $pass_db;
                    ?>
                    <script>
                        document.location.href = '<?= $base_url ?>index.php?hal=beranda_staff';
                    </script>
                    <?php
                }
            } else {
        ?>
                <script>
                    alert('Akun Tidak Terdaftar Di Level <?= $l_level ?>');
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert('Password Yang Anda Masukan Salah!');
            </script>
<?php
        }
    }
}



?>