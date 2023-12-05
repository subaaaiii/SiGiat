<nav class="navbar navbar-expand-lg navbar-light light" style="height: 80px; z-index: 1000">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">SiGiat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Tentang Kami</a>
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
          <button type="button" class="btn btn-primary"><a style="text-decoration : none; color:white;" href="<?= base_url('auth/registration') ?>">Daftar</a></button>
        </li>
      </ul>
    </div>
  </div>
</nav>