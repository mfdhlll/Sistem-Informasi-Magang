<?php

require_once 'models/Perusahaan.php';

class HomeController
{
    private $model;

    public function __construct()
    {
        $this->model = new Perusahaan();
    }

    public function index()
    {
        $perusahaan = $this->model->getAll();

        require 'views/home/index.php';
    }
}