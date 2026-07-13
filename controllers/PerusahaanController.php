<?php

require_once 'models/Perusahaan.php';

class PerusahaanController
{
    private $model;

    public function __construct()
    {

        if (session_status() == PHP_SESSION_NONE) {

            session_start();

        }

        $this->model = new Perusahaan();

    }

    private function cekLogin()
    {
        if (!isset($_SESSION['login'])) {

            header("Location:index.php?page=login");

            exit;

        }
    }

    // Halaman daftar perusahaan
    public function index()
    {
        $perusahaan = $this->model->getAll();
        require 'views/perusahaan/index.php';
    }

    // Detail perusahaan
    public function detail()
    {
        if (!isset($_GET['id'])) {
            header("Location:index.php?page=perusahaan");
            exit;
        }

        $perusahaan = $this->model->getById($_GET['id']);

        require 'views/perusahaan/detail.php';
    }

    // Pencarian
    public function search()
    {
        $keyword = $_GET['keyword'] ?? '';

        $perusahaan = $this->model->search($keyword);

        require 'views/perusahaan/index.php';
    }

    // Form tambah
    public function create()
    {

        $this->cekLogin();

        require 'views/perusahaan/tambah.php';
    }

    // Simpan data
    public function store()
    {
        $this->cekLogin();

        // Upload logo akan kita tambahkan pada langkah berikutnya
        $logo = '';

        if (!empty($_FILES['logo']['name'])) {

            $allowed = ['jpg', 'jpeg', 'png'];

            $extension = strtolower(pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION));

            if (!in_array($extension, $allowed)) {
                die("Format logo harus JPG, JPEG, atau PNG.");
            }

            $namaFile = time() . "_" . basename($_FILES['logo']['name']);

            move_uploaded_file(
                $_FILES['logo']['tmp_name'],
                "uploads/logo_perusahaan/" . $namaFile
            );

            $logo = $namaFile;
        }

        $data = [

            'nama_perusahaan' => $_POST['nama_perusahaan'],
            'bidang' => $_POST['bidang'],
            'lokasi' => $_POST['lokasi'],
            'deskripsi_perusahaan' => $_POST['deskripsi_perusahaan'],
            'persyaratan' => $_POST['persyaratan'],
            'link_pendaftaran' => $_POST['link_pendaftaran'],
            'status' => $_POST['status'],
            'logo' => $logo

        ];

        $this->model->create($data);

        $_SESSION['success'] = "Data perusahaan berhasil ditambahkan.";

        header("Location:index.php?page=dashboard");

        exit;
    }

    // Form edit
    public function edit()
    {
        $this->cekLogin();

        $perusahaan = $this->model->getById($_GET['id']);

        require 'views/perusahaan/edit.php';
    }

    // Update
    public function update()
    {
        $this->cekLogin();

        $id = (int) $_POST['id'];

        $logo = $_POST['logo_lama'];

        if (!empty($_FILES['logo']['name'])) {

            $allowed = ['jpg', 'jpeg', 'png'];

            $extension = strtolower(pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION));

            if (!in_array($extension, $allowed)) {

                die("Logo harus JPG, JPEG atau PNG.");

            }

            if (!empty($logo) && file_exists("uploads/logo_perusahaan/" . $logo)) {

                unlink("uploads/logo_perusahaan/" . $logo);

            }

            $namaFile = time() . "_" . basename($_FILES['logo']['name']);

            move_uploaded_file(

                $_FILES['logo']['tmp_name'],

                "uploads/logo_perusahaan/" . $namaFile

            );

            $logo = $namaFile;
        }

        $data = [

            'nama_perusahaan' => $_POST['nama_perusahaan'],
            'bidang' => $_POST['bidang'],
            'lokasi' => $_POST['lokasi'],
            'deskripsi_perusahaan' => $_POST['deskripsi_perusahaan'],
            'persyaratan' => $_POST['persyaratan'],
            'link_pendaftaran' => $_POST['link_pendaftaran'],
            'status' => $_POST['status'],
            'logo' => $logo

        ];

        $this->model->update($id, $data);

        $_SESSION['success'] = "Data perusahaan berhasil diperbarui.";

        header("Location:index.php?page=dashboard");

        exit;
    }

    // Hapus
    public function delete()
    {
        $this->cekLogin();

        if (!isset($_GET['id'])) {
            header("Location:index.php?page=dashboard");
            exit;
        }

        $id = (int) $_GET['id'];

        $perusahaan = $this->model->getById($id);

        if ($perusahaan && !empty($perusahaan['logo'])) {

            $file = "uploads/logo_perusahaan/" . $perusahaan['logo'];

            if (file_exists($file)) {

                unlink($file);

            }

        }

        $this->model->delete($id);

        $_SESSION['success'] = "Data perusahaan berhasil dihapus.";

        header("Location:index.php?page=dashboard");

        exit;
    }
}