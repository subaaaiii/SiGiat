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
               <router-link class="btn btn-lg btn-primary" to="/FoodView">
                 <b-icon-arrow-right></b-icon-arrow-right> Cari Kegiatan
               </router-link>
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
     <div class="col">
       <router-link to="/FoodView" class="btn btn-primary float-right"><b-icon-eye></b-icon-eye> Cari Kegiatan</router-link>
     </div>
   </div>

   <div class="row mb-4">
     <?php foreach ($kegiatan as $k) : ?>
       <div class="col-md-6 mt-4">
         <div class="card shadow">
           <div class="row">
             <div class="col-md-4">
               <img class="card-img-left img-fluid " src="<?= base_url() ?>assets/img/foto_kegiatan/<?=$k->foto ?>" width="100%">
             </div>
             <div class="col-md-8">
               <div class="card-body">
                 <p class="card-text limited-text" style="color: #2e59d9;"><b><?=$k->penyelenggara ?></b></p>
                 <p class="card-text">Registrasi : 12 hari lagi</p>
                 <h5 class="card-title limited-text"><b><?=$k->judul ?></b></h5>
                 <p class="card-text limited-text"><?=$k->deskripsi ?></p>
                 <a href="#">Lihat Selengkapnya...</a>
               </div>
             </div>
           </div>
         </div>
       </div>
     <?php endforeach ?>
   </div>
 </div>

 </body>