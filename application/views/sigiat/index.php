 <div class="container">
   <div class="hero">
     <!-- Dekstop -->
     <div class="d-md-block d-none">
       <div class="row mt-4">
         <div class="col-md-6">
           <div class="d-flex h-100">
             <div class="justify-content-center align-self-center">
               <h2>
                 <strong>Ikuti Kegiatan, </strong><br />
                 Cari Pengalaman
               </h2>
               <p>Cari dan Temukan Kegiatan Favoritmu</p>
               <a href="<?= base_url('sigiat/kegiatan') ?>"><button class="btn btn-lg btn-primary">
                   Temukan Kegiatan
                 </button></a>

             </div>
           </div>
         </div>
         <div class="col-md-6">
           <img src="<?= base_url() ?>assets/img/Hero.png" width="100%" />
         </div>
       </div>
     </div>

     <!-- Mobile -->

     <div class="d-sm-block d-md-none">
       <div class="row mt-4">
         <div class="col-md-6">
           <img src="<?= base_url() ?>assets/img/Hero.png" width="100%" />
         </div>
         <div class="col-md-6">
           <div class="d-flex h-100">
             <div class="justify-content-center align-self-center">
               <h2>
                 <strong>Ikuti Kegiatan, </strong><br />
                 Cari Pengalaman
               </h2>
               <p>Cari dan Temukan Kegiatan Favoritmu</p>
               <router-link class="btn btn-lg btn-primary" to="/FoodView">
                 <b-icon-arrow-right></b-icon-arrow-right> Cari Kegiatan
               </router-link>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="row mt-4">
     <div class="col">
       <h2>Kegiatan <strong>Terbaru</strong></h2>
     </div>
     <!-- <div class="col">
       <button class="btn btn-primary float-right"><a href="<?= base_url('sigiat/viewAll') ?>" style="text-decoration : none; color:white;">Lihat Semua Kegiatan</a></button>
     </div> -->
   </div>
   <!-- Card logic -->
   <?php
    // Separate events with open and closed registration
    $openRegistrationEvents = [];
    $closedRegistrationEvents = [];

    foreach ($kegiatan as $k) {
      $tanggalBerakhir = new DateTime($k->tanggal_berakhir);
      $hariIni = new DateTime();

      if ($hariIni < $tanggalBerakhir) {
        $openRegistrationEvents[] = $k;
      } else {
        $closedRegistrationEvents[] = $k;
      }
    }

    // Sort both arrays based on ID in ascending order
    usort($openRegistrationEvents, function ($a, $b) {
      return $b->id - $a->id;
    });

    usort($closedRegistrationEvents, function ($a, $b) {
      return $b->id - $a->id;
    });

    // Combine arrays (open registration events first)
    $combinedEvents = array_merge($openRegistrationEvents, $closedRegistrationEvents);

    $limit = 4;
    $count = 0;
    ?>
   <div class="row mb-4">
     <?php foreach ($combinedEvents as $k) :
        if ($count >= $limit) {
          break;
        }

        // Tambahkan satu ke hitungan
        $count++; ?>
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

                  $tanggalBerakhir = new DateTime($k->tanggal_berakhir);

                  // // Tanggal hari ini
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
   <!-- end Card Logic -->
   <center>
     <h5><a href="<?= base_url('sigiat/kegiatan') ?>">Tampilkan Semua Kegiatan ></a></h5>
   </center>
 </div>
 </body>