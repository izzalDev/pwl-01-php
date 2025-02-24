<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = htmlspecialchars($_POST["nim"]);
    $nama = htmlspecialchars($_POST["nama"]);
    echo "Hello, $nim, $nama!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h2>Masukkan NIM dan Nama</h2>
    <form action="" method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
