<?php

include 'function_info.php';
include 'app/upload.php';
include('flash_message.php');
if(isset($_POST['simpan_informasi'])){

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $gbr = $_POST['gbr'];
    $gambar = upload_gambar();
    if (!$gambar) {
        return false;
    }

    $postData = [
        'judul'=>$judul,
        'isi'=>$isi,
        'gambar'=>$gambar,
        'tanggal'=>$tanggal,
    ];
    $ref_table = "informasi";
    $postRef = $database->getReference($ref_table)->push($postData);
    flash("msg_simpan_info","Data Informasi Berhasil Disimpan");
}
if(isset($_POST['edit_informasi'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];

    $gambar_sblm = $_POST['gambar_s'];
    if ($_FILES['gambar']['error'] === 4) {
        $gambar_baru = $gambar_sblm;
    } else {
        $gambar_baru = upload_gambar();
        unlink($gambar_sblm);
    }
    $updateData = [
        'judul'=>$judul,
        'isi'=>$isi,
        'gambar'=>$gambar_baru,
        'tanggal'=>$tanggal,
       
    ];
    $ref_table = 'informasi/'.$id;
    $postRef = $database->getReference($ref_table)->update($updateData);

    flash("msg_edit_info","Data Informasi Berhasil Diubah");
}

if(isset($_POST['hapus_info'])){
    $id = $_POST['id'];
    $ref_table = 'informasi/'.$id;
    $delete_ref = $database->getReference($ref_table)->remove();
    flash("msg_hapus_info","Data Informasi Berhasil Dihapus");

}

?>