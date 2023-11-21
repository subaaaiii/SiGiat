<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>
    <div class="row">
        <div class="col-lg-6">
            <!-- Failed -->
            <!-- <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>') ?> -->
            <!-- success -->
            <?= $this->session->flashdata('message');  ?>

            <a href="<?=base_url('kegiatan/tambahKegiatan');?>" class="btn btn-success mb-3 "> Tambah Kegiatan Baru</a>
            
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->