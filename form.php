<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Input Stok Komponen Komputer</title>
        <!-- Link CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">
        <div class="container mt-3 mb-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center">Formulir Input Stok Data Komponen Komputer</h2>
                </div>
                <div class="card-body">
                    <form action="proses.php" method="post">
                        <div class="mb-3">
                            <label for="nama_komponen" class="form-label"><b>Nama Komponen</b></label>
                            <input type="text" class="form-control" id="nama_komponen" name="nama_komponen" required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_stok" class="form-label"><b>Jumlah Stok</b></label>
                            <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label"><b>Harga</b></label>
                            <input type="number" class="form-control" id="harga" name="harga" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_input" class="form-label"><b>Tanggal Input</b></label>
                            <input type="datetime-local" class="form-control" id="tanggal_input" name="tanggal_input">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Batal</button>
                            </div>
                            <a href="tabel.php" class="btn btn-info text-white">Lihat Tabel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Link JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>