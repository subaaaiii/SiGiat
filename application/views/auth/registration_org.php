<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun Organisasi </h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration_org'); ?>">
                            <div class=" form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Masukkan Nama Organisasi" value="<?= set_value('name') ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="lingkup">Ruang Lingkup Organisasi:</label>
                                <select class="form-control" id="lingkup" name="lingkup">
                                    <option value="1" <?= set_select('lingkup', '1', isset($lingkup) && $lingkup == '1') ?>>Universitas</option>
                                    <option value="2" <?= set_select('lingkup', '2', isset($lingkup) && $lingkup == '2') ?>>Fakultas</option>
                                    <option value="3" <?= set_select('lingkup', '3', isset($lingkup) && $lingkup == '3') ?>>Program Studi</option>
                                    <option value="4" <?= set_select('lingkup', '4', isset($lingkup) && $lingkup == '4') ?>>Luar UPN</option>
                                </select>
                                <?= form_error('lingkup', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class=" form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Alamat Email" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder=" Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/registration');?>">Daftar Sebagai User</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Sudah Punya Akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>