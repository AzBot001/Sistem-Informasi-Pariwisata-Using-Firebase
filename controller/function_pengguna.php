<?php

function tampil_pengguna($base_url, $database)
{

    $nomor = 1;
    $fetch_data = $database->getReference('User')->getValue();
    foreach ($fetch_data as $key => $row) {
?>

        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row['Nama'] ?></td>
            <td><?= $row['Kota Asal'] ?></td>
            <td>
                <?php
                if ($row['Jenis Kelamin'] == 'Pria') {
                ?>
                    <div style="color:#007bff"><i class="fas fa-male"></i> Pria</div>
                <?php
                } else {
                ?>
                    <div style="color:#ea5b69"><i class="fas fa-female"></i> Wanita</div>
                <?php
                }
                ?>
            </td>
            <td>
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cek<?= $key ?>">
                    <i class="fas fa-search"></i>
                </button>
            </td>
        </tr>
        <div iv class="modal fade" id="cek<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <div class="card card-info card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= isset($row['Foto']) ? 'https://firebasestorage.googleapis.com/v0/b/test-f2700.appspot.com/o/users%2F' . $row["Foto"] . '?alt=media&token=a5e311bd-153e-403c-96b0-4c3361b2228b' : $base_url . 'public/assets/dist/img/user.png' ?>" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center mt-2"><?= $row['Nama'] ?></h3>
                        <p class="text-muted text-center"><?= $row['Kota Asal'] ?></p>
                        <div class="row p-2">
                            <div class="col-4">
                                <h6><b>Email</b></h6>
                            </div>
                            <div class="col-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-7 text-right">
                                <h6><?= $row['Email'] ?></h6>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-4">
                                <h6><b>Jenis Kelamin</b></h6>
                            </div>
                            <div class="col-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-7 text-right">
                                <h6>
                                <?php
                if ($row['Jenis Kelamin'] == 'Pria') {
                ?>
                    <div style="color:#007bff"><i class="fas fa-male"></i> Pria</div>
                <?php
                } else {
                ?>
                    <div style="color:#ea5b69"><i class="fas fa-female"></i> Wanita</div>
                <?php
                }
                ?>
                                </h6>
                            </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-4">
                                <h6><b>Alamat</b></h6>
                            </div>
                            <div class="col-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-7 text-right">
                                <h6><?= $row['Alamat'] ?></h6>
                            </div>
                        </div>
                        

                    </div>

                </div>
            </div>

    <?php

    }
}


    ?>