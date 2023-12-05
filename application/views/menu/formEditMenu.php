<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>
    <div class="row">
        <div class="col-lg-4">
            <!-- Failed -->
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
            <!-- success -->
            <?= $this->session->flashdata('message');  ?>

            <form action="<?= base_url('menu/updateMenu') ?>" method="post">
                <?php foreach ($menu as $mn) : ?>
                    <div class="form-group">
                        <label for="no_antrian">Id:</label>
                        <input type="text" class="form-control" id="id" name="id" value="<?= $mn->id ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_antrian">Menu:</label>
                        <input type="text" class="form-control" id="menu" name="menu" value="<?= $mn->menu ?>">
                    </div>
                <?php endforeach; ?>
                <button type="Submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->