<?php
function salam($nama){
    date_default_timezone_set('Asia/Jakarta'); 
    $hour = date("H");
    if ($hour >= 5 && $hour < 12) {
        $waktu = "Pagi";
    } elseif ($hour >= 12 && $hour < 18) {
        $waktu = "Siang";
    } else {
        $waktu = "Malam";
    }
    
    return "Selamat $waktu, $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo salam("Ivriel")?></h1>
    <p>Jam<?php echo date(' H:i'); ?></p>
</body>
</html>