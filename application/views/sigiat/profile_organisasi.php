<section class="h-100 gradient-custom-2">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-12">
                <div class="card">
                    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        <div class="mx-auto mt-5 d-flex flex-column text-center">
                            <img src="<?= base_url() ?>assets/img/profile/<?= $organisasi['image'] ?>" alt="Generic placeholder image" class="rounded-circle img-fluid img-thumbnail mt-4 mb-2" style="width: 200px; height: 200px;">
                        </div>

                    </div>
                    <div class="ms-3 mx-auto" style="margin-top: 80px;">
                        <h5><?= $organisasi['name'] ?></h5>
                    </div>
                    <div class="mx-auto">
                        <?php if ($this->session->userdata('email')) : ?>
                            <?php if ($user['id'] != $organisasi['id']) : ?>
                                <?php if ($this->session->userdata('email')) : ?>
                                    <?php
                                    // Load the model at the beginning of your view file
                                    $this->load->model('Kegiatan_model');

                                    // Now you can use the model's methods in the view
                                    $isPengikut = $this->Kegiatan_model->isPengikut($organisasi['id'], $user['id']);
                                    $buttonColor = $isPengikut ? 'btn-secondary' : 'btn-border';
                                    ?>
                                    <button class="btn border toggle-follow <?= $buttonColor ?>" style="text-decoration: none" data-organisasi="<?= $organisasi['id'] ?>" data-user-id2="<?= $user['id'] ?>">
                                        <?php echo $isPengikut ? 'Followed' : 'Follow'; ?>
                                    </button>
                                <?php endif; ?>
                            <?php else : ?>
                                <button type="button" class="btn btn-outline-dark mt-2" data-mdb-ripple-color="dark" style="width:120px">
                                    Edit Profile
                                </button>
                            <?php endif; ?>
                        <?php else : ?>
                            <button class="btn border" style="text-decoration: none" onclick="showLoginModal()">
                                Follow
                            </button>
                        <?php endif; ?>

                    </div>
                    <div class="p-4 text-black mt-3" style="background-color: #f8f9fa;">
                        <div class="d-flex justify-content-center text-center py-1">
                            <div>
                                <p class="mb-1 h5"><?= $jumlahkegiatan ?></p>
                                <p class="small text-muted mb-0">Kegiatan</p>
                            </div>
                            <div class="px-3">
                                <p class="mb-1 h5"><?= $follower ?></p>
                                <p class="small text-muted mb-0">Pengikut</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4 text-black">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="lead fw-normal mb-0">Kegiatan <strong><?= $organisasi['name'] ?></strong></p>
                        </div>
                        <?php
                        // Urutkan array berdasarkan ID secara menaik
                        usort($kegiatan, function ($a, $b) {
                            return $a->id - $b->id;
                        });

                        // Balik urutan array
                        $kegiatan = array_reverse($kegiatan);
                        ?>
                        <div class="row mb-4">
                            <?php foreach ($kegiatan as $k) :


                            ?>
                                <div class="col-md-6 mt-4">
                                    <div class="card shadow">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="card-img-left img-fluid " src="<?= base_url() ?>assets/img/foto_kegiatan/<?= $k->foto ?>" width="100%">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <div class="float-right">
                                                        <?php if ($this->session->userdata('email')) : ?>
                                                            <?php
                                                            // Load the model at the beginning of your view file
                                                            $this->load->model('Kegiatan_model');

                                                            // Now you can use the model's methods in the view
                                                            $isFavorite = $this->Kegiatan_model->isFavorite($k->id, $user['id']);
                                                            $buttonColor = $isFavorite ? 'btn-warning' : 'btn-border';
                                                            ?>
                                                            <button class="btn border toggle-favorite <?= $buttonColor ?>" style="text-decoration: none" data-kegiatan-id="<?= $k->id ?>" data-user-id="<?= $user['id'] ?>">
                                                                <i class="fas fa-star"></i> Favorite
                                                            </button>
                                                        <?php else : ?>
                                                            <button class="btn border" style="text-decoration: none" onclick="showLoginModal()">
                                                                <i class="fas fa-star"></i> Favorite
                                                            </button>
                                                        <?php endif; ?>
                                                    </div>

                                                    <p class="card-text limited-text" style="color: #2e59d9;"><b><?= $k->name ?></b></p>
                                                    <?php

                                                    // Ubah format tanggal ke objek DateTime
                                                    $tanggalBerakhir = new DateTime($k->tanggal_berakhir);

                                                    // Tanggal hari ini
                                                    $hariIni = new DateTime();

                                                    // Hitung selisih hari
                                                    $selisih = $hariIni->diff($tanggalBerakhir);
                                                    $selisihHari = $selisih->format('%a');

                                                    // Tampilkan pesan sesuai kondisi
                                                    if ($selisihHari > 0) {
                                                        echo "<p class='card-text'>Registrasi : $selisihHari hari lagi</p>";
                                                    } elseif ($selisihHari == 0) {
                                                        echo "<p class='card-text'>Hari ini terakhir registrasi</p>";
                                                    } else {
                                                        echo "<p class='card-text'>Registrasi telah ditutup</p>";
                                                    }
                                                    ?>
                                                    <h5 class="card-title limited-text"><b><?= $k->judul ?></b></h5>
                                                    <p class="card-text limited-text"><?= $k->deskripsi ?></p>
                                                    <a href="<?= base_url("sigiat/viewMore/{$k->id}") ?>">Lihat Selengkapnya...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>