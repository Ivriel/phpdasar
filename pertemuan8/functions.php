<?php
// 1. Move database connection to top
$dbconection = mysqli_connect("localhost", "root", "", "phpdasar");
if (!$dbconection) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. Remove this line - should not be here
// $mahasiswa = query("SELECT * FROM mahasiswa"); 

function query($query) {
    global $dbconection;
    $result = mysqli_query($dbconection, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $dbconection;
    
    // 3. Fix the order of fields to match your database structure
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // 4. Add return statement to check if query was successful
    $query = "INSERT INTO mahasiswa VALUES ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($dbconection, $query);
    return mysqli_affected_rows($dbconection);
}

function hapus($id) {
    global $dbconection;
    mysqli_query($dbconection, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($dbconection);
}
function ubah($data) {
    global $dbconection;
    
    // 5. Add return statement to check if query was successful
    $id= $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // 6. Fix the order of fields to match your database structure
    $query = "UPDATE mahasiswa SET nrp = '$nrp', nama = '$nama', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";
    mysqli_query($dbconection, $query);
    return mysqli_affected_rows($dbconection);
}
?>