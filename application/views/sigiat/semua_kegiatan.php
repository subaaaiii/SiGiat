<div class="container">
    <div class="row mt-4">
        <div class="col">
            <center><h2><strong>Semua Kegiatan</strong></h2></center>
        </div>
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
        <?php foreach ($kegiatan as $k) : ?>
            <div class="col-md-6 mt-4">
                <div class="card shadow">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-left img-fluid " src="<?= base_url() ?>assets/img/foto_kegiatan/<?= $k->foto ?>" width="100%">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text limited-text" style="color: #2e59d9;"><b><?= $k->name ?></b></p>
                                <?php

                                // Ubah format tanggal ke objek DateTime
                                $tanggalBerakhir = new DateTime($k->tanggal_berakhir);

                                // Tanggal hari ini
                                $hariIni = new DateTime();

                                // Hitung selisih hari
                                $selisih = $hariIni->diff($tanggalBerakhir);
                                $selisihHari = $selisih->format('%a'); // Format '%R%a' memberikan hasil dengan tanda plus atau minus

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