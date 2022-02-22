<?php 

include "config.php";
    function simpan($datanya){
        global $koneksi;
        $username = $datanya["username"];
        $password = $datanya["password"];
        $email = $datanya["email"];
        $jurusan = $datanya["jurusan"];
        $jeniskelamin = $datanya["jeniskelamin"];

            $querynya = "INSERT INTO tbl_user 
                VALUES ('','$username', '$email', '$password', ''$jeniskelamin', '$jurusan')";

             mysqli_query($koneksi, $querynya);
               return mysqli_affected_rows($koneksi);
    }

?>