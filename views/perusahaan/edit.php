<?php

include 'views/layouts/header.php';
include 'views/layouts/navbar.php';

?>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h3>Edit Perusahaan</h3>

        </div>

        <div class="card-body">

            <form action="index.php?page=perusahaan_update" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $perusahaan['id']; ?>">

                <input type="hidden" name="logo_lama" value="<?= $perusahaan['logo']; ?>">

                <div class="mb-3">

                    <label>Nama Perusahaan</label>

                    <input type="text" name="nama_perusahaan" class="form-control"
                        value="<?= htmlspecialchars($perusahaan['nama_perusahaan']) ?>" required>

                </div>

                <div class="mb-3">

                    <label>Bidang</label>

                    <input type="text" name="bidang" class="form-control"
                        value="<?= htmlspecialchars($perusahaan['bidang']) ?>" required>

                </div>

                <div class="mb-3">

                    <label>Lokasi</label>

                    <input type="text" name="lokasi" class="form-control"
                        value="<?= htmlspecialchars($perusahaan['lokasi']) ?>" required>

                </div>

                <div class="mb-3">

                    <label>Deskripsi</label>

                    <textarea name="deskripsi_perusahaan" rows="4" class="form-control"
                        required><?= htmlspecialchars($perusahaan['deskripsi_perusahaan']) ?></textarea>

                </div>

                <div class="mb-3">

                    <label>Persyaratan</label>

                    <textarea name="persyaratan" rows="4" class="form-control"
                        required><?= htmlspecialchars($perusahaan['persyaratan']) ?></textarea>

                </div>

                <div class="mb-3">

                    <label>Link Pendaftaran</label>

                    <input type="url" name="link_pendaftaran" class="form-control"
                        value="<?= htmlspecialchars($perusahaan['link_pendaftaran']) ?>" required>

                </div>

                <div class="mb-3">

                    <label>Status</label>

                    <select name="status" class="form-select">

                        <option value="Aktif" <?= ($perusahaan['status'] == 'Aktif') ? 'selected' : ''; ?>>

                            Aktif

                        </option>

                        <option value="Tutup" <?= ($perusahaan['status'] == 'Tutup') ? 'selected' : ''; ?>>

                            Tutup

                        </option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Logo Perusahaan

                    </label>

                    <div class="text-center">

                        <img id="preview" src="uploads/logo_perusahaan/<?= htmlspecialchars($perusahaan['logo']) ?>"
                            class="img-thumbnail company-logo">

                    </div>

                    <input type="file" name="logo" class="form-control mt-3" accept="image/*"
                        onchange="validateLogo(this);previewImage(event)">

                    <small class="text-muted">

                        Kosongkan jika tidak ingin mengganti logo.

                    </small>

                </div>

                <button class="btn btn-warning">

                    Update

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