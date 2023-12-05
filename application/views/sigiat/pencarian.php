<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=0.75" />
  <meta name="theme-color" content="#000000" />
  <title>Pencarian</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500%2C700" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400%2C700" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles/pencarian.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles/hasil.css" />
</head>

<body>
  <div class="pencarian-cuX">
    <div class="auto-group-rfyd-3V3">

      <div class="auto-group-77c7-Gm7">
        <div class="rectangle-3-Cem">
        </div>
        <div class="navbar-gZw">
          <p class="sigiat-9iR">
            <a href="#">SiGiat</a>
          </p>
          <p class="tentang-kami-3Yu">
            <a href="#">Tentang Kami</a>
          </p>
          <p class="kegiatanku-mjo">
            <!-- Ganti Sesuai URL-->
            <a href="pencarian.php">Kegiatanku</a>
          </p>
          <p class="admin-t3j">
            <a href="#">Admin</a>
          </p>
          <p class="log-in-yqs">
            <a href="<?=base_url('auth')?>">Log in</a>
          </p>
          <div class="auto-group-5hkr-WL1">
            <a href="<?=base_url('auth/registration')?>">Daftar</a>
          </div>
        </div>
      </div>
      <p class="cari-kegiatan-usw">Cari Kegiatan</p>

      <div class="search-section-bkm">
        <img class="icon-5A9" src="<?=base_url()?>assets/icon/icon.png" />
        <div class="auto-group-jehy-naM">
          <!-- Sambungkan ke Database -->
          <select name="tingkat" id="tingkat" class="cari-kegiatan-7Mj" style="width: 97.5%;">
            <option value="" class="cari-kegiatan-7Mj">Pilih Tingkat</option>
            <option value="tingkat-1" class="cari-kegiatan-7Mj">Universitas</option>
            <option value="tingkat-2" class="cari-kegiatan-7Mj">Fakultas</option>
            <option value="tingkat-3" class="cari-kegiatan-7Mj">Prodi</option>
          </select>
          <!-- <img class="ph-caret-up-bold-Suo" src="./assets/ph-caret-up-bold.png" /> -->
        </div>
      </div>

      <div class="auto-group-jbvb-5Sy">
        <img class="vector-CGh" src="<?=base_url()?>assets/icon/vector.png" />
        <div class="result-section-j1j">
          <div class="auto-group-dq7m-QtZ">
            <img class="clock-w7o" src="<?=base_url()?>assets/icon/clock.png" />
            <a href="<?=base_url('sigiat/hasil')?>"><p class="universitas-f3o">Universitas</p></a>
            
          </div>

          <div class="auto-group-28jf-VS9">
            <img class="clock-pUR" src="<?=base_url()?>assets/icon/clock-wX7.png" />
            <p class="prodi-MDT">Prodi</p>
          </div>
          <div class="pilih-prodi--H77">
            <div class="auto-group-jehy-naM">
              <!-- Sambungkan ke Database -->
              <select name="prodi" id="prodi" class="pilih-prodi-Msf" style="width: 105%;">
                <option value="" class="pilih-prodi-Msf">Pilih Prodi</option>
                <option value="prodi-1" class="pilih-prodi-Msf">Prodi 1</option>
                <option value="prodi-2" class="pilih-prodi-Msf">Prodi 2</option>
                <option value="prodi-3" class="pilih-prodi-Msf">Prodi 3</option>
              </select>
            </div>
            <!-- <img class="ph-caret-up-bold-USV" src="./assets/ph-caret-up-bold-LKj.png" /> -->
          </div>
          <div class="auto-group-gtrk-ZD3">
            <img class="clock-Uqo" src="<?=base_url()?>assets/icon/clock-ACZ.png" />
            <p class="fakultas-o7P">Fakultas</p>
          </div>
          <div class="pilih-fakultas--vxh">
            <div class="auto-group-jehy-naM">
              <select name="fakultas" id="fakultas" class="pilih-fakultas-qJy" style="width: 105%;">
                <option value="" class="pilih-fakultas-qJy">Pilih Fakultas</option>
                <option value="tingkat-1" class="pilih-fakultas-qJy">Fakultas 1</option>
                <option value="tingkat-2" class="pilih-fakultas-qJy">Fakultas 2</option>
                <option value="tingkat-3" class="pilih-fakultas-qJy">Fakultas 3</option>
              </select>
            </div>
            <!-- <img class="ph-caret-up-bold-mTX" src="./assets/ph-caret-up-bold-RAR.png" /> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>