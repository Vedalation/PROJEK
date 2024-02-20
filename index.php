<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!-- Bootsrap -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Css -->
</head>

<body>
    
    <div class="container">
        <div class="content">
            <div class="card mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="blazing.png" width="600">
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <h1 class="text-center">ONIGIRI DIGITAL LIBRARY</h1>
                            <h1 class="text-center">LOGIN</h1>
                            <!--AWAL CEK -->
                            <?php 
                                if(isset($_GET['pesan'])){
                                    if($_GET['pesan']=="gagal"){
                                        echo "<div class='alert'>Cek kembali Username, Password dan Level!!</div>";
                                    }
                                }
                            ?>
                            <!-- akhir cek -->
                            <form method="post" action="cek_login.php" class="login-form">
                                <div class="form-group mt-5">
                                    <input type="text" name="username" class="form-control" style="border: 1px solid black;" required>
                                    <label>Username</label>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="password" name="password" class="form-control" style="border: 1px solid black;" required>
                                    <label>Password</label>
                                </div>
                                <div class="form-group mt-2">
                                    <select class="form-select" name="Level">
                                        <option selected disabled>Pilih Level Pengguna</option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                                        <option value="anggota">Anggota</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div>
                                    <label>Belum punya akun? Silakan klik tombol berikut:</label>
                                    <a href="daftar.php" class="btn btn-warning btn-sm">Daftar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>