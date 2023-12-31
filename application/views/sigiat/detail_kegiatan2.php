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
                        <?= format_event_description2($kegiatan->deskripsi, $kegiatan->id) ?>
                        <a href="#" data-event-id="<?= $kegiatan->id ?>" onclick="toggleDescription(<?= $kegiatan->id ?>)"></a>
                    </p>
                    <p class="card-text"><strong>Penyelenggara:</strong> <?= $kegiatan->penyelenggara ?></p>
                    <p class="card-text"><strong>Tanggal Daftar:</strong> <?= date('d-m-Y', strtotime($kegiatan->tanggal_daftar)) ?></p>
                    <p class="card-text"><strong>Tanggal Berakhir:</strong> <?= date('d-m-Y', strtotime($kegiatan->tanggal_berakhir)) ?></p>
                    <p class="card-text"><strong>Tanggal Kegiatan:</strong> <?= date('d-m-Y', strtotime($kegiatan->tanggal_kegiatan)) ?></p>
                    <!-- Tampilkan informasi lainnya sesuai kebutuhan -->
                    <br>
                    <a href="<?= base_url('sigiat') ?>" class="btn btn-secondary" style="width: 20%;">Kembali</a>
                    &nbsp;
                    <a href="<?php echo $kegiatan->link_pendaftaran; ?>" class="btn btn-secondary" style="width: 20%;">Daftar</a>
                </div>
                <!-- Letakkan link "Lihat Deskripsi" di sini -->
            </div>
        </div>
    </div>
</div>