<?php
// src/database.php

// [BUG] Kredensial koneksi rentan dan mode Exception (try-catch) belum diaktifkan!
$db = new PDO('sqlite:pendaftaran.sqlite');

?>