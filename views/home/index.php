<?php

include 'views/layouts/header.php';
include 'views/layouts/navbar.php';
include 'views/components/hero.php';
include 'views/components/search.php';

?>

<div class="container my-5">

    <h2 class="mb-4">

        Perusahaan Terbaru

    </h2>

    <div class="row">

        <?php while ($row = $perusahaan->fetch_assoc()): ?>

            <?php include 'views/components/card_perusahaan.php'; ?>

        <?php endwhile; ?>

    </div>

</div>

<?php

include 'views/layouts/footer.php';

?>