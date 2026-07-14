<?php

require_once 'models/Perusahaan.php';

class DashboardController
{

    private $model;

    public function __construct()
    {

        if (session_status() == PHP_SESSION_NONE) {

            session_start();

        }

        if (!isset($_SESSION['login'])) {

            header("Location:index.php?page=login");

            exit;

        }

        $this->model = new Perusahaan();

    }

    public function index()
    {

        $total = $this->model->count();

        $perusahaan = $this->model->getAll();

        require 'views/dashboard/index.php';

    }

}