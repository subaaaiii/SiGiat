<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>

    <div class="row ml-2">
        <div class="col-lg-8">
            <?= form_open_multipart('kegiatan/updateKegiatan'); ?>
            <div class="form-group row">
                <label for="id"><b>ID Kegiatan</b></label>
                <div class="col">
                    <input type="text" class="form-control" id="id" name="id" value="<?= $k->id ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_kegiatan"><b>Tanggal Main Event :</b></label>
                <div class="col">
                    <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" value="<?= $k->tanggal_kegiatan ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_daftar"><b>Tanggal Pendaftaran :</b></label>
                <div class="col">
                    <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar" value="<?= $k->tanggal_daftar ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_berakhir"><b>Tanggal Berakhir :</b></label>
                <div class="col">
                    <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" value="<?= $k->tanggal_berakhir ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="judul"><b>Judul Kegiatan</b></label>
                <input type="judul" class="form-control" id="judul" placeholder="Inputkan Judul Kegiatan" name="judul" value="<?= $k->judul ?>">
            </div>
            <div class="form-group row">
                <label for="deskripsi"><b>Deskripsi </b></label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan deskripsi" value="<?= $k->deskripsi ?>"></textarea>
                <!-- Anda dapat menambahkan atribut rows untuk menentukan jumlah baris awal -->
            </div>
            <div class="form-group row">
                <Label class="col-12 font-weight-bold">Foto Kegiatan</Label>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <img id="previewImage" src="<?= base_url("assets/img/foto_kegiatan/{$k->foto}") ?>" class="img-thumbnail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto" onchange="previewFile()">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary justify-content-center">Posting Kegiatan</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->