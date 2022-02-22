<?php
include "config.php";


$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$jeniskelamin = $_POST["jeniskelamin"];
$jurusan = $_POST["jurusan"];
if (isset($_POST["submit"])) {
    $query = "INSERT INTO tbl_user 
                            VALUES
                                    ('', '$username', '$email', '$password', '$jeniskelamin', '$jurusan')
                                    ";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil > 0) {
        echo "Berhasil";
    } else {
        echo "Gagal";
    }
}

?>