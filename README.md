# PKM-Psi — Online Quiz System

![PHP](https://img.shields.io/badge/PHP-2f81f7?style=flat) ![Bootstrap](https://img.shields.io/badge/Bootstrap-2f81f7?style=flat) ![MySQL](https://img.shields.io/badge/MySQL-2f81f7?style=flat) ![Apache](https://img.shields.io/badge/Apache-2f81f7?style=flat)

> Sistem ujian sederhana yang dapat dipasang di lingkungan sekolah, kursus, atau server PHP lokal.

## Tentang proyek

Sistem ujian sederhana yang dapat dipasang di lingkungan sekolah, kursus, atau server PHP lokal. Dokumentasi ini dibuat sebagai panduan singkat untuk memahami ruang lingkup proyek, menjalankannya secara lokal, dan membaca batasan penggunaannya.

## Fitur utama

- Login dan session management
- Kuis dengan batas waktu
- Penilaian otomatis
- Riwayat percobaan
- Panel admin untuk pengguna dan soal
- UI responsif Bootstrap

## Teknologi

- PHP
- Bootstrap
- MySQL
- Apache

## Menjalankan secara lokal

Prasyarat dan konfigurasi dapat berbeda menurut sistem operasi. Contoh langkah utama:

```bash
Clone ke document root Apache, siapkan PHP/MySQL, lalu ikuti konfigurasi database di file setup lokal.
```

## Struktur dan pengembangan

Mulai dari entry point dan folder konfigurasi proyek. Pisahkan credential lokal dari source code, tambahkan test untuk perubahan penting, dan gunakan environment variable untuk konfigurasi deployment.

## Keamanan

- Jangan commit API key, password, token, session ID, atau data pribadi.
- Gunakan file environment lokal dan contoh konfigurasi tanpa nilai rahasia.
- Uji perubahan pada environment development sebelum deployment.

## Status

Proyek ini merupakan bagian dari portofolio **Hilman Arifin Ilham** dan dapat dikembangkan sesuai kebutuhan penggunaan.

> **Catatan:** Audit dan ganti seluruh credential administrator sebelum deployment publik. Jangan memakai akun demo di production.

## Lisensi

Belum ada lisensi open-source yang dinyatakan di repository ini. Hubungi pemilik repository sebelum menggunakan ulang atau mendistribusikan kode.

---

Dibuat oleh [Hilman Arifin Ilham](https://github.com/hilman-devop).
