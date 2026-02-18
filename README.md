# E-Learning Platform (Sistem Informasi Akademik)

Platform E-Learning ini dibangun menggunakan Framework Laravel untuk mengelola kegiatan perkuliahan antara Dosen dan Mahasiswa secara digital. Sistem ini mendukung pengelolaan materi, penugasan, hingga penilaian.

---

## Fitur Utama

Sistem ini memiliki fungsionalitas utama sebagai berikut:

* **Autentikasi Multi-User**: Login terpisah untuk Dosen dan Mahasiswa.
* **Manajemen Mata Kuliah**: Pengaturan daftar mata kuliah yang tersedia di setiap semester.
* **Modul Materi**: Dosen dapat mengunggah materi perkuliahan (dokumen/PDF) yang dapat diunduh oleh Mahasiswa.
* **Sistem Penugasan**: Fitur pemberian tugas oleh Dosen dengan batas waktu (deadline) tertentu.
* **Pengumpulan Tugas (Submission)**: Mahasiswa dapat mengunggah hasil pekerjaan mereka langsung ke sistem.
* **Rekap Nilai**: Dosen dapat memberikan nilai pada tugas yang telah dikumpulkan oleh Mahasiswa.

---

## Teknologi yang Digunakan

* **Framework**: Laravel (PHP)
* **Frontend UI**: Bootstrap 5
* **Database**: PostgreSQL
* **Web Server**: Apache / Nginx (atau PHP Artisan untuk lokal)

---

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

1.  **Clone Repository**
    ```bash
    git clone [https://github.com/fajaridn26/e_learning.git](https://github.com/fajaridn26/e_learning.git)
    cd e_learning
    ```

2.  **Instal Dependensi PHP**
    ```bash
    composer install
    ```

3.  **Instal Dependensi Frontend**
    ```bash
    npm install
    npm run dev
    ```

4.  **Konfigurasi Environment**
    Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```
    Sesuaikan bagian database di file `.env` untuk PostgreSQL:
    ```env
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=nama_db_anda
    DB_USERNAME=postgres
    DB_PASSWORD=password_anda
    ```

5.  **Generate Key & Migrasi Database**
    ```bash
    php artisan key:generate
    php artisan migrate --seed
    ```

6.  **Hubungkan Storage**
    Agar file materi dan tugas bisa diakses, jalankan:
    ```bash
    php artisan storage:link
    ```

7.  **Jalankan Server**
    ```bash
    php artisan serve
    ```

---

## Struktur Folder Project

Struktur folder dalam proyek ini mengikuti standar Laravel:

```text
e_learning/
├── app/
│   ├── Http/Controllers/   # Logika bisnis (Dosen, Mahasiswa, Materi)
│   └── Models/             # Model database (User, Matakuliah, Materi, Tugas)
├── database/
│   ├── migrations/         # Skema tabel PostgreSQL
│   └── seeders/            # Data awal (User Dosen & Mahasiswa)
├── public/                 # File aset (CSS, JS)
├── resources/
│   └── views/              # Template antarmuka (Blade + Bootstrap)
├── routes/                 # Routing Web
└── storage/app/public/     # Tempat penyimpanan file upload