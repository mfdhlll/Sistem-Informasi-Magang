<?php

include 'views/layouts/header.php';

?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">

                    <h3>Login Admin</h3>

                </div>

                <div class="card-body">

                    <?php
                    if (isset($_SESSION['error'])):
                        ?>

                        <div class="alert alert-danger">

                            <?= $_SESSION['error']; ?>

                        </div>

                        <?php

                        unset($_SESSION['error']);

                    endif;

                    ?>

                    <form method="POST" action="index.php?page=authenticate" id="loginForm">

                        <div class="mb-3">

                            <label>Email</label>

                            <input type="email" name="email" class="form-control" required>

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input type="password" name="password" class="form-control" required>

                        </div>

                        <button class="btn btn-primary w-100">

                            Login

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php

include 'views/layouts/footer.php';

?>