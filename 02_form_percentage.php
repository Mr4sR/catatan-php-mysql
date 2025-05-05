<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 25rem;">
            <h3 class="text-center mb-4">Hitung Persen</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai</label>
                    <input type="number" class="form-control" id="nilai" name="nilai" placeholder="1000000" required>
                </div>
                <div class="mb-3">
                    <label for="persen" class="form-label">Persen (%)</label>
                    <input type="number" class="form-control" id="persen" name="persen" placeholder="30" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Hitung</button>
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nilai = $_POST['nilai'];
                $persen = $_POST['persen'];

                // Contoh validasi sederhana
                if (!empty($nilai) && !empty($persen)) {
                    $nilai = $_POST['nilai'];
                    $persen = $_POST['persen'];
                    $hasil = ($nilai * $persen) / 100;
                    $formattedNilai = number_format($nilai);
                    $formattedHasil = number_format($hasil);
                    echo "<div class='alert alert-success mt-3 text-center' role='alert'>
                            Nilai dari $persen% dari $formattedNilai
                            <h2>$formattedHasil</h2>
                          </div>";
                } else {
                    echo "<div class='alert alert-error mt-3' role='alert'>
                            Terjadi kesalahan saat menghitung nilai persen.
                          </div>";
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>