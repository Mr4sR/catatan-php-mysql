<!DOCTYPE html>
<html>
<head>
    <title>Form PHP Satu File</title>
</head>
<body>

<?php
// Cek apakah data dikirim menggunakan GET atau POST
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit_get'])) {
    $nama = $_GET['nama'] ?? 'Tidak ada nama';
    $umur = $_GET['umur'] ?? 'Tidak ada umur';

    echo "<h2>Data Diterima (GET):</h2>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Umur: " . htmlspecialchars($umur) . "<br><br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_post'])) {
    $nama = $_POST['nama'] ?? 'Tidak ada nama';
    $umur = $_POST['umur'] ?? 'Tidak ada umur';

    echo "<h2>Data Diterima (POST):</h2>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Umur: " . htmlspecialchars($umur) . "<br><br>";
}
?>

<h2>Form dengan Method GET</h2>
<form method="GET">
    Nama: <input type="text" name="nama"><br>
    Umur: <input type="number" name="umur"><br>
    <input type="submit" name="submit_get" value="Kirim (GET)">
</form>

<h2>Form dengan Method POST</h2>
<form method="POST">
    Nama: <input type="text" name="nama"><br>
    Umur: <input type="number" name="umur"><br>
    <input type="submit" name="submit_post" value="Kirim (POST)">
</form>

</body>
</html>
