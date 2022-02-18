<?php


function tampil_informasi($database)
{
    $nomor = 1;
    $fetch_data = $database->getReference('informasi')->getValue();
    foreach ($fetch_data as $key => $row) {
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['tanggal']?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $key ?>">
                    <button type="button" data-toggle="modal" data-target="#modal-detail<?= $key ?>" class="btn btn-xs btn-success"><i class="fas fa-search"></i></button>
                    <button type="button" data-target="#modal-edit<?= $key ?>" data-toggle="modal" class="btn btn-xs text-white btn-warning"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')" type="submit" name="hapus_info"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        <div class="modal fade" data-backdrop="static" id="modal-edit<?= $key ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fas fa-edit"></i> Edit Informasi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="hidden" value="<?= $key ?>" name="id">
                                        <input required type="text" value="<?= $row['judul'] ?>" name="judul" class="form-control text-center judul" placeholder="Judul Infromasi">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Isi Infromasi</label>
                                        <textarea name="isi" class="form-control" rows="10"><?= $row['isi'] ?></textarea>
                                        <input type="hidden" name="tanggal" value="<?= date('d/m/Y'); ?>">
                                    </div>
                                    <div class="form-group">
                                    <label>Gambar</label><br>
                                    <img src="<?= $row['gambar'] ?>" width="25%" alt=""><br><br>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="gambar">
                                        <input type="hidden" class="form-control" name="gambar_s" value="<?= $row['gambar'] ?>">
                                        <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Keluar</button>
                            <button type="submit" name="edit_informasi" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" data-backdrop="static" id="modal-detail<?= $key ?>">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fas fa-info-circle"></i> Detail Informasi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <h2 class="text-center"><?= $row['judul'] ?></h2>
                                <div class="text-center">
                                <img src="<?= $row['gambar'] ?>" width="50%" alt="">
                                </div>
                                <div class="col-12 text-justify"><?= $row['isi'] ?></div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Keluar</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
<?php
    }
}

?>