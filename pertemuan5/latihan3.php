<?php
$mahasiswa = [
    ["Ivriel Gunawan","054343445","Teknik Informatika","gunawanivriel@gmail.com"],
    ["Rizki Maulana","054343446","Teknik Informatika","rizkim@yahoo.com"],
    ["Rizki Maulana","054343446","Teknik Informatika","rizkim@yahoo.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <!-- <ul>
        <?php foreach ($mahasiswa as $mhs):?>
            <li><?php echo $mhs?></li>
        <?php endforeach; ?>
    </ul> -->
    <?php foreach($mahasiswa as $mhs):?>
        <ul>
            <li><?= $mhs[0]?></li>
            <li><?= $mhs[1]?></li>
            <li><?= $mhs[2]?></li>
            <li><?= $mhs[3]?></li>
        </ul>
        <?php endforeach ?>
</body>
</html>