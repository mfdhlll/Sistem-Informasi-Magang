<?php

include 'views/layouts/header.php';
include 'views/layouts/navbar.php';

?>

<div class="container mt-5">

    <h2 class="mb-4">

        Dashboard Admin

    </h2>

    <?php

    if (isset($_SESSION['success'])):

        ?>

        <div class="alert alert-success alert-dismissible fade show">

            <?= $_SESSION['success']; ?>

            <button class="btn-close" data-bs-dismiss="alert">

            </button>

        </div>

        <?php

        unset($_SESSION['success']);

    endif;

    ?>

    <div class="row">

        <div class="col-md-4">

            <div class="card bg-primary text-white">

                <div class="card-body">

                    <h5>Total Perusahaan</h5>

                    <h2><?= $total ?></h2>

                </div>

            </div>

        </div>

    </div>

    <div class="mt-4">

        <a href="index.php?page=perusahaan_tambah" class="btn btn-success">

            + Tambah Perusahaan

        </a>

    </div>

    <div class="card mt-3">

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Logo</th>

                        <th>Perusahaan</th>

                        <th>Bidang</th>

                        <th>Lokasi</th>

                        <th>Status</th>

                        <th width="180">

                            Aksi

                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                    $no = 1;

                    while ($row = $perusahaan->fetch_assoc()):

                        ?>

                        <tr>

                            <td><?= $no++ ?></td>

                            <td>

                                <img src="uploads/logo_perusahaan/<?= htmlspecialchars($row['logo']) ?>" width="60">

                            </td>

                            <td><?= htmlspecialchars($row['nama_perusahaan']) ?></td>

                            <td><?= htmlspecialchars($row['bidang']) ?></td>

                            <td><?= htmlspecialchars($row['lokasi']) ?></td>

                            <td>

                                <span class="badge bg-success">

                                    <?= htmlspecialchars($row['status']) ?>

                                </span>

                            </td>

                            <td>

                                <a href="index.php?page=perusahaan_edit&id=<?= $row['id'] ?>"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <a href="index.php?page=perusahaan_hapus&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data?')">

                                    Hapus

                                </a>

                            </td>

                        </tr>

                    <?php endwhile; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?php

include 'views/layouts/footer.php';

?>