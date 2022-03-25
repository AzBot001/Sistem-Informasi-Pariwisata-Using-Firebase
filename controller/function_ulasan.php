<?php

function tampil_ulasan($database, $base_url)
{

    $nomor = 1;
    $fetch_data = $database->getReference('rating')->getValue();
    foreach ($fetch_data as $key => $row) {
        $uid = $row['uid'];
       
?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td>
                <?php
                $rating = $row['ratings'];
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
            <td>
                <?= $row['waktu'] ?>
            </td>
            <td>
                <?php
                if(isset($row['balasan'])){
                    ?>
                        <div class="badge badge-success"><i class="fas fa-check"></i> Sudah Dibalas</div>
                    <?php
                }else{
                    ?>
                        <div class="badge badge-danger"><i class="fas fa-times"></i> Belum Dibalas</div>
                    <?php
                }
                ?>
            </td>

            <td>
                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $key ?>">
                <button type="button" class="btn btn-warning btn-xs text-white" data-toggle="modal" data-target="#history<?= $nomor ?>">
                    <i class="fas fa-history"></i>
                </button>
                <button type="button" class="btn btn-primary btn-xs text-white" data-toggle="modal" data-target="#detail<?= $nomor ?>">
                    <i class="fas fa-search"></i>
                </button>
                <button type="submit" name="hapus_ulasan" onclick="return confirm('Anda Yakin?')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                </form>
               
                


            </td>
        </tr>
        <!-- modal-history -->
        <div class="modal fade" id="history<?= $nomor ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Riwayat Ulasan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            <?php

                            $fetch_data2 = $database->getReference('rating')->getValue();
                            foreach ($fetch_data2 as $keys => $rows) {

                                if ($uid == $rows['uid']) {
                            ?>
                                    <li class="list-group-item">
                                        <h6><b><?= $rows['nama'] ?></b></h6>
                                        <?php
                                       
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
                                        <div class="mt-2">
                                           <b>Ulasan :</b>  <br>
                                            <?= $rows['ulasan'] ?>
                                        </div>
                                        <div class="mt-2">
                                        <b>Balasan :</b> <br>
                                            <?= !empty($rows['balasan']) ? $rows['balasan'] : '<div class="text-danger">Belum ada balasan</div>' ; ?>
                                        </div>
                                    </li>
                            <?php
                                }
                            }


                            ?>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- -------------------------- -->


         <!-- modal-detail -->
         <div class="modal fade" id="detail<?= $nomor ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <?= $row['ulasan']; ?>
                                        </p>
                                        <hr>
                                        <?php
                                                
                                        if ($row['balasan'] != NULL) {
                                        ?>
                                            Balasan :
                                            <div id="noedit<?= $nomor ?>">
                                                <h5>
                                                    <?php
                                                    echo "<p class='lead'>".$row['balasan']."</p>";
                                                    ?>
                                                </h5>
                                                <button id="show<?= $nomor ?>" class="btn btn-sm text-white btn-warning"><i class="fas fa-edit"></i> Edit Balasan</button>
                                            </div>
                                            <div id="edit<?= $nomor ?>">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <textarea name="balasan" class="form-control" id="" cols="30" rows="10"><?= $row['balasan'] ?></textarea>
                                                    <input type="hidden" name="id" value="<?= $key ?>" id="">
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
                                                    <input type="hidden" name="id" value="<?= $key ?>" id="">
                                                </div>
                                                <button type="submit" name="balas" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                            </form>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <!-- -------------------------- -->
<?php


    }
}


?>