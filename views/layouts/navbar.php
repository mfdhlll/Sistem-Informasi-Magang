<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="index.php">
            Sistem Magang
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse" id="navbarNav">


            <ul class="navbar-nav ms-auto">


                <li class="nav-item">

                    <a class="nav-link" href="index.php">
                        Beranda
                    </a>

                </li>



                <li class="nav-item">

                    <a class="nav-link" href="index.php?page=perusahaan">
                        Perusahaan
                    </a>

                </li>



                <?php if (isset($_SESSION['login'])): ?>


                    <li class="nav-item">

                        <a class="nav-link" href="index.php?page=dashboard">
                            Dashboard
                        </a>

                    </li>


                    <li class="nav-item">

                        <a class="nav-link text-warning" href="index.php?page=logout" onclick="confirmLogout(event)">
                            Logout
                        </a>

                    </li>


                <?php else: ?>


                    <li class="nav-item">

                        <a class="nav-link" href="index.php?page=login">
                            Login Admin
                        </a>

                    </li>


                <?php endif; ?>


            </ul>


        </div>

    </div>

</nav>