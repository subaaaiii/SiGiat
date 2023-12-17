<!-- Footer -->
<!-- Add this modal HTML somewhere in your page -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Silahkan login untuk melakukan aksi ini.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="redirectToLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<style>
    .text-reset {
        text-decoration: none;
    }
</style>
<footer class="sticky-footer bg-primary " style="margin-top: 120px" ;>
    <!-- Section: Social media -->
    <!-- <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    </section> -->
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-4 " style="color:azure">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas me-3"></i>Sigiat
                    </h6>
                    <p>
                        SiGiat adalah jawaban untuk menciptakan lingkungan akademik yang lebih hidup dan terkoneksi.
                    </p>
                </div>

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="<?php echo base_url('Sigiat'); ?>" class="text-reset">Beranda</a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('Sigiat/tentangKami'); ?>" class="text-reset">Tentang Kami</a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('Auth'); ?>" class="text-reset">Login</a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('Auth/registration'); ?>" class="text-reset">Registrasi</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i>Jl. Rungkut Madya No.1, 60294, Surabaya</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        humas@upnjatim.ac.id
                    </p>
                    <p><i class="fas fa-phone me-3"></i> +62 6231 8706 369</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; SiGiat <?= date('Y'); ?> </span>
            </div>
        </div>
    </section>
    <!-- Section: Links  -->
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('filterButton').addEventListener('click', function() {
        var selectedBulanValue = document.getElementById('bulanDropdown').value;
        var selectedBulanArray = selectedBulanValue.split('-');
        var selectedBulan = selectedBulanArray[0];
        var selectedTahun = document.getElementById('tahunDropdown').value;

        // Set default values after filtering
        document.getElementById('bulanDropdown').value = selectedBulanValue ? selectedBulanValue : "";
        document.getElementById('tahunDropdown').value = selectedTahun ? selectedTahun : "";

        // Perform any action you want with selectedBulan, selectedTahun, and selectedBulanValue
        console.log('Selected Bulan Value:', selectedBulanValue);
        console.log('Selected Bulan:', selectedBulan);
        console.log('Selected Tahun:', selectedTahun);

        // Redirect or pass values to the controller as needed
        var redirectUrl = "<?= base_url("sigiat/filterBulanTahun") ?>/" + selectedBulan + "/" + selectedBulanArray[1] + "/" + selectedTahun;
        window.location.href = redirectUrl;
    });
</script>
<script>
    function previewFile() {
        var preview = document.getElementById('previewImage');
        var fileInput = document.getElementById('foto');
        var file = fileInput.files[0];

        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "<?= base_url('assets/img/foto_kegiatan/default.jpg') ?>";
        }
    }
</script>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js">
</script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js">
</script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/aos/aos.js"></script>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<script>
    function showLoginModal() {
        $('#loginModal').modal('show');
    }

    function redirectToLogin() {
        // Redirect the user to the login page
        window.location.href = "<?= base_url('auth'); ?>";
    }
</script>
<script>
    $(document).ready(function() {
        $('.toggle-daftar').on('click', function() {
            var button = $(this);
            var kegiatanId = button.data('kegiatan-id1');
            var userId = button.data('user-id1');

            $.ajax({
                url: '<?= base_url("sigiat/toggleDaftar") ?>',
                type: 'POST',
                data: {
                    kegiatanId: kegiatanId,
                    userId: userId
                },
                success: function(response) {
                    if (response == 'add') {
                        button.removeClass('btn-border').addClass('btn-primary');
                        button.html('<i class="fas fa-file-signature"></i> Terdaftar');
                    } else {
                        button.removeClass('btn-primary').addClass('btn-border');
                        button.html('<i class="fas fa-file-signature"></i> Saya Sudah Daftar');
                    }
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.toggle-follow').on('click', function() {
            var button = $(this);
            var organisasiId = button.data('organisasi');
            var userId = button.data('user-id2');

            $.ajax({
                url: '<?= base_url("sigiat/toggleFollow") ?>',
                type: 'POST',
                data: {
                    organisasiId: organisasiId,
                    userId: userId
                },
                success: function(response) {
                    if (response == 'add') {
                        button.removeClass('btn-border').addClass('btn-secondary');
                        button.html('Followed');
                    } else {
                        button.removeClass('btn-secondary').addClass('btn-border');
                        button.html('Follow');
                    }
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.toggle-favorite').on('click', function() {
            var button = $(this);
            var kegiatanId = button.data('kegiatan-id');
            var userId = button.data('user-id');

            $.ajax({
                url: '<?= base_url("sigiat/toggleFavorite") ?>',
                type: 'POST',
                data: {
                    kegiatanId: kegiatanId,
                    userId: userId
                },
                success: function(response) {
                    if (response == 'add') {
                        button.removeClass('btn-border').addClass('btn-warning');
                    } else {
                        button.removeClass('btn-warning').addClass('btn-border');
                    }
                }
            });
        });
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });



    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleAccess/'); ?>" + roleId;
            }

        });
    });
</script>


</body>

</html>