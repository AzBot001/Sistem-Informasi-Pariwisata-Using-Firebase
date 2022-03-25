<?php

function tampil_map($database)
{

    $nomor = 1;
    $fetch_data = $database->getReference('fasilitas')->getValue();
    foreach ($fetch_data as $key => $row) {
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row['fasilitas'] ?></td>
            <td><?= $row['longitude']." / ".$row['latitude'] ?></td>
            <td>Rp. <?= $row['harga'] ?></td>
            <td>
                <?php
                if ($row['status'] == 'Tersedia') {
                ?>
                    <div class="badge badge-pill badge-success">Tersedia</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-pill badge-danger">Belum Tersedia</div>
                <?php
                }
                ?>
            </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $key ?>">
                    <button type="button" data-toggle="modal" data-target="#modal-detail<?= $key ?>" class="btn btn-xs btn-success"><i class="fas fa-search"></i></button>
                    <button type="button" data-target="#modal-edit<?= $key ?>" data-toggle="modal" class="btn btn-xs text-white btn-warning"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')" type="submit" name="hapus_map"><i class="fas fa-trash"></i></button>
                </form>
            </td>
            <div class="modal fade" data-backdrop="static" id="modal-detail<?= $key ?>">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fas fa-info-circle"></i> Detail Fasilitas</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="text-center">
                                    <img src="<?= $row['gambar'] ?>" width="25%" alt="">
                                </div>
                                <div class="row p-2 mt-4">
                                    <div class="col-6">
                                        <h6>Nama Fasilitas</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6><?= $row['fasilitas'] ?></h6>
                                    </div>
                                </div>
                                <div class="row p-2 bg-light">
                                    <div class="col-6">
                                        <h6>Harga</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6>Rp. <?= $row['harga'] ?></h6>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-6">
                                        <h6>Longitude , Latitude</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6> <?= $row['longitude']." , ".$row['latitude'] ?></h6>
                                    </div>
                                </div>
                                <div class="row p-2 bg-light">
                                    <div class="col-6">
                                        <h6>Status</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6>
                                            <?php
                                            if ($row['status'] == 'Tersedia') {
                                            ?>
                                                <div class="badge badge-pill badge-success">Tersedia</div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="badge badge-pill badge-danger">Belum Tersedia</div>
                                            <?php
                                            }
                                            ?>
                                        </h6>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-6">
                                        <h6>Informasi</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6> <?= $row['info'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Keluar</button>
                        </div>

                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="modal fade" data-backdrop="static" id="modal-edit<?= $key ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fas fa-edit"></i> Edit Fasilitas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama Fasilitas</label>
                                    <input type="hidden" name="id" value="<?= $key ?>">
                                    <input type="text" name="fasilitas" value="<?= $row['fasilitas'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Longitude</label>
                                    <input type="text" name="long" value="<?= $row['longitude'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" name="lat" value="<?= $row['latitude'] ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-12">
                                <label>Harga Tiket</label>
                                
                                    <input type="text" value="<?= $row['harga'] ?>" name="harga" class="form-control">
                               
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option hidden><?= $row['status'] ?></option>
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Belum Tersedia">Belum Tersedia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Informasi</label>
                                    <textarea name="info" class="form-control" cols="30" rows="10"><?= $row['info'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Gambar</label><br>
                                    <img src="<?= $row['gambar'] ?>" width="25%" alt=""><br><br>
                                    <input type="hidden" name="gambar_s" value="<?= $row['gambar'] ?>">
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Keluar</button>
                            <button type="submit" name="edit_fasilitas" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        </tr>
<?php
    }
}
function tampil_map_staff($database)
{

    $nomor = 1;
    $fetch_data = $database->getReference('fasilitas')->getValue();
    foreach ($fetch_data as $key => $row) {
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row['fasilitas'] ?></td>
            <td><?= $row['longitude']." / ".$row['latitude'] ?></td>
            <td>Rp. <?= $row['harga']; ?></td>
            <td>
                <?php
                if ($row['status'] == 'Tersedia') {
                ?>
                    <div class="badge badge-pill badge-success">Tersedia</div>
                <?php
                } else {
                ?>
                    <div class="badge badge-pill badge-danger">Belum Tersedia</div>
                <?php
                }
                ?>
            </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $key ?>">
                    <button type="button" data-toggle="modal" data-target="#modal-detail<?= $key ?>" class="btn btn-xs btn-success"><i class="fas fa-search"></i></button>

                </form>
            </td>
            <div class="modal fade" data-backdrop="static" id="modal-detail<?= $key ?>">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fas fa-info-circle"></i> Detail Fasilitas</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="text-center">
                                    <img src="<?= $row['gambar'] ?>" width="25%" alt="">
                                </div>
                                <div class="row p-2 mt-4">
                                    <div class="col-6">
                                        <h6>Nama Fasilitas</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6><?= $row['fasilitas'] ?></h6>
                                    </div>
                                </div>
                                <div class="row p-2 bg-light">
                                    <div class="col-6">
                                        <h6>Harga</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6>Rp. <?= number_format($row['harga']) ?></h6>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-6">
                                        <h6>Longitude , Latitude</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6> <?= $row['longitude']." , ".$row['latitude'] ?></h6>
                                    </div>
                                </div>
                                <div class="row p-2 bg-light">
                                    <div class="col-6">
                                        <h6>Status</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6>
                                            <?php
                                            if ($row['status'] == 'Tersedia') {
                                            ?>
                                                <div class="badge badge-pill badge-success">Tersedia</div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="badge badge-pill badge-danger">Belum Tersedia</div>
                                            <?php
                                            }
                                            ?>
                                        </h6>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-6">
                                        <h6>Informasi</h6>
                                    </div>
                                    <div class="col-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6> <?= $row['info'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Keluar</button>
                        </div>

                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="modal fade" data-backdrop="static" id="modal-edit<?= $key ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fas fa-edit"></i> Edit Fasilitas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama Fasilitas</label>
                                    <input type="hidden" name="id" value="<?= $key ?>">
                                    <input type="text" name="fasilitas" value="<?= $row['fasilitas'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Longitude</label>
                                    <input type="text" name="long" value="<?= $row['longitude'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" name="lat" value="<?= $row['latitude'] ?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-12">
                                <label>Harga Tiket</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    </div>
                                    <input type="text" value="<?= $row['harga'] ?>" name="harga" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option hidden><?= $row['status'] ?></option>
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Belum Tersedia">Belum Tersedia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Informasi</label>
                                    <textarea name="info" class="form-control" cols="30" rows="10"><?= $row['info'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Gambar</label><br>
                                    <img src="<?= $row['gambar'] ?>" width="25%" alt=""><br><br>
                                    <input type="hidden" name="gambar_s" value="<?= $row['gambar'] ?>">
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Keluar</button>
                            <button type="submit" name="edit_fasilitas" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        </tr>
<?php
    }
}



?>