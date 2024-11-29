<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tbl_komponen");
if (!$query) {
    die("Query gagal dijalankan: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Daftar Komponen</title>
    </head>

    <body>
        <div class="container-fluid">
            <h2 class="text-center mt-4">Daftar Komponen Komputer</h2> <!-- Judul Tabel -->

            <div class="row justify-content-center mt-3 mb-3">
                <div class="col-md-auto text-end">
                    <a href='form.php' class='btn btn-primary'>Tambah Data</a>
                </div>
            </div>

            <table class="table table-bordered table-striped text-center" style="padding: 20px;">
                <thead>
                    <tr>
                        <th>Nama Komponen</th>
                        <th>Jumlah Stok</th>
                        <th>Harga (IDR)</th> <!-- Menambahkan keterangan satuan -->
                        <th>Tanggal Input</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <td class="align-middle"><?= $row['nama_komponen'] ?></td>
                        <td class="align-middle"><?= $row['jumlah_stok'] ?></td>
                        <td class="align-middle"><?= 'Rp' . number_format($row['harga'], 0, ',', '.') ?></td>
                        <td class="align-middle"><?= $row['tanggal_input'] ?></td>
                        <td class="text-wrap align-middle" style="max-width: 500px;"><?= $row['deskripsi'] ?></td>
                        <td class="align-middle">
                            <a href='hapus.php?id=<?= $row['id'] ?>' class='btn btn-danger'
                                onclick='return confirm("Apakah Anda yakin ingin menghapus data ini?")'>Hapus</a> |
                            <a href='update.php?id=<?= $row['id'] ?>' class='btn btn-success'>Update</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

</html>