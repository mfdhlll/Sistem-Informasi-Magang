<?php

require_once 'config/Database.php';

class User extends Database
{
    public function __construct()
    {
        $this->connect();
    }

    /**
     * Mencari user berdasarkan email
     */
    public function getByEmail($email)
    {
        $email = $this->conn->real_escape_string($email);

        $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";

        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }

        return null;
    }

    /**
     * Login Admin
     */
    public function login($email, $password)
    {
        $user = $this->getByEmail($email);

        if (!$user) {
            return false;
        }

        if (password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    /**
     * Menambahkan Admin Baru
     */
    public function create($data)
    {
        $nama = $this->conn->real_escape_string($data['nama']);
        $email = $this->conn->real_escape_string($data['email']);

        $password = password_hash(
            $data['password'],
            PASSWORD_DEFAULT
        );

        $sql = "INSERT INTO users
                (nama,email,password,role)
                VALUES
                (
                    '$nama',
                    '$email',
                    '$password',
                    'admin'
                )";

        return $this->conn->query($sql);
    }

    /**
     * Mengubah Password
     */
    public function updatePassword($id, $password)
    {
        $id = (int) $id;

        $password = password_hash(
            $password,
            PASSWORD_DEFAULT
        );

        $sql = "UPDATE users
                SET password='$password'
                WHERE id=$id";

        return $this->conn->query($sql);
    }
}