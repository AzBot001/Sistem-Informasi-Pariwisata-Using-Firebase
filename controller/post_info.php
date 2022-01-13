<?php

include 'function_info.php';

include('flash_message.php');
if(isset($_POST['simpan_informasi'])){

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $postData = [
        'judul'=>$judul,
        'isi'=>$isi,
      
    ];
    $ref_table = "informasi";
    $postRef = $database->getReference($ref_table)->push($postData);
    flash("msg_simpan_info","Data Informasi Berhasil Disimpan");
}
if(isset($_POST['edit_informasi'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $updateData = [
        'judul'=>$judul,
        'isi'=>$isi,
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