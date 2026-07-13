<?php

require_once 'config/Database.php';

class Perusahaan extends Database
{
    public function __construct()
    {
        $this->connect();
    }

    // Menampilkan semua perusahaan
    public function getAll()
    {
        $sql = "SELECT * FROM perusahaan ORDER BY id DESC";
        return $this->conn->query($sql);
    }

    // Menampilkan satu perusahaan berdasarkan ID
    public function getById($id)
    {
        $id = (int) $id;

        $sql = "SELECT * FROM perusahaan WHERE id = $id";

        $result = $this->conn->query($sql);

        return $result->fetch_assoc();
    }

    // Mencari perusahaan
    public function search($keyword)
    {
        $keyword = $this->conn->real_escape_string($keyword);

        $sql = "SELECT *
                FROM perusahaan
                WHERE
                nama_perusahaan LIKE '%$keyword%'
                OR bidang LIKE '%$keyword%'
                OR lokasi LIKE '%$keyword%'
                ORDER BY id DESC";

        return $this->conn->query($sql);
    }

    // Menghitung jumlah perusahaan
    public function count()
    {
        $sql = "SELECT COUNT(*) AS total FROM perusahaan";

        $result = $this->conn->query($sql);

        $data = $result->fetch_assoc();

        return $data['total'];
    }

    // Menambah perusahaan
    public function create($data)
    {
        $nama = $this->conn->real_escape_string($data['nama_perusahaan']);
        $bidang = $this->conn->real_escape_string($data['bidang']);
        $lokasi = $this->conn->real_escape_string($data['lokasi']);
        $deskripsi = $this->conn->real_escape_string($data['deskripsi_perusahaan']);
        $persyaratan = $this->conn->real_escape_string($data['persyaratan']);
        $link = $this->conn->real_escape_string($data['link_pendaftaran']);
        $logo = $this->conn->real_escape_string($data['logo']);
        $status = $this->conn->real_escape_string($data['status']);

        $sql = "INSERT INTO perusahaan
        (
            nama_perusahaan,
            bidang,
            lokasi,
            deskripsi_perusahaan,
            persyaratan,
            link_pendaftaran,
            logo,
            status
        )
        VALUES
        (
            '$nama',
            '$bidang',
            '$lokasi',
            '$deskripsi',
            '$persyaratan',
            '$link',
            '$logo',
            '$status'
        )";

        return $this->conn->query($sql);
    }

    // Mengubah perusahaan
    // Mengubah perusahaan
    public function update($id, $data)
    {
        $id = (int) $id;

        $nama = $this->conn->real_escape_string($data['nama_perusahaan']);
        $bidang = $this->conn->real_escape_string($data['bidang']);
        $lokasi = $this->conn->real_escape_string($data['lokasi']);
        $deskripsi = $this->conn->real_escape_string($data['deskripsi_perusahaan']);
        $persyaratan = $this->conn->real_escape_string($data['persyaratan']);
        $link = $this->conn->real_escape_string($data['link_pendaftaran']);
        $logo = $this->conn->real_escape_string($data['logo']);
        $status = $this->conn->real_escape_string($data['status']);

        $sql = "UPDATE perusahaan SET
            nama_perusahaan='$nama',
            bidang='$bidang',
            lokasi='$lokasi',
            deskripsi_perusahaan='$deskripsi',
            persyaratan='$persyaratan',
            link_pendaftaran='$link',
            logo='$logo',
            status='$status'
            WHERE id=$id";

        return $this->conn->query($sql);
    }

    // Menghapus perusahaan
    public function delete($id)
    {
        $id = (int) $id;

        $sql = "DELETE FROM perusahaan WHERE id=$id";

        return $this->conn->query($sql);
    }
}