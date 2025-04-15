<!DOCTYPE html>
<html>
<head>
    <title>Form PHP Sederhana</title>
</head>
<body>
    <h2>Form dengan Method GET</h2>
    <form action="proses_get.php" method="GET">
        Nama: <input type="text" name="nama"><br>
        Umur: <input type="number" name="umur"><br>
        <input type="submit" value="Kirim (GET)">
    </form>

    <h2>Form dengan Method POST</h2>
    <form action="proses_post.php" method="POST">
        Nama: <input type="text" name="nama"><br>
        Umur: <input type="number" name="umur"><br>
        <input type="submit" value="Kirim (POST)">
    </form>
</body>
</html>
