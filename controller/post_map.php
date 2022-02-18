<?php

include 'function_map.php';
include 'app/upload.php';
include('flash_message.php');

if (isset($_POST['simpan_fasilitas'])) {

    $fasilitas = $_POST['fasilitas'];
    $long = $_POST['long'];
    $lat = $_POST['lat'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $info = $_POST['info'];

    $gambar = upload_gambar();
    if (!$gambar) {
        return false;
    }

    $postData = [
        'fasilitas' => $fasilitas,
        'long_lat' => $long.','.$lat,
        'harga' => $harga,
        'status' => $status,
        'info' => $info,
        'gambar' => $gambar,
    ];

    $ref_table = "fasilitas";
    $postRef = $database->getReference($ref_table)->push($postData);
    flash("msg_simpan_map", "Data Fasilitas Berhasil Disimpan");
}
