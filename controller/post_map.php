<?php

include 'function_map.php';
include 'app/upload.php';
include('flash_message.php');

if (isset($_POST['simpan_fasilitas'])) {

    $fasilitas = $_POST['fasilitas'];
    $long = floatval($_POST['long']);
    $lat = floatval($_POST['lat']);
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $info = $_POST['info'];

    $gambar = upload_gambar();
    if (!$gambar) {
        return false;
    }

    $postData = [
        'fasilitas' => $fasilitas,
        'longitude' => $long,
        'latitude' => $lat,
        'harga' => $harga,
        'status' => $status,
        'info' => $info,
        'gambar' => $gambar,
    ];

    $ref_table = "fasilitas";
    $postRef = $database->getReference($ref_table)->push($postData);
    flash("msg_simpan_map", "Data Fasilitas Berhasil Disimpan");
}

if(isset($_POST['edit_fasilitas'])){
    $id = $_POST['id'];
    $fasilitas = $_POST['fasilitas'];
    $long = floatval($_POST['long']);
    $lat = floatval($_POST['lat']);
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $info = $_POST['info'];
    $gambar_sblm = $_POST['gambar_s'];
    if ($_FILES['gambar']['error'] === 4) {
        $gambar_baru = $gambar_sblm;
    } else {    
        $gambar_baru = upload_gambar();
        unlink($gambar_sblm);
    }

    $updateData = [
        'fasilitas' => $fasilitas,
        'longitude' => $long,
        'latitude' => $lat,
        'harga' => $harga,
        'status' => $status,
        'info' => $info,
        'gambar' => $gambar_baru,
    ];

    $ref_table = 'fasilitas/'.$id;
    $postRef = $database->getReference($ref_table)->update($updateData);

    flash("msg_edit_map","Data Fasilitas Berhasil Diubah");


}

if(isset($_POST['hapus_map'])){
    $id = $_POST['id'];
    $ref_table = 'fasilitas/'.$id;
    $delete_ref = $database->getReference($ref_table)->remove();
    flash("msg_hapus_map","Data Fasilitas Berhasil Dihapus");

}