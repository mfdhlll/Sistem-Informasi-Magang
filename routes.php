<?php

$page = $_GET['page'] ?? 'home';

switch ($page) {

    /*
    |--------------------------------------------------------------------------
    | HALAMAN PUBLIK
    |--------------------------------------------------------------------------
    */

    case 'home':

        require_once 'controllers/HomeController.php';

        $controller = new HomeController();
        $controller->index();

        break;

    case 'perusahaan':

        require_once 'controllers/PerusahaanController.php';

        $controller = new PerusahaanController();
        $controller->index();

        break;

    case 'detail':

        require_once 'controllers/PerusahaanController.php';

        $controller = new PerusahaanController();
        $controller->detail();

        break;

    case 'search':

        require_once 'controllers/PerusahaanController.php';

        $controller = new PerusahaanController();
        $controller->search();

        break;

    /*
    |--------------------------------------------------------------------------
    | AUTHENTICATION
    |--------------------------------------------------------------------------
    */

    case 'login':

        require_once 'controllers/AuthController.php';

        $controller = new AuthController();
        $controller->login();

        break;

    case 'authenticate':

        require_once 'controllers/AuthController.php';

        $controller = new AuthController();
        $controller->authenticate();

        break;

    case 'logout':

        require_once 'controllers/AuthController.php';

        $controller = new AuthController();
        $controller->logout();

        break;

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD ADMIN
    |--------------------------------------------------------------------------
    */

    case 'dashboard':

        require_once 'controllers/DashboardController.php';

        $controller = new DashboardController();
        $controller->index();

        break;

    /*
    |--------------------------------------------------------------------------
    | CRUD PERUSAHAAN
    |--------------------------------------------------------------------------
    */

    case 'perusahaan_tambah':

        require_once 'controllers/PerusahaanController.php';

        $controller = new PerusahaanController();
        $controller->create();

        break;

    case 'perusahaan_simpan':

        require_once 'controllers/PerusahaanController.php';

        $controller = new PerusahaanController();
        $controller->store();

        break;

    case 'perusahaan_edit':

        require_once 'controllers/PerusahaanController.php';

        $controller = new PerusahaanController();
        $controller->edit();

        break;

    case 'perusahaan_update':

        require_once 'controllers/PerusahaanController.php';

        $controller = new PerusahaanController();
        $controller->update();

        break;

    case 'perusahaan_hapus':

        require_once 'controllers/PerusahaanController.php';

        $controller = new PerusahaanController();
        $controller->delete();

        break;

    /*
    |--------------------------------------------------------------------------
    | 404
    |--------------------------------------------------------------------------
    */

    default:

        http_response_code(404);

        echo "<h1>404</h1>";
        echo "<p>Halaman tidak ditemukan.</p>";

        break;
}