<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>
    <div class="row">
        <div class="col-lg-6">
            <!-- Failed -->
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>') ?>
            <!-- success -->
            <?= $this->session->flashdata('message');  ?>

            <table class=" table table-hover">
                <thead>
                    <th scope="col">No</th>
                    <th scope="col">Organisasi</th>
                    <th scope="col">Lingkup</th>
                    <th scope="col">Tanggal Request</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($request as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['name']; ?></td>
                            <td><?php if($r['lingkup']== 1){
                                echo "Universitas";
                            }else if($r['lingkup']== 2){
                                echo "Fakultas";
                            }else if($r['lingkup']== 3){
                                echo "Prodi";
                            }; ?></td>
                            <td><?= date('d F Y', $user['date_created']);  ?></td>
                            <td>

                                <a href="<?= base_url('admin/userActivation/' . $r['id']) ?>" class="badge badge-primary">accept</a>
                                <a href="<?= base_url('admin/deleteUser/' . $r['id']) ?>" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        <?php $i++  ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
