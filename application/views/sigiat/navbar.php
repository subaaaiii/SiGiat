<nav class="navbar navbar-expand-lg navbar-light light">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">SiGiat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">

        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url('Sigiat/tentangKami'); ?>">Tentang Kami</a>
        </li>
        <li class="nav-item">

          <?php if ($this->session->userdata('email')) : ?>
            <a class="nav-link" href="<?= base_url('sigiat/viewFavorite') ?>">Favorite</a>
          <?php else : ?>
            <a style="cursor: pointer;" class="nav-link" onclick="showLoginModal()">Favorite</a>
          <?php endif; ?>

        </li>
        <li class="nav-item">

          <?php if ($this->session->userdata('email')) : ?>
            <a class="nav-link" href="<?= base_url('sigiat/viewKegiatanku') ?>">Kegiatanku</a>
          <?php else : ?>
            <a style="cursor: pointer;" class="nav-link" onclick="showLoginModal()">Kegiatanku</a>
          <?php endif; ?>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth') ?>">Admin</a>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <?php if ($this->session->userdata('email')) : ?>
            <?php
            // Load the model at the beginning of your view file
            $this->load->model('Kegiatan_model');
            $terdaftar = $this->Kegiatan_model->getKegiatanTerdaftar($user['id']);
            $hariIni = new DateTime();
            $notif = 0;
            ?>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">
                Notifikasi
              </h6>

              <?php
              foreach ($terdaftar as $t) : ?>
                <?php
                $tanggalKegiatan = new DateTime($t->tanggal_kegiatan);
                $selisih = $hariIni->diff($tanggalKegiatan);
                $selisihHari = $selisih->format('%r%a');
                if ($selisihHari == 1 && $selisihHari > 0) {
                  echo
                  '<a class="dropdown-item d-flex align-items-center" href="' . base_url('/sigiat/viewMore/' . $t->id_kegiatan) . '">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  
                  <div>
                    <div class="small text-gray-500">' . $hariIni->format('d F Y') . '</div>
                    <span class="font-weight-bold">Anda memiliki kegiatan Esok Hari, Klik untuk melihat!</span>
                  </div>
                </a>';
                  $notif++;
                } else if ($selisihHari == 0) {
                  echo
                  '<a class="dropdown-item d-flex align-items-center" href="' . base_url('sigiat/viewMore/' . $t->id_kegiatan) . '">
            <div class="mr-3">
                <div class="icon-circle bg-primary">
                  <i class="fas fa-file-alt text-white"></i>
                </div>
              </div>
              
              <div>
                <div class="small text-gray-500">' . $hariIni->format('d F Y') . '</div>
                <span class="font-weight-bold">Anda memiliki Kegiatan Hari Ini, Klik untuk melihat!</span>
              </div>
            </a>';
                  $notif++;
                }
                ?>
              <?php endforeach ?>
              <?php if ($notif == 0) {
                echo
                '<div class="dropdown-item d-flex align-items-center">
            <div class="mr-3">
                <div class="icon-circle bg-success">
                  <i class="fas fa-check-double text-white"></i>
                </div>
              </div>
              
              <div>
                <div class="small text-gray-500">' . $hariIni->format('d F Y') . '</div>
                <span class="font-weight-bold">Anda Tidak Memiliki Kegiatan diwaktu dekat!</span>
              </div>
            </div>';
              } ?>
              <div class="dropdown-item text-center small text-gray-500" >Copyright &copy; SiGiat</div>
            </div>

            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bell fa-fw"></i>
              <!-- Counter - Alerts -->
              <?php if ($notif > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $notif ?></span>
              <?php } ?>
            </a>
          <?php else : ?>
            <a style="cursor: pointer;" class="nav-link" onclick="showLoginModal()">
              <i class="fas fa-bell fa-fw"></i>
            </a>
          <?php endif; ?>


        </li>
      </ul>
      <ul class="navbar-nav">
        <?php
        if (!$this->session->userdata('email')) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth') ?>">Login</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary"><a style="text-decoration : none; color:white;" href="<?= base_url('auth/registration') ?>">Daftar</a></button>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <?= $user['name']; ?></span>
              <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?> " style="width:30px; height:30px">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="<?= base_url('user') ?>">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                My Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>