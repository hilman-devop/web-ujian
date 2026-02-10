# PKM-Psi: Sistem Kuis Online

**Platform kuis online berbasis PHP** yang dirancang untuk keperluan pendidikan. Sistem ini menyediakan autentikasi pengguna yang aman, kuis dengan batas waktu, serta panel administrasi untuk pengelolaan konten dan pengguna.

Proyek ini dikembangkan sebagai solusi sederhana, ringan, dan mudah diterapkan di lingkungan pendidikan seperti sekolah atau kursus online.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)

### 🚀 Fitur Utama
- **Autentikasi Pengguna**: Sistem login dan logout yang aman dengan proteksi sesi.
- **Manajemen Sesi**: Pelacakan progres pengguna dan riwayat percobaan kuis.
- **Desain Responsif**: Antarmuka modern dan mobile-friendly menggunakan Bootstrap 5.
- **Panel Administrasi**: Pengelolaan pengguna, pembuatan, dan konfigurasi kuis melalui `setup_admin.php`.
- **Penilaian Otomatis**: Pengolahan jawaban kuis, perhitungan skor, dan penyimpanan hasil.

### 📂 Struktur File Utama
| File                | Deskripsi                                           |
|---------------------|-----------------------------------------------------|
| `index.php`         | Halaman dashboard utama setelah login.              |
| `login.php`         | Halaman autentikasi pengguna.                       |
| `logout.php`        | Proses penghapusan sesi dan keluar dari sistem.     |
| `quiz.php`          | Antarmuka dan logika utama kuis.                    |
| `setup_admin.php`   | Panel administrasi untuk konfigurasi sistem.        |
| `submit_quiz.php`   | Proses pengumpulan jawaban dan perhitungan skor.     |

### 🛠 Kebutuhan Sistem
- PHP 7.4 atau lebih baru (dengan dukungan session)
- Web server (Apache atau Nginx)
- MySQL/MariaDB (opsional, untuk penyimpanan data pengguna dan kuis)

### 📦 Panduan Instalasi
1. Clone repository:
   ```bash
   git clone https://github.com/usernamekamu/PKM-Psi.git

Letakkan semua file di direktori web server (misalnya htdocs pada XAMPP atau /var/www/html pada server produksi).
Konfigurasi database (jika diperlukan) dan sesuaikan detail koneksi di file setup_admin.php.
Akses sistem melalui browser:texthttp://localhost/Web-Ujian/login.php

▶️ Cara Penggunaan

Peserta/Siswa: Login untuk mengakses dan mengerjakan kuis yang tersedia.
Administrator: Gunakan panel setup_admin.php untuk menambah/mengelola pengguna, membuat kuis baru, dan mengatur pertanyaan.
