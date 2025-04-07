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

    // upload gambar
    $gambar=upload();
    if(!$gambar) {
        return false;
    }

    // 4. Add return statement to check if query was successful
    $query = "INSERT INTO mahasiswa VALUES ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($dbconection, $query);
    return mysqli_affected_rows($dbconection);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    //  cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Format gambar tidak diizinkan!');
            </script>";
        return false;
    }

    //  cek jika ukuran terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();// unikid() untuk membuat nama file baru yang unik
    $namaFileBaru .= '.' . $ekstensiGambar; // menambahkan ekstensi gambar ke nama file baru
    


     // Add directory path
     $uploadDir = 'img/';
    
     // Create directory if it doesn't exist
     if (!file_exists($uploadDir)) {
         mkdir($uploadDir, 0777, true);
     }
 
     // Move the uploaded file
     move_uploaded_file($tmpName, $uploadDir . $namaFileBaru);
     return $uploadDir . $namaFileBaru;  // Return full path
}

function hapus($id) {
    global $dbconection;
    mysqli_query($dbconection, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($dbconection);
}
function ubah($data) {
    global $dbconection;
    
    // Get all form data including ID
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    // Check if new image is uploaded
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
        // If upload fails, keep old image
        if(!$gambar) {
            $gambar = $gambarLama;
        }
    }
    
    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
              WHERE id = $id";
              
    mysqli_query($dbconection, $query);
    
    return mysqli_affected_rows($dbconection);
}
function find($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
    return query($query);
}
?>