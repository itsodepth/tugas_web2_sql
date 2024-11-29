<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_komputer";
$koneksi = mysqli_connect($host, $user, $password);

if (!$koneksi) {
    die("Gagal Terkoneksi: " . mysqli_connect_error());
}

mysqli_select_db($koneksi, $database); // Perbaikan di sini

if (mysqli_select_db($koneksi, $database)) {
    //echo "Berhasil Koneksi!";
} else {
    echo "Gagal Terkoneksi ke database";
}
?>