<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (
        empty($_POST['nama']) ||
        empty($_POST['alamat'])
        ) {
            header('Location: latihan3.php');
            exit;
        }
     ?>
    <h1>Selamat Datang <?= htmlspecialchars($_POST["nama"])?></h1>
    <p>Alamat: <?= htmlspecialchars($_POST["alamat"])?></p>
</body>
</html>