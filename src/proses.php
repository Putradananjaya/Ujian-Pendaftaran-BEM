<?php
// src/proses.php
require 'database.php';

// [BUG 1: ALGORITMA] Tidak ada validasi. Jika user submit form kosong, program akan tetap lanjut dan error.
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$id_divisi = $_POST['id_divisi'];

// [BUG 2: SQL INJECTION] Parameter langsung digabung ke string SQL!
// Asesi wajib mengubahnya menjadi Prepared Statement.
$sql = "INSERT INTO calon_panitia (nama_mahasiswa, nim, id_divisi) VALUES ('$nama_mahasiswa', '$nim', '$id_divisi')";

// Mengeksekusi kueri kotor
$db->exec($sql);

header("Location: index.php");
exit;
?>