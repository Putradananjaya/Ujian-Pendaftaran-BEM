<?php
// src/index.php
require 'database.php';

// [BUG 1: PROFILING] Asesi harus menambahkan fungsi microtime(true) di awal dan akhir file.

// Ambil semua data pelamar panitia
$query_utama = $db->query("SELECT * FROM calon_panitia");
$data_utama = $query_utama->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Pendaftaran Kepanitiaan BEM</title>
</head>
<body>
    <h1>Form Oprec Kepanitiaan BEM Kampus</h1>
    
    <form action="proses.php" method="POST">
        <input type="text" name="nama_mahasiswa" placeholder="Nama Lengkap"><br><br>
        <input type="text" name="nim" placeholder="NIM"><br><br>
        <select name="id_divisi">
            <option value="1">Divisi Acara</option>
            <option value="2">Divisi Humas</option>
            <option value="3">Divisi Pubdok</option>
            <option value="4">Divisi Perlengkapan</option>
        </select><br><br>
        <button type="submit">Daftar Panitia</button>
    </form>
    
    <hr>
    
    <h2>Daftar Pelamar Kepanitiaan (5.000+ Pelamar)</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Divisi Pilihan</th>
        </tr>
        <?php
        foreach ($data_utama as $row) {
            $id_divisi = $row['id_divisi'];
            
            // [BUG 2: SKALABILITAS / N+1 QUERY] 
            // Kueri di dalam looping yang akan membunuh server. Asesi wajib menghapus ini 
            // dan menggabungkannya ke kueri utama di atas menggunakan JOIN.
            $query_relasi = $db->query("SELECT nama_divisi FROM divisi_panitia WHERE id = $id_divisi");
            $relasi = $query_relasi->fetch();

            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama_mahasiswa'] . "</td>";
            echo "<td>" . $row['nim'] . "</td>";
            echo "<td>" . $relasi['nama_divisi'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>