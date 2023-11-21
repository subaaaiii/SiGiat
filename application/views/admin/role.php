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

            <a href="" class="btn btn-success mb-3 " data-toggle="modal" data-target="#newRoleModal"> Add New Role</a>
            <table class=" table table-hover">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['role']; ?></td>
                            <td>

                                <a href="<?= base_url('admin/roleAccess/' . $r['id']) ?>" class="badge badge-primary">access</a>
                                <a href="<?= base_url('admin/updateRole/' . $r['id']) ?>" class="badge badge-warning">edit</a>
                                <a href="<?= base_url('admin/deleteRole/' . $r['id']) ?>" class="badge badge-danger">delete</a>
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

<!-- Modal -->
<div class=" modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role') ?>" method="post">
                <div class=" modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>