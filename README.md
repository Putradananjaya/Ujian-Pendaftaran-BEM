# 🛠️ Ujian Praktik Analis Program

**Skema Sertifikasi:** Rekayasa Perangkat Lunak (Analis Program)  
**Waktu Pengerjaan:** 120 Menit  

---

## 📖 Skenario (Situation)

Anda baru saja dipekerjakan sebagai **Analis Program** untuk mengambil alih *source code* aplikasi "Sistem Pendaftaran" dari *programmer* sebelumnya. Sayangnya, aplikasi ini belum selesai dan memiliki banyak masalah kritikal:

1. Tidak ada penanganan *error* pada koneksi *database*.
2. Formulir pendaftaran sangat rentan terhadap serangan **SQL Injection**.
3. Aplikasi gagal (*crash*) jika pengguna mengirimkan formulir kosong.
4. Halaman utama sangat lambat (membutuhkan waktu lama untuk memuat data) karena masalah skalabilitas performa pada kueri basis data.
5. Kode tidak memiliki komentar teknis yang memadai.

## 🎯 Tugas Anda (Task)

Sebagai Analis Program, tugas Anda adalah mereviu, memperbaiki, menguji, dan mendokumentasikan sistem ini sesuai dengan Standar Kompetensi Kerja Nasional Indonesia (SKKNI).

## 🚀 Langkah Kerja (Action)

### Tahap 1: Setup Lingkungan Kerja
1. Buka terminal di GitHub Codespaces.
2. Jalankan perintah ini untuk menginisialisasi basis data dan data *dummy*:
    ```bash
    php setup.php
    ```
3. Jalankan server lokal PHP untuk melihat antarmuka aplikasi:
    ```bash
    php -S localhost:8000 -t src/
    ```
4. Buka aplikasi di *browser* Codespaces Anda.

### Tahap 2: Perbaikan Bug & Keamanan (Debugging & SQL)
1. Buka `src/database.php`. Aktifkan mode penanganan *Exception* pada koneksi PDO.
2. Buka `src/proses.php`. 
    * Tambahkan logika validasi: Jika input kosong, batalkan eksekusi.
    * Amankan kueri DML dengan mengubahnya menjadi **Prepared Statements** agar terhindar dari injeksi.
    * Bungkus eksekusi dengan blok `try-catch`.

### Tahap 3: Optimasi Performa (Profiling & Skalabilitas)
1. Buka `src/index.php`. 
2. Tambahkan fungsi `microtime(true)` di awal dan akhir *script* untuk melihat waktu eksekusi halaman.
3. Anda akan menemukan **N+1 Query Problem** di dalam *looping* tabel. Hapus kueri di dalam *looping* tersebut dan gabungkan kueri menggunakan `JOIN` pada kueri utama agar halaman memuat ribuan data dalam hitungan milidetik.

### Tahap 4: Dokumentasi & Pengajuan
1. Tambahkan komentar penjelasan (*comment*) yang baik pada setiap baris kode krusial yang baru saja Anda ubah.
2. Lakukan *Commit* dan *Push* pekerjaan Anda ke repositori GitHub.

---

## ✅ Indikator Keberhasilan (Result)

- [ ] Aplikasi berjalan normal dan data berhasil disimpan.
- [ ] Kueri bebas dari celah *SQL Injection*.
- [ ] Waktu muat halaman (*load time*) terbukti jauh lebih cepat setelah kueri dioptimasi (*JOIN*).
- [ ] File kode program memiliki dokumentasi yang jelas.
