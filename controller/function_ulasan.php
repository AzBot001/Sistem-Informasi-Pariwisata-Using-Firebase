<?php

function tampil_ulasan($database, $base_url)
{

    $nomor = 1;
    $fetch_data = $database->getReference('User')->getValue();
    foreach ($fetch_data as $key => $row) {
        $fetch_data2 = $database->getReference('rating')->getChild($key)->getValue();
        $rating = $fetch_data2['ratings'];
        $waktu = $fetch_data2['waktu'];
        $pesan = $fetch_data2['ulasan'];
        $uid = $fetch_data2['uid'];
        $bal = $fetch_data2['balasan'];
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row['Nama'] ?></td>
            <td>
                <?php

                if ($rating == NULL) {
                    echo "<div class='text-warning'><i class='fas fa-info-circle'></i> Pengunjung Belum Memberi Rating</div>";
                }

                if ($rating == '0') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/0.png" alt="" width="100px">
                <?php
                } else if ($rating == '0.5') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/.5.png" alt="" width="100px">
                <?php
                } else if ($rating == '1.0') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/1.png" alt="" width="100px">
                <?php
                } else if ($rating == '1.5') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/1.5.png" alt="" width="100px">
                <?php
                } else if ($rating == '2.0') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/2.png" alt="" width="100px">
                <?php
                } else if ($rating == '2.5') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/2.5.png" alt="" width="100px">
                <?php
                } else if ($rating == '3.0') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/3.png" alt="" width="100px">
                <?php
                } else if ($rating == '3.5') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/3.5.png" alt="" width="100px">
                <?php
                } else if ($rating == '4.0') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/4.png" alt="" width="100px">
                <?php
                } else if ($rating == '4.5') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/4.5.png" alt="" width="100px">
                <?php
                } else if ($rating == '5') {
                ?>
                    <img src="<?= $base_url ?>/public/assets/image/bintang/5.png" alt="" width="100px">
                <?php
                }

                ?>
            </td>
            <td><?php
                if (isset($waktu)) {
                    echo date('d-m-Y', $waktu / 1000);
                } else {
                    echo '-';
                }

                ?></td>
            <td>

                <button type="button" class="btn btn-xs  <?= empty($bal) ?  'btn-primary' :  'btn-success' ?>" data-toggle="modal" data-target="#exampleModal<?= $key ?>" <?php if ($rating == NULL) {
                                                                                                                                                                                echo 'disabled';
                                                                                                                                                                            } ?> <i class="fas fa-search"></i> Lihat Detail Ulasan
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Ulasan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="mt-5">
                                        <?php

                                        if ($rating == '0') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/0.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '0.5') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/.5.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '1.0') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/1.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '1.5') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/1.5.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '2.0') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/2.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '2.5') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/2.5.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '3.0') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/3.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '3.5') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/3.5.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '4.0') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/4.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '4.5') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/4.5.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        } else if ($rating == '5') {
                                        ?>
                                            <center>
                                                <img src="<?= $base_url ?>/public/assets/image/bintang/5.png" alt="" width="250px">
                                            </center>
                                        <?php
                                        }

                                        ?>
                                        <h5 class="mt-5">Pesan :</h5>
                                        <p class="lead">
                                            <?= $pesan; ?>
                                        </p>
                                        <hr>
                                        <?php

                                        if ($bal != NULL) {
                                        ?>
                                            Balasan :
                                            <div id="noedit<?= $nomor ?>">
                                                <h5>
                                                    <?php
                                                    echo "<p class='lead'>$bal</p>";
                                                    ?>
                                                </h5>
                                                <button id="show<?= $nomor ?>" class="btn btn-sm text-white btn-warning"><i class="fas fa-edit"></i> Edit Balasan</button>
                                            </div>
                                            <div id="edit<?= $nomor ?>">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <textarea name="balasan" class="form-control" id="" cols="30" rows="10"><?= $bal ?></textarea>
                                                    <input type="hidden" name="id" value="<?= $uid ?>" id="">
                                                </div>
                                                <button type="submit" name="edit_balas" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                <button id="hide<?= $nomor ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Batal</button>
                                            </form>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <h5>Balas Ulasan :</h5>
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <textarea name="balasan" class="form-control" id="" cols="30" rows="10"></textarea>
                                                    <input type="hidden" name="id" value="<?= $uid ?>" id="">
                                                </div>
                                                <button type="submit" name="balas" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                            </form>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
<?php


    }
}


?>