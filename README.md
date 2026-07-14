# 💼 MagangKu
### Sistem Informasi Pencarian Tempat Magang Mahasiswa

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

---

## 📖 Deskripsi

**InfoMagang** merupakan aplikasi berbasis web yang dibangun menggunakan **PHP Native**, **MySQL**, dan **Bootstrap 5** sebagai media informasi lowongan magang bagi mahasiswa.

Aplikasi ini memiliki dua jenis pengguna:

- **Mahasiswa**
  - Melihat daftar perusahaan
  - Mencari perusahaan
  - Melihat detail lowongan magang

- **Admin**
  - Login ke sistem
  - Menambah data perusahaan
  - Mengubah data perusahaan
  - Menghapus data perusahaan
  - Mengelola informasi magang

Proyek ini dikembangkan sebagai tugas mata kuliah **Pemrograman Web**.

---

# ✨ Fitur

## 👨‍🎓 Mahasiswa

- Melihat daftar perusahaan
- Melihat detail perusahaan
- Pencarian perusahaan
- Tampilan responsif
- Informasi lengkap perusahaan

## 👨‍💼 Admin

- Login Admin
- Dashboard Admin
- CRUD Data Perusahaan
- Upload Logo Perusahaan
- Validasi Form
- Konfirmasi Hapus (SweetAlert)
- Statistik Dashboard

---

# 🛠️ Teknologi

| Teknologi | Digunakan |
|-----------|------------|
| PHP Native | ✔ |
| MySQL | ✔ |
| Bootstrap 5 | ✔ |
| HTML5 | ✔ |
| CSS3 | ✔ |
| JavaScript | ✔ |
| SweetAlert2 | ✔ |
| Git & GitHub | ✔ |

---

# 📁 Struktur Folder

```
InfoMagang/
│
├── assets/
│   ├── css/
│   ├── js/
│   ├── img/
│   └── uploads/
│
├── config/
│   └── Database.php
│
├── controllers/
│   ├── AuthController.php
│   ├── HomeController.php
│   └── PerusahaanController.php
│
├── models/
│   ├── User.php
│   └── Perusahaan.php
│
├── views/
│   ├── auth/
│   ├── dashboard/
│   ├── home/
│   ├── layouts/
│   └── perusahaan/
│
├── infomagang.sql
├── index.php
├── routes.php
└── README.md
```

---

# ⚙️ Instalasi

## 1. Clone Repository

```bash
git clone https://github.com/USERNAME/InfoMagang.git
```

Masuk ke folder project

```bash
cd InfoMagang
```

---

## 2. Pindahkan ke XAMPP

Copy folder project ke

```
C:\xampp\htdocs\
```

---

## 3. Jalankan XAMPP

Aktifkan

- Apache
- MySQL

---

## 4. Import Database

Buka

```
http://localhost/phpmyadmin
```

Buat database

```
infomagang
```

Import file

```
infomagang.sql
```

---

## 5. Atur Koneksi Database

File

```
config/Database.php
```

Sesuaikan

```php
private $host = "localhost";
private $username = "root";
private $password = "";
private $database = "infomagang";
```

---

## 6. Jalankan Project

Buka browser

```
http://localhost/InfoMagang
```

---

# 🔑 Login Admin

Silakan gunakan akun admin yang terdapat pada database.

email : admin@infomagang.com
password : admin123

---

# 📸 Tampilan Sistem

Berikut halaman yang tersedia pada aplikasi:

- Halaman Home
- Daftar Perusahaan
- Detail Perusahaan
- Login Admin
- Dashboard Admin
- Tambah Perusahaan
- Edit Perusahaan

---

# 🔄 Alur Sistem

```
Mahasiswa
     │
     ▼
Melihat Daftar Perusahaan
     │
     ▼
Melihat Detail Magang

===============================

Admin
     │
     ▼
Login
     │
     ▼
Dashboard
     │
     ▼
Kelola Data Perusahaan
     │
     ├── Tambah
     ├── Edit
     └── Hapus
```

---

# 🗄️ Database

Database terdiri dari beberapa tabel utama, antara lain:

- users
- perusahaan

Relasi database dapat dikembangkan sesuai kebutuhan sistem.

---

# 🚀 Pengembangan Selanjutnya

Beberapa fitur yang dapat ditambahkan:

- Registrasi Mahasiswa
- Upload CV
- Melamar Magang
- Notifikasi
- Filter Berdasarkan Kota
- Filter Berdasarkan Bidang
- Pagination
- Dashboard Statistik yang lebih lengkap
- Export PDF
- Export Excel
- API

---

# 👨‍💻 Tim Pengembang

Kelompok Proyek Sistem Informasi Magang

| Nama | Tugas |
|------|-------|
| Rendo Yoga Pratama | Frontend Development |
| Achmad Yuan Fadhillah | Backend Development |
| Rifki Andrianto | Database & Testing |
| Muhammad Fadhil Miswandi | Dokumentasi & Deployment |

---

# 📚 Referensi

- PHP Documentation
- Bootstrap Documentation
- MySQL Documentation
- SweetAlert2 Documentation
- GitHub Documentation

---

# 📄 Lisensi

Project ini dibuat untuk keperluan pembelajaran dan tugas mata kuliah.

Silakan digunakan sebagai referensi dengan tetap mencantumkan sumber apabila dikembangkan kembali.

---

## ⭐ Dukungan

Apabila project ini bermanfaat, jangan lupa berikan ⭐ pada repository GitHub.

```

## README ini sudah mencakup:
- ✅ Deskripsi proyek
- ✅ Fitur lengkap
- ✅ Teknologi yang digunakan
- ✅ Struktur folder
- ✅ Cara instalasi
- ✅ Konfigurasi database
- ✅ Cara menjalankan
- ✅ Struktur database
- ✅ Alur sistem
- ✅ Rencana pengembangan
- ✅ Tim pengembang
- ✅ Referensi
- ✅ Lisensi
- ✅ Template screenshot
- ✅ Badge GitHub yang terlihat profesional

README tersebut sudah layak digunakan untuk tugas kuliah maupun sebagai dokumentasi repository GitHub.