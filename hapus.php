<?php
// Menghubungkan ke database
include "koneksi.php";

// Mengambil ID dari URL
$id = $_GET['id'];

// Query untuk menghapus data berdasarkan ID
$query = mysqli_query($koneksi, "DELETE FROM tbl_komponen WHERE id='$id'");

// Mengecek apakah query berhasil
if ($query) {
    echo "<div class='alert alert-success' role='alert'>";
    echo "Data berhasil dihapus.";
    echo "<br><a href='tabel.php' class='btn btn-success mt-3'>Kembali ke Tabel</a>";
    echo "</div>";
} else {
    echo "<div class='alert alert-danger' role='alert'>";
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
    echo "</div>";
}
?>