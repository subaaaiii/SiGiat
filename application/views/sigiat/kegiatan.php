<div class="container-fluid">
  <div class="container">
    <div class="row mt-4">
      <div class="col">
        <h2>Temukan <strong>Kegiatan</strong></h2>
      </div>
      <div class="col">
        <button class="btn btn-primary float-right"><a href="<?= base_url('sigiat/viewAll') ?>" style="text-decoration : none; color:white;">Lihat Semua Kegiatan</a></button>
      </div>
    </div>

    <!-- <div class="row mt-4">
      <a href="" style="text-decoration: none;color : #858796">
        <div class="col-md-3 pl-4 pr-4 pb-4">
          <div class="row align-items-center rounded p-2 custom-card ">
            <div class="col-3"><img src="" alt="" width="100%"></div>
            <div class="col-6 description">description</div>
          </div>
        </div>
      </a>
    </div> -->
    <div class="row mt-4">
      <?php foreach ($filter as $f) : ?>
        <div class="col-md-3 pl-4 pr-4 pb-4">
          <a href="#" style="text-decoration: none; color: #858796;">
            <div class="row align-items-center rounded p-2 custom-card">
              <div class="col-3 text-center mb-2">
                <img src="<?= base_url() ?>assets/icon/icons/<?= $f->icon ?>" alt="" width="70%">
              </div>
              <div class="col-6 description"><?= $f->jenis_kegiatan ?></div>
            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>
    <!-- END FILTER -->
    <?php
    // Urutkan array berdasarkan ID secara menaik
    usort($kegiatan, function ($a, $b) {
      return $a->id - $b->id;
    });

    // Balik urutan array
    $kegiatan = array_reverse($kegiatan);
    ?>
    <div class="row mb-4">
      <?php foreach ($kegiatan as $k) :?>
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

                  <!-- Add this modal HTML somewhere in your page -->
                  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Silahkan untuk menambahkan ke favorite.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" onclick="redirectToLogin()">Login</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                      </div>
                    </div>
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
</body>