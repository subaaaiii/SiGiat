<div class="container mt-4">
    <div class="card shadow">
        <div class="row">
            <div class="col-md-4">
                <img class="card-img-left img-fluid" src="<?= base_url('assets/img/foto_kegiatan/' . $kegiatan->foto) ?>" width="100%">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="float-right">
                        <?php if ($this->session->userdata('email')) : ?>
                            <?php
                            // Load the model at the beginning of your view file
                            $this->load->model('Kegiatan_model');

                            // Now you can use the model's methods in the view
                            $isFavorite = $this->Kegiatan_model->isFavorite($kegiatan->id, $user['id']);
                            $buttonColor = $isFavorite ? 'btn-warning' : 'btn-border';
                            ?>
                            <button class="btn border toggle-favorite <?= $buttonColor ?>" style="text-decoration: none" data-kegiatan-id="<?= $kegiatan->id ?>" data-user-id="<?= $user['id'] ?>">
                                <i class="fas fa-star"></i> Favorite
                            </button>
                        <?php else : ?>
                            <button class="btn border" style="text-decoration: none" onclick="showLoginModal()">
                                <i class="fas fa-star"></i> Favorite
                            </button>
                        <?php endif; ?>
                    </div>
                    <h5 class="card-title"><?= $kegiatan->judul ?></h5>
                    <p class="card-text">
                        <strong>Deskripsi:</strong><br>
                        <?= format_event_description2($kegiatan->deskripsi, $kegiatan->id) ?>
                        <a href="#" data-event-id="<?= $kegiatan->id ?>" onclick="toggleDescription(<?= $kegiatan->id ?>)"></a>
                    </p>
                    <p class="card-text"><strong>Penyelenggara:</strong> <?= $kegiatan->name ?></p>
                    <p class="card-text"><strong>Tanggal Daftar:</strong> <?= date('d-m-Y', strtotime($kegiatan->tanggal_daftar)) ?></p>
                    <p class="card-text"><strong>Tanggal Berakhir:</strong> <?= date('d-m-Y', strtotime($kegiatan->tanggal_berakhir)) ?></p>
                    <p class="card-text"><strong>Tanggal Kegiatan:</strong> <?= date('d-m-Y', strtotime($kegiatan->tanggal_kegiatan)) ?></p>
                    <!-- Tampilkan informasi lainnya sesuai kebutuhan -->
                    <a class="btn btn-secondary" onclick="goBack()">Kembali</a>
                    &nbsp;
                    <?php
                    // Assuming $kegiatan->link_pendaftaran contains the user-input URL
                    $userInputURL = $kegiatan->link_pendaftaran;

                    // Check if the URL starts with "http://" or without any protocol
                    if (!preg_match("~^(?:f|ht)tps?://~i", $userInputURL)) {
                        // If not, prepend "https://"
                        $userInputURL = "https://" . $userInputURL;
                    }
                    ?>
                    <a href="<?php echo $userInputURL; ?>" target="_blank" class="btn btn-primary" style="width: 20%;">Daftar</a>&nbsp;
                    <?php if ($this->session->userdata('email')) : ?>
                        <?php
                        // Load the model at the beginning of your view file
                        $this->load->model('Kegiatan_model');

                        // Now you can use the model's methods in the view
                        $isDaftar = $this->Kegiatan_model->isDaftar($kegiatan->id, $user['id']);
                        $buttonColor = $isDaftar ? 'btn-primary' : 'btn-border';
                        ?>
                        <button class="btn border toggle-daftar <?= $buttonColor ?>" style="text-decoration: none" data-kegiatan-id1="<?= $kegiatan->id ?>" data-user-id1="<?= $user['id'] ?>">
                            <i class="fas fa-file-signature"></i> <?php echo $isDaftar ? 'Terdaftar' : 'Saya Sudah Daftar'; ?>
                        </button>
                    <?php else : ?>
                        <button class="btn border" style="text-decoration: none" onclick="showLoginModal()">
                            <i class="fas fa-file-signature"></i> Saya Sudah Daftar
                        </button>
                    <?php endif; ?>
                </div>
                <!-- Letakkan link "Lihat Deskripsi" di sini -->
            </div>
        </div>
    </div>
</div>