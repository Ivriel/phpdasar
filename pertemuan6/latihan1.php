<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 5px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(180deg);
            border-radius: 100%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $angka = [[1, 2, 3, 4, 5, 6, 7],[8,9,10,11,12],[13,14,15,16]]
        ?>
    <?php foreach ($angka as $n): ?>
        <?php foreach ($n as $m): ?>
        <div class="kotak">
            <?= $m ?>
        </div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach ?>

    <?php
    $number = [[1, 2, 3], [3, 4, 5]];
    echo $number[1][2]
        ?>
</body>

</html>