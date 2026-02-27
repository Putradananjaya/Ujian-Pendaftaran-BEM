<?php
// setup.php - Eksekusi: php setup.php
$db = new PDO('sqlite:src/pendaftaran.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Buat Tabel Divisi dan Calon Panitia
$db->exec("CREATE TABLE IF NOT EXISTS divisi_panitia (id INTEGER PRIMARY KEY AUTOINCREMENT, nama_divisi TEXT)");
$db->exec("CREATE TABLE IF NOT EXISTS calon_panitia (id INTEGER PRIMARY KEY AUTOINCREMENT, nama_mahasiswa TEXT, nim TEXT, id_divisi INTEGER)");

// Masukkan data referensi divisi kepanitiaan
$db->exec("INSERT INTO divisi_panitia (nama_divisi) VALUES ('Divisi Acara'), ('Divisi Humas'), ('Divisi Pubdok'), ('Divisi Perlengkapan')");

// Masukkan 5.000 data dummy untuk mensimulasikan beban server
echo "Sedang men-generate 5.000 data pelamar kepanitiaan...\n";
$db->beginTransaction();
for ($i = 1; $i <= 5000; $i++) {
    $id_divisi = rand(1, 4);
    $db->exec("INSERT INTO calon_panitia (nama_mahasiswa, nim, id_divisi) VALUES ('Pelamar BEM $i', 'NIM2025$i', $id_divisi)");
}
$db->commit();

echo "Setup Selesai! File pendaftaran.sqlite berhasil dibuat di dalam folder src/.";
?>