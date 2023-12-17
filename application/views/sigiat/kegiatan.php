<div class="container-fluid">
  <div class="container">
    <div class="row mt-4 rounded">
      <div class="col">
        <center>
          <h2>Filter <strong>Kegiatan</strong></h2>
        </center>
      </div>

    </div>
    <div class="row mt-4 custom-box pt-4 rounded">
      <?php foreach ($filter as $f) : ?>
        <div class="col-md-3 pl-4 pr-4 pb-4">
          <a href="<?= base_url("sigiat/kegiatan/{$f->jenis_kegiatan}") ?>" style="text-decoration: none; color: #858796;">
            <div class="row align-items-center rounded p-2 custom-card" <?php if ($f->jenis_kegiatan == $titleFilter) : ?> style="border: 2px solid #4e73df; color: #4e73df;" <?php endif; ?>>
              <div class="col-3 text-center mb-2">
                <img src="<?= base_url() ?>assets/icon/icons/<?= $f->icon ?>" alt="" width="70%">
              </div>
              <div class="col-6 description"><?= $f->jenis_kegiatan ?></div>
            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>
    <!-- end box -->
    <div class="input-group mt-3">
      
      <div class="row border rounded p-2 custom-box ml-auto">
      <div class="dropdown show">
          <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            organisasi
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <?php foreach ($organisasi as $o) : ?>
              <a class="dropdown-item" href="<?= base_url('sigiat/profile/') . $o->id ?>" ><?= $o->name ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php
        // Array bulan dengan pasangan nilai
        $bulanArray = [
          1 => 'Januari',
          2 => 'Februari',
          3 => 'Maret',
          4 => 'April',
          5 => 'Mei',
          6 => 'Juni',
          7 => 'Juli',
          8 => 'Agustus',
          9 => 'September',
          10 => 'Oktober',
          11 => 'November',
          12 => 'Desember',
        ];
        $tahunArray = range(date("Y") - 1, date("Y") + 1);
        ?>
        <div class="form-inline">
          <div class="form-group mx-2">
            <label for="bulanDropdown">Bulan :&nbsp;</label>
            <select class="form-control" id="bulanDropdown">
              <option value="" disabled selected>Pilih Bulan</option>
              <?php foreach ($bulanArray as $nilai => $bulan) : ?>
                <option value="<?= $nilai . '-' . $bulan ?>"><?php echo $bulan; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group mx-2">
            <label for="tahunDropdown">Tahun :&nbsp;</label>
            <select class="form-control" id="tahunDropdown">
              <option value="" disabled selected>Pilih Tahun</option>
              <?php foreach ($tahunArray as $tahun) : ?>
                <option value="<?= $tahun ?>"><?= $tahun ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <button type="button" class="btn btn-outline-secondary" id="filterButton">Filter</button>
        </div>


      </div>
    </div>
    <!-- END FILTER -->
    <div class="row mt-4 ">
      <div class="col">
        <center>
          <h2>Hasil kegiatan <strong><?= $titleFilter ?></strong></h2>
        </center>
      </div>
    </div>
    <?php if ($isFilter === true) { ?>
      <div class="row">
        <div class="col">
          <button class="btn btn-primary float-right"><a href="<?= base_url('sigiat/kegiatan') ?>" style="text-decoration : none; color:white;">Lihat Semua Kegiatan</a></button>
        </div>
      </div>
    <?php } ?>
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

                  <a href="<?= base_url('sigiat/profile/') . $k->user_id ?>">
                   <p class="card-text limited-text" style="color: #2e59d9;"><b><?= $k->name ?></b></p>
                 </a>
                  <?php

                  // Ubah format tanggal ke objek DateTime
                  $tanggalBerakhir = new DateTime($k->tanggal_berakhir);

                  // Tanggal hari ini
                  $hariIni = new DateTime();

                  // Jika hari ini sebelum tanggal berakhir
                  if ($hariIni < $tanggalBerakhir) {
                    $selisih = $hariIni->diff($tanggalBerakhir);
                    $selisihHari = $selisih->format('%a');

                    if ($selisihHari > 0) {
                      echo "<p class='card-text'>Registrasi: $selisihHari hari lagi</p>";
                    } elseif ($selisihHari == 0) {
                      echo "<p class='card-text'>Hari ini terakhir registrasi</p>";
                    }
                  }
                  // Jika hari ini sama atau setelah tanggal berakhir
                  else {
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