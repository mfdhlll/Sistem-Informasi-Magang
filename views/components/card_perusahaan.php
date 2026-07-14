<div class="col-md-4 mb-4">

    <div class="card h-100 shadow-sm">

        <img src="uploads/logo_perusahaan/<?= htmlspecialchars($row['logo']) ?>" class="card-img-top"
            style="height:180px;object-fit:contain;padding:15px;" alt="Logo">

        <div class="card-body">

            <h5>

                <?= htmlspecialchars($row['nama_perusahaan']) ?>

            </h5>

            <p>

                <i class="bi bi-building"></i>

                <?= htmlspecialchars($row['bidang']) ?>

            </p>

            <p>

                <i class="bi bi-geo-alt-fill"></i>

                <?= htmlspecialchars($row['lokasi']) ?>

            </p>

            <a href="index.php?page=detail&id=<?= $row['id'] ?>" class="btn btn-primary w-100">

                Detail

            </a>

        </div>

    </div>

</div>