<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('user/edit'); ?>
            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul Kegiatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_berakhir" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi">Deskripsi </label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan deskripsi"></textarea>
                <!-- Anda dapat menambahkan atribut rows untuk menentukan jumlah baris awal -->
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Foto Kegiatan</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url("assets/img/foto_kegiatan/default.jpg") ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->