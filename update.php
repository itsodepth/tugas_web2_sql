<?php
// Menghubungkan ke database
include "koneksi.php";

// Mengambil ID dari URL
$id = $_GET['id'];

// Query untuk mendapatkan data berdasarkan ID
$query = mysqli_query($koneksi, "SELECT * FROM tbl_komponen WHERE id='$id'");

// Mengecek apakah data ditemukan
if ($row = mysqli_fetch_assoc($query)) {
    // Form dengan data lama diisi otomatis
    ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Data Komponen</title>
        <!-- Link CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">
        <div class="container mt-3 mb-3">
            <div class="card">
                <div class="card-header bg-warning text-dark">
                    <h2 class="text-center">Update Data Komponen</h2>
                </div>
                <div class="card-body">
                    <form action="update_proses.php" method="post">
                        <!-- ID Hidden -->
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">

                        <div class="mb-3">
                            <label for="nama_komponen" class="form-label"><b>Nama Komponen</b></label>
                            <input type="text" class="form-control" id="nama_komponen" name="nama_komponen"
                                value="<?= $row['nama_komponen']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah_stok" class="form-label"><b>Jumlah Stok</b></label>
                            <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok"
                                value="<?= $row['jumlah_stok']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label"><b>Harga</b></label>
                            <input type="number" class="form-control" id="harga" name="harga" step="0.01"
                                value="<?= $row['harga']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_input" class="form-label"><b>Tanggal Input</b></label>
                            <input type="datetime-local" class="form-control" id="tanggal_input" name="tanggal_input"
                                value="<?= date('Y-m-d\TH:i', strtotime($row['tanggal_input'])); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"
                                rows="4"><?= $row['deskripsi']; ?></textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="tabel.php" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Link JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
<?php
} else {
    echo "<div class='container mt-5'>";
    echo "<div class='alert alert-danger' role='alert'>Data tidak ditemukan.</div>";
    echo "<a href='tabel.php' class='btn btn-secondary'>Kembali</a>";
    echo "</div>";
}
?>