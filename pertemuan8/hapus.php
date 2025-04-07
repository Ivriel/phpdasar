<?php
require 'functions.php'; // memanggil file functions.php yang berisi logika logika
$id = $_GET["id"];
if(hapus($id)>0){
    echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = 'latihan1.php';
        </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus!');
            document.location.href = 'latihan1.php';
        </script>";
}
?>