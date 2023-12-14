<div class="container mt-4">
    <div class="card shadow">
        <div class="row">
            <div class="col-md-4">
                <img class="card-img-left img-fluid" src="<?= base_url('assets/img/foto_kegiatan/' . $kegiatan->foto) ?>" width="100%">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $kegiatan->judul ?></h5>
                    <p class="card-text">
                        <strong>Deskripsi:</strong><br>
                        <?= format_event_description($kegiatan->deskripsi, $kegiatan->id) ?>
                        <a href="<?=base_url("sigiat/viewMore2/{$kegiatan->id}")?>" data-event-id="<?= $kegiatan->id ?>" onclick="toggleDescription(<?= $kegiatan->id ?>)">Lihat Deskripsi</a>
                    </p>
                    <p class="card-text"><strong>Penyelenggara:</strong> <?= $kegiatan->name ?></p>
                    <p class="card-text"><strong>Tanggal Daftar:</strong> <?= date('d-m-Y', strtotime($kegiatan->tanggal_daftar)) ?></p>
                    <p class="card-text"><strong>Tanggal Berakhir:</strong> <?= date('d-m-Y', strtotime($kegiatan->tanggal_berakhir)) ?></p>
                    <p class="card-text"><strong>Tanggal Kegiatan:</strong> <?= date('d-m-Y', strtotime($kegiatan->tanggal_kegiatan)) ?></p>
                    <!-- Tampilkan informasi lainnya sesuai kebutuhan -->
                    <a class="btn btn-secondary" onclick="goBack()">Kembali</a>
                    &nbsp;
                    <a <?php
                    // Assuming $kegiatan->link_pendaftaran contains the user-input URL
                    $userInputURL = $kegiatan->link_pendaftaran;

                    // Check if the URL starts with "http://" or without any protocol
                    if (!preg_match("~^(?:f|ht)tps?://~i", $userInputURL)) {
                        // If not, prepend "https://"
                        $userInputURL = "https://" . $userInputURL;
                    }
                    ?>
                    <a href="<?php echo $userInputURL; ?>" target="_blank" class="btn btn-secondary" style="width: 20%;">Daftar</a>
                </div>
                <!-- Letakkan link "Lihat Deskripsi" di sini -->
            </div>
        </div>
    </div>
</div>