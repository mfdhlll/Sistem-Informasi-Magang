<?php

require_once 'models/User.php';

class AuthController
{
    private $model;

    public function __construct()
    {
        $this->model = new User();

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Menampilkan halaman login
    public function login()
    {
        require 'views/auth/login.php';
    }

    // Proses login
    public function authenticate()
    {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $user = $this->model->login($email, $password);

        if ($user) {

            $_SESSION['login'] = true;
            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['role'] = $user['role'];

            header("Location: index.php?page=dashboard");
            exit;
        }

        $_SESSION['error'] = "Email atau password salah.";

        header("Location: index.php?page=login");
        exit;
    }

    // Logout
    public function logout()
    {
        session_destroy();

        header("Location: index.php");
        exit;
    }
}