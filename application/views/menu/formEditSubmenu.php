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

            <form action="<?= base_url('menu/updateSubmenu') ?>" method="post">
                <?php foreach ($submenu as $sm) : ?>
                    <div class="form-group">
                        <label for="id">Id:</label>
                        <input type="text" class="form-control" id="id" name="id" value="<?= $sm->id ?>" readonly>
                    </div>
                    <div class="form-group">
                    <label for="id">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $sm->title ?>">
                    </div>
                    <div class="form-group">
                    <label for="id">Menu:</label>
                        <select name="menu_id" id="menu_id" class="form-control">
                            <?php foreach ($menu as $m) : ?>
                                <!-- value nya id tapi display nama menu -->
                                <option value="<?= $m['id']; ?>" <?php if ($m['id'] == $sm->menu_id) echo 'selected'; ?>><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="id">Url:</label>
                        <input type="text" class="form-control" id="url" name="url" value="<?= $sm->url ?>">
                    </div>
                    <div class="form-group">
                    <label for="id">Icon:</label>
                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm->icon ?>">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                            <label class=" form-check-label" for="is_active">
                                active?
                            </label>
                        </div>
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