# LEMBAR TUGAS UJI KOMPETENSI: REKAYASA PERANGKAT LUNAK (SOFTWARE ENGINEERING)

## 📌 SITUATION (SITUASI)

Anda sedang mengikuti uji kompetensi untuk skema **Rekayasa Perangkat Lunak (_Software Engineering_)**. Anda ditugaskan untuk mengambil alih _source code_ aplikasi **"Sistem Pendaftaran"** (tautan referensi proyek: [Ujian-Pendaftaran-App](https://go.psti.undiknas.ac.id/OkupasiAnalisProgram)) yang belum selesai dikembangkan oleh tim sebelumnya.

Saat ini, aplikasi tersebut memiliki beberapa masalah kritis:

- Data pendaftar gagal tersimpan ke _database_ (terdapat _error_ pada logika dan _query_).
- Penulisan kode berantakan, rentan terhadap celah keamanan (_SQL Injection_), dan sulit dibaca.
- Aplikasi mengalami _bottleneck_ performa (sangat lambat saat memuat daftar ribuan pendaftar).
- Belum ada implementasi pengujian (_testing_) dan dokumentasi teknis sama sekali.

---

## 🎯 TASK (TUGAS)

Dalam batas waktu **120 menit**, Anda diminta untuk mereviu dan memperbaiki _bug_, memastikan sistem terhubung ke _database_ dengan aman, menguji alur kerja aplikasi secara otomatis, mengoptimalkan kecepatan muat data, serta menyusun dokumentasi kodenya.

---

## 🛠️ ACTION (TINDAKAN)

### Fasilitas & Akses:

Anda diberikan akses penuh menuju:

1. **Tautan Repository GitHub "Sistem Pendaftaran"** (menggunakan fitur _GitHub Template_) yang berisi _source code_ awal dan _database_ sampel.
2. **Lingkungan kerja awan GitHub Codespaces** yang sudah dilengkapi dengan IDE (_Visual Studio Code_), _Visual Debugger_, dan terminal terintegrasi untuk proses _Profiling_.
3. **Daftar skenario Unit Test dan Integration Test** yang telah disiapkan dan dapat dieksekusi langsung melalui terminal.

### Langkah Pengerjaan (Mencakup 10 Unit Kompetensi):

- **(Code Review):** Membaca, menganalisis, dan merapikan _source code_ awal yang penulisan sintaksnya belum standar.
- **(Algoritma & Debugging):** Mencari penyebab kegagalan saat proses simpan data dan memperbaiki logika algoritmanya.
- **(SQL & Akses Basis Data):** Memperbaiki perintah SQL agar aman dari injeksi dan memastikan aplikasi berhasil melakukan operasi baca/tulis ke _database_.
- **(Unit & Integrasi Program):** Menjalankan dan meluluskan pengujian per modul (fungsi simpan data) serta pengujian integrasi (alur pendaftaran dari form HTML hingga tampil di tabel data).
- **(Profiling & Skalabilitas):** Menggunakan alat ukur waktu eksekusi untuk menemukan penyebab lambatnya aplikasi, melakukan optimasi kueri, dan menuliskan rekomendasi teknis agar aplikasi tidak _crash_ ketika diakses pengguna secara masif.
- **(Dokumen Kode):** Menambahkan blok komentar/penjelasan pada _source code_ agar alurnya mudah dipahami oleh _developer_ selanjutnya.

---

## 🏆 RESULT (HASIL AKHIR)

Pada akhir sesi, Anda diwajibkan untuk mendemonstrasikan dan menyerahkan hasil berikut kepada Asesor:

1. **Aplikasi Berjalan Lancar:** Mendemonstrasikan secara langsung bahwa sistem telah mampu menyimpan data baru secara valid dan memuat daftar peserta dengan kecepatan optimal.
2. **Bukti Pengujian:** Menyerahkan laporan (_screenshot_ terminal) yang membuktikan seluruh Uji Unit dan Uji Integrasi berstatus **Passed/Berhasil** (hijau).
3. **Laporan Performa & Skalabilitas:** Menyusun dokumen ringkas (di dalam file `README.md` pada bagian laporan asesi) yang memuat data perbandingan kecepatan muat aplikasi (sebelum vs. sesudah optimasi) dan analisis ketahanan sistem.
4. **Source Code Terdokumentasi:** Menyerahkan tautan repositori berisi _file_ kode final yang rapi, aman, dan memuat dokumentasi/komentar teknis.
