<?php
include "header.php";
include "function.php";

    // if(isset($_POST["submit"])) { 
    //     if(simpan($_POST) > 0) {
    //         echo "Berehasil";
    //     } else {
    //         echo "gagal";
    //     }
    // }
// Koneksi ke database

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body
    style="background-image: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);">

    <!-- Isinya -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-6">
                    <h1>Form Pendaftaran</h1>
                    <p>* isikan data diri anda melalui form berikut</p>
                    <div class="row">
                        <div class="col">
                            <form action="register.php" method="post">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="username" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <select class="form-select mb-3" name="jeniskelamin"
                                    aria-label="Default select example">
                                    <option selected>-</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Waria">Waria</option>
                                </select>
                                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                                <select class="form-select mb-3" name="jurusan" aria-label="Default select example">
                                    <option selected>-</option>
                                    <option value="TK">Teknik Komputer</option>
                                    <option value="TE">Teknik Elektro</option>
                                    <option value="AK">Akuntansi</option>
                                    <option value="AB">Administrasi Bisnins</option>
                                </select>
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <i>SETUJU syarat dan ketentuan ?</i>
                                    </label>
                                </div> -->
                                <div class="buttonnya d-flex justify-content-end">
                                    <button class="btn btn-warning me-3" type="reset">RESET</button>
                                    <button class="btn btn-primary" type="submit" name="submit">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            <h2>Syarat dan Ketentuan</h2>
                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Tempora, qui dignissimos!
                                Repellat qui praesentium, nostrum deleniti minus voluptatem vitae dicta rerum fuga, vero
                                doloribus necessitatibus asperiores adipisci aperiam recusandae beatae vel,
                                reprehenderit sunt? Eaque culpa molestiae possimus laborum. Ut dolorum doloribus
                                mollitia cum? Impedit, eligendi iure quibusdam ratione tenetur eveniet obcaecati error
                                modi totam magni ut vero laborum magnam repellendus quis, unde quasi nihil eos ad? Nobis
                                obcaecati, suscipit vel beatae dolorum perferendis asperiores fugit, dolorem, quos quo
                                neque aspernatur vitae porro totam tempora. Quod eum eius, quos dicta est tempora
                                expedita maxime dolores porro quis, delectus minima atque ipsum!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h1 class="mb-3">
                        <center>Tentang kami</center>
                    </h1>
                    <div class="row">

                        <div class="col-xxl-4 col-xl-3">
                            <div class="card" style="width: 14rem;">
                                <img src="img/ss.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5>Programmers</h5>
                                    <p class="card-text">Orang yang saat ini sedang menggabut dalam keahaliannya</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <center>
                                <h5>Pada jaman duluuuuu</h5>
                            </center>
                            <div class="desk-profil">
                                <p> <i>Disclaimer : </i>Mamang satu ini sangat barbar</p>
                                Jika ada yang mengira bahwa Kratos memiliki kulit yang glowing karena perawatan, maka
                                jawabannya adalah salah besar. Asal usul kulit pucat Kratos sendiri memiliki sebuah
                                sejarah kelam dan diceritakan lengkap pada seri game God of War : Ghost of Spartan.
                                Dimana Kratos yang pada saat itu merupakan tangan kanan dari Sang Dewa perang Ares,
                                berhasil menebar kengerian dan menjelma menjadi seorang jendral Sparta yang memiliki
                                misi menyebarkan kejayan bangsa Sparta keseluruh dunia.
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-4">
                        Yhohoho Wangsafff
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam placeat minima ipsum voluptates
                        eum ab facilis iusto suscipit hic officiis repudiandae dolor optio repellendus, asperiores
                        voluptatibus nihil itaque illo deleniti amet quis neque minus? Velit dolore inventore rerum
                        tempora repudiandae id maiores non expedita fuga cum omnis corrupti, facilis eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <center>
                        <h2>Tools Gabut</h2>
                    </center>
                    <div class="row">
                        <div class="col-xxl-4">
                            <form action="" method="post">
                                <h3>Luas Segitiga</h3>
                                <label for="exampleInputEmail1" class="form-label">Nilai Tinggi</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Nilai Alas</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <button class="btn btn-primary" type="submit">Hitung</button>
                                <button class="btn btn-danger" type="reset">Reset</button>
                            </form>
                        </div>
                        <div class="col-xxl-4">
                            <form action="" method="post">
                                <h3>Luas Segitiga</h3>
                                <label for="exampleInputEmail1" class="form-label">Nilai Tinggi</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Nilai Alas</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <button class="btn btn-primary" type="submit">Hitung</button>
                                <button class="btn btn-danger" type="reset">Reset</button>
                            </form>
                        </div>
                        <div class="col-xxl-4">
                            <form action="" method="post">
                                <h3>Luas Segitiga</h3>
                                <label for="exampleInputEmail1" class="form-label">Nilai Tinggi</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Nilai Alas</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <button class="btn btn-primary" type="submit">Hitung</button>
                                <button class="btn btn-danger" type="reset">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <?php include "footer.php" ?> -->
</body>

</html>