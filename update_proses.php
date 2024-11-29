<?php
// Menghubungkan ke database
include "koneksi.php";

// Mengambil data dari form
$id = $_POST['id'];
$nama_komponen = $_POST['nama_komponen'];
$jumlah_stok = $_POST['jumlah_stok'];
$harga = $_POST['harga'];
$tanggal_input = $_POST['tanggal_input'];
$deskripsi = $_POST['deskripsi'];

// Query untuk mengupdate data
$query = mysqli_query($koneksi, "
    UPDATE tbl_komponen 
    SET nama_komponen='$nama_komponen', 
        jumlah_stok='$jumlah_stok', 
        harga='$harga', 
        tanggal_input=" . ($tanggal_input ? "'$tanggal_input'" : "DEFAULT") . ", 
        deskripsi='$deskripsi' 
    WHERE id='$id'
");

// Mengecek apakah query berhasil
if ($query) {
    echo "Data berhasil diupdate.<br>";
    echo "<a href='tabel.php'>Kembali ke Tabel</a>";
} else {
    echo "Gagal mengupdate data: " . mysqli_error($koneksi);
}
?>