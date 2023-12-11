<nav class="navbar navbar-expand-lg navbar-light light shadow"style="height: 80px;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('Sigiat'); ?>">SiGiat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Sigiat/tentangKami'); ?>">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kegiatanku</a>
          </li>

        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth') ?>">Login</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary">
              <a href="<?php echo base_url('Auth/registration'); ?>"></a>Daftar
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>