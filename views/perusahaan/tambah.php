<?php

include 'views/layouts/header.php';
include 'views/layouts/navbar.php';

?>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <h3>Tambah Perusahaan</h3>

        </div>

        <div class="card-body">

            <form action="index.php?page=perusahaan_simpan" method="POST" enctype="multipart/form-data">

                <div class="mb-3">

                    <label class="form-label">Nama Perusahaan</label>

                    <input type="text" name="nama_perusahaan" class="form-control" required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Bidang</label>

                    <input type="text" name="bidang" class="form-control" required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Lokasi</label>

                    <input type="text" name="lokasi" class="form-control" required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Deskripsi Perusahaan</label>

                    <textarea name="deskripsi_perusahaan" rows="4" class="form-control" required></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">Persyaratan Magang</label>

                    <textarea name="persyaratan" rows="4" class="form-control" required></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">Link Pendaftaran</label>

                    <input type="url" name="link_pendaftaran" class="form-control" placeholder="https://..." required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Logo Perusahaan</label>

                    <div class="mb-3 text-center">

                        <img id="preview" src="assets/img/no-image.png" class="company-logo"
                            style="width:180px;height:180px;object-fit:cover;">

                    </div>

                    <input type="file" name="logo" class="form-control" accept=".jpg,.jpeg,.png"
                        onchange="validateLogo(this);previewImage(event)" required>

                    <small class="text-muted">
                        Format: JPG, JPEG, PNG
                    </small>

                </div>

                <div class="mb-4">

                    <label class="form-label">Status</label>

                    <select name="status" class="form-select" required>

                        <option value="Aktif">Aktif</option>
                        <option value="Tutup">Tutup</option>

                    </select>

                </div>

                <button type="submit" class="btn btn-success">

                    <i class="bi bi-save"></i>

                    Simpan

                </button>

                <a href="index.php?page=dashboard" class="btn btn-secondary">

                    Batal

                </a>

            </form>

        </div>

    </div>

</div>

<?php

include 'views/layouts/footer.php';

?>

<script>
    function previewImage(event) {

        const file = event.target.files[0];

        if (!file) return;

        const preview = document.getElementById("preview");

        preview.src = URL.createObjectURL(file);

        preview.onload = function () {
            URL.revokeObjectURL(preview.src);
        };
    }
</script>