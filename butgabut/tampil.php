<?php 
include "config.php";
include "header.php";

$ngambildata = mysqli_query($koneksi, "SELECT * FROM tbl_user");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main-content">
        <div class="container-flui">
            <div class="row">
                <div class="col">
                    <h1>Menampilkan data</h1>
                    <table class="table">
                        <thead>

                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            $no = 1;
                                while($datanya = mysqli_fetch_assoc($ngambildata)) {
                                    ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $datanya['username']; ?></td>
                                <td><?php echo $datanya['email']; ?></td>
                                <td><?php echo $datanya['jurusan']; ?></td>
                                <td><?php echo $datanya['jeniskelamin']; ?></td>
                            </tr>
                            <?php $no++; }?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include "footer.php"
    ?>
</body>

</html>