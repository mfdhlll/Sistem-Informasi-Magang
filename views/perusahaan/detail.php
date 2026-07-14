<?php

include 'views/layouts/header.php';
include 'views/layouts/navbar.php';

?>

    <div class="container py-5">

        <div class="card shadow">

            <div class="row">

                <div class="col-md-4 text-center p-4">

                    <img src="uploads/logo_perusahaan/<?= htmlspecialchars($perusahaan['logo']) ?>" class="detail-logo"
                        style="max-height:220px;" alt="Logo">

                </div>

                <div class="col-md-8 p-4">

                    <h2>

                        <?= htmlspecialchars($perusahaan['nama_perusahaan']) ?>

                    </h2>

                    <hr>

                    <p>

                        <strong>Bidang :</strong>

                        <?= htmlspecialchars($perusahaan['bidang']) ?>

                    </p>

                    <p>

                        <strong>Lokasi :</strong>

                        <?= htmlspecialchars($perusahaan['lokasi']) ?>

                    </p>

                    <p>

                        <strong>Deskripsi :</strong>

                        <?= nl2br(htmlspecialchars($perusahaan['deskripsi_perusahaan'])) ?>

                    </p>

                    <p>

                        <strong>Persyaratan :</strong>

                        <?= nl2br(htmlspecialchars($perusahaan['persyaratan'])) ?>

                    </p>

                    <a href="<?= htmlspecialchars($perusahaan['link_pendaftaran']) ?>" target="_blank"
                        class="btn btn-success">

                        Daftar Sekarang

                    </a>

                    <a href="index.php?page=perusahaan" class="btn btn-secondary">

                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </div>

</main>

    <?php

    include 'views/layouts/footer.php';

    ?>