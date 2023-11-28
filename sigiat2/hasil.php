<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Hasil</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500%2C600%2C700%2C800" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A500%2C600%2C700%2C800" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A700" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./styles/pencarian.css" />
  <link rel="stylesheet" href="./styles/hasil.css" />
</head>

<body>
  <div class="hasil-x17">
    <div class="auto-group-fp3z-GXb">
      <div class="auto-group-mbsj-Cg9">
        <div class="rectangle-3-Kkm">
        </div>
        <div class="navbar-czm">
          <p class="sigiat-HLD">SiGiat</p>
          <p class="tentang-kami-aq7">Tentang Kami</p>
          <p class="kegiatanku-hPw">
            <a href="pencarian.php" style="text-decoration: none;">Kegiatanku</a>
          </p>
          <p class="admin-pUZ">Admin</p>
          <p class="log-in-X85">Log in</p>
          <div class="auto-group-rpyo-eTb">Daftar</div>
        </div>
      </div>

      <?php
      // Data untuk setiap iterasi
      $data = [
        [
          'imageSrc' => './assets/poster-1-gNV.png',
          'faculty' => 'Fakultas Ilmu Komputer',
          'status' => 'Open Registrasi Peserta',
          'title' => 'OPEN TALK 2023',
          'paragraph' => 'Halo teman-teman KM FASILKOM ....'
        ],
        // Tambahkan data lainnya sesuai kebutuhan
      ];

      // Looping untuk menampilkan blok HTML sebanyak 2 kali
      for ($i = 0; $i < 1; $i++) { ?>
        <div class="content-card-item-5-GE5">
          <div class="media-AKT">
            <img class="poster-1-JRf" src="<?php echo $data[$i]['imageSrc']; ?>" />
          </div>
          <div class="card-content-zJV">
            <p class="h6-Ja5"><?php echo $data[$i]['faculty']; ?></p>
            <p class="h6-cam"><?php echo 'STATUS: ' . $data[$i]['status']; ?></p>
            <p class="h3-9Ko"><?php echo $data[$i]['title']; ?></p>
            <div class="tags-ov9">
              <a href="#">Lihat Selengkapnya...</a>
            </div>
            <p class="paragraph-Ucy"><?php echo $data[$i]['paragraph']; ?></p>
          </div>
        </div>

        <div class="content-card-item-5-aKs">
          <div class="media-4kq">
            <img class="poster-1-cGZ" src="./assets/poster-1-Qam.png" />
          </div>
          <div class="card-content-iaV">
            <p class="h6-eU9"><?php echo $data[$i]['faculty']; ?></p>
            <p class="h6-BDB"><?php echo 'STATUS: ' . $data[$i]['status']; ?></p>
            <p class="h3-VzZ"><?php echo $data[$i]['title']; ?></p>
            <div class="tags-N2m">
              <a href="#">Lihat Selengkapnya...</a>
            </div>
            <p class="paragraph-ESM"><?php echo $data[$i]['paragraph']; ?></p>
          </div>
        </div>

        <div class="auto-group-nwnx-sv1">
          <div class="content-card-item-5-Bvh">
            <div class="media-VgV">
              <img class="poster-1-cuX" src="./assets/poster-1-auF.png" />
            </div>
            <div class="card-content-hg5">
              <p class="h6-DeR"><?php echo $data[$i]['faculty']; ?></p>
              <p class="h6-KxM"><?php echo 'STATUS: ' . $data[$i]['status']; ?></p>
              <p class="h3-GMo"><?php echo $data[$i]['title']; ?></p>
              <div class="tags-42m">
                <a href="#">Lihat Selengkapnya...</a>
              </div>
              <p class="paragraph-ZLu"><?php echo $data[$i]['paragraph']; ?></p>
            </div>
          </div>
          <div class="content-card-item-5-7Fw">
            <div class="media-RnR">
              <img class="poster-1-kph" src="./assets/poster-1-nyX.png" />
            </div>
            <div class="card-content-Ezm">
              <p class="h6-a33"><?php echo $data[$i]['faculty']; ?></p>
              <p class="h6-htM"><?php echo 'STATUS: ' . $data[$i]['status']; ?></p>
              <p class="h3-F9B"><?php echo $data[$i]['title']; ?></p>
              <div class="tags-Jt9">
                <a href="#">Lihat Selengkapnya...</a>
              </div>
              <p class="paragraph-n97"><?php echo $data[$i]['paragraph']; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>

      <p class="cari-kegiatan-3ub">
        Hasil Pencarian Kegiatan di
        <br />
        “Fakultas Ilmu Komputer”
      </p>
    </div>
  </div>
</body>