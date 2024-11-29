<?php
// Menghubungkan ke database
include "koneksi.php";

// Mengambil data dari form
$nama_komponen = $_POST['nama_komponen'];
$jumlah_stok = $_POST['jumlah_stok'];
$harga = $_POST['harga'];
$tanggal_input = $_POST['tanggal_input']; // Opsional, bisa null jika tidak diisi
$deskripsi = $_POST['deskripsi'];

// Menyusun query SQL untuk menyimpan data ke tabel komponen
$query = mysqli_query($koneksi, "
    INSERT INTO tbl_komponen (nama_komponen, jumlah_stok, harga, tanggal_input, deskripsi)
    VALUES ('$nama_komponen', '$jumlah_stok', '$harga', 
            " . ($tanggal_input ? "'$tanggal_input'" : "DEFAULT") . ", 
            '$deskripsi')
");

// Mengecek apakah query berhasil
if ($query) {
    echo "Berhasil input data ke database. ";
    echo "<a href='tabel.php'>Lihat data di Tabel</a>";
} else {
    echo "Gagal input data: " . mysqli_error($koneksi);
}
?>