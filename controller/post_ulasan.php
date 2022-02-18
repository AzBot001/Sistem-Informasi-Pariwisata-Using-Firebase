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

?>