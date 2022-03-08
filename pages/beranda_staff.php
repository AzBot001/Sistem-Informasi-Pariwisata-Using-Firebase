
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="<?= $icon ?>"></i> <?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $base_url ?>beranda_admin">Pentadio Resort</a></li>
                        <li class="breadcrumb-item active">Beranda</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <div class="text-center">
                                <h3>Pentadio Resort</h3>
                             
                                <?php
                                $ref_table = 'rating';
                                $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                                
                                $fetch_data = $database->getReference('rating')->getValue();
                                $total = is_double(0);

                                

                                foreach ($fetch_data as $key => $row) {

                                    $rat = doubleval($row['ratings']);
                                    $total += $rat;
                                }
                                $rata =  $total / $total_count;
                                if($rata == 0){
                                    ?>
                                       <img src="<?= $base_url ?>public/assets/image/bintang/0.png" width="350px" alt="">
                                    <?php
                                }
                                else if($rata >= 0 && $rata <= 0.69 ){
                                    ?>
                                       <img src="<?= $base_url ?>public/assets/image/bintang/.5.png" width="350px" alt="">
                                    <?php
                                }else if($rata >= 0.7 && $rata <= 1){
                                    ?>
                                           <img src="<?= $base_url ?>public/assets/image/bintang/1.png" width="350px" alt="">
                                    <?php
                                }else if($rata >= 1.1 && $rata <= 1.69){
                                    ?>
                                           <img src="<?= $base_url ?>public/assets/image/bintang/1.5.png" width="350px" alt="">
                                    <?php
                                }else if($rata >= 1.7 && $rata <= 2){
                                    ?>
                                           <img src="<?= $base_url ?>public/assets/image/bintang/2.png" width="350px" alt="">
                                    <?php
                                }else if($rata >= 2.1 && $rata <= 2.69){
                                    ?>
                                           <img src="<?= $base_url ?>public/assets/image/bintang/2.5.png" width="350px" alt="">
                                    <?php
                                }else if($rata >= 2.7 && $rata <= 3){
                                    ?>
                                           <img src="<?= $base_url ?>public/assets/image/bintang/3.png" width="350px" alt="">
                                    <?php
                                }else if($rata >= 3.1 && $rata <= 3.69){
                                    ?>
                                           <img src="<?= $base_url ?>public/assets/image/bintang/3.5.png" width="350px" alt="">
                                    <?php
                                }else if($rata >= 3.7 && $rata <= 4){
                                    ?>
                                           <img src="<?= $base_url ?>public/assets/image/bintang/4.png" width="350px" alt="">
                                    <?php
                                }else if($rata >= 4.1 && $rata <= 4.69){
                                    ?>
                                           <img src="<?= $base_url ?>public/assets/image/bintang/4.5.png" width="350px" alt="">
                                    <?php
                                }else if($rata >= 3.7 && $rata <= 5){
                                    ?>
                                           <img src="<?= $base_url ?>public/assets/image/bintang/5.png" width="350px" alt="">
                                    <?php
                                }
                                


                                ?>

                                <h5 class="mt-4"><i class="fas fa-star"></i> <?php echo round($rata,2); ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box ungu text-white">
                        <div class="inner">
                            <h3>
                                <?php

                                $ref_table = 'User';
                                $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                                echo $total_count;

                                ?>
                            </h3>
                            <p>Total Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                                <?php

                                $ref_table = 'fasilitas';
                                $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                                echo $total_count;

                                ?>
                            </h3>
                            <p>Total Fasilitas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                                <?php
                                $ref_table = 'rating';
                                $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                                echo $total_count;
                                ?>
                            </h3>
                            <p>Total Pengulas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-address-card"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>
                                <?php

                                $ref_table = 'informasi';
                                $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                                echo $total_count;

                                ?>
                            </h3>
                            <p>Total Informasi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-info-circle"></i>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>