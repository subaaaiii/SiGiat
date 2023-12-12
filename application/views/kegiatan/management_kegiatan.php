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

            <a href="<?= base_url('kegiatan/insert'); ?>" class="btn btn-success mb-3 "> Tambah Kegiatan Baru</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID Kegiatan</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Tanggal Pendaftaran</th>
                            <th scope="col">Tanggal Penutupan Pendaftaran</th>
                            <th scope="col">Tanggal Acara Inti</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Link</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kegiatan as $k) : ?>
                            <tr>
                                <th scope="row"><?= $k->id ?></th>
                                <td><?= $k->judul ?></td>
                                <td><?= $k->tanggal_daftar ?></td>
                                <td><?= $k->tanggal_berakhir ?></td>
                                <td><?= $k->tanggal_kegiatan ?></td>
                                <td><?= $k->foto ?></td>
                                <td><?= $k->link_pendaftaran ?></td>
                                <td>
                                <a href="<?= base_url('kegiatan/updateKegiatan/' . $k->id) ?>" class="badge badge-warning">edit</a>
                                <a href="<?= base_url('kegiatan/deleteKegiatan/' . $k->id) ?>" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->