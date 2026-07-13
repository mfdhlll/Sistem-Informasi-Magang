<?php

include 'views/layouts/header.php';
include 'views/layouts/navbar.php';
include 'views/components/search.php';

?>

<div class="container my-5">

    <h2 class="mb-4">

        Daftar Perusahaan

    </h2>

    <div class="row">

        <?php if ($perusahaan && $perusahaan->num_rows > 0): ?>

            <?php while ($row = $perusahaan->fetch_assoc()): ?>

                <?php include 'views/components/card_perusahaan.php'; ?>

            <?php endwhile; ?>

        <?php else: ?>

            <div class="col-12">

                <div class="alert alert-warning">

                    Data perusahaan belum tersedia.

                </div>

            </div>

        <?php endif; ?>

    </div>

</div>

<?php

include 'views/layouts/footer.php';

?>