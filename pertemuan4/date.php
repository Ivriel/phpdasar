<?php
// UNIX TIMESTAMP / EPOCH TIME
// echo time(); // detik yang sudah berlalu dari 1 Januari 1970 - Sekarang
echo date("l, d -m -y",time()+60*60*24*100);// 100 hari kedepan
echo "<br>";
echo date("l, d -m -y",time()-60*60*24*100); // 100 hari kebelakang
echo "<br>";
echo mktime(0,0,0,8,25,1985); // membuat detik sendiri dari 1 januari 1970 sampai yang ditentukan
echo "<br>";
echo date("l", mktime(0,0,0,8,25,1985));

echo strtotime("25 aug 1985")
?>