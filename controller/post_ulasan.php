<?php

include 'function_ulasan.php';
include 'app/upload.php';
include('flash_message.php');

if(isset($_POST['balas'])){
    $balasan = $_POST['balasan'];
    $id = $_POST['id'];
    $postData = [
        'balasan'=>$balasan,
    ];
    
    $ref_table = "rating/".$id;
    $postRef = $database->getReference($ref_table)->update($postData);
    flash("msg_balas","Balasan Berhasil Diinput");
}

if(isset($_POST['edit_balas'])){
    $balasan = $_POST['balasan'];
    $id = $_POST['id'];
    $postData = [
        'balasan'=>$balasan,
    ];
    
    $ref_table = "rating/".$id;
    $postRef = $database->getReference($ref_table)->update($postData);
    flash("msg_editBalas","Balasan Berhasil Diedit");
}

if(isset($_POST['hapus_ulasan'])){
    $id = $_POST['id'];
    $ref_table = 'rating/'.$id;
    $delete_ref = $database->getReference($ref_table)->remove();
    flash("msg_hapus_ulasan","Ulasan Berhasil Dihapus");
}

?>