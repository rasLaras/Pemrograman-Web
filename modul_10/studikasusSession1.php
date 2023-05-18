<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Studikasus</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container-fluid p-3 mb-2 bg-light vh-100">
        <header class="d-flex flex-wrap justify-content-center py-2"></header>
        <main class="container-fluid col-sm-3">
            <div class="row gx-7 align-items-center text-white">
                <div class="card bg-success" style="width: 18rem;">
                    <div class="card-body py-3">
                        <h3 align="center" class="card-title">Studi Kasus</h3>
                        <h6 align="center" class="card-subtitle mb-2 py-3">Login</h6>
                        <div class="form-floating mb-3 ">
                            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
                            <label for="floatingInput"><a style="color:gray" >Username</a></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"><a style="color:gray" >Password</a></label>
                        </div>
                        <div class="d-grid py-3">
                            <button name="submit" style="font-size:small; font-weight:bold;" type="submit" class="btn rounded-pill btn-light text-secondary">MASUK</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </body>
</html>
<?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo "<h1>Selamat datang, ". $_SESSION['login'] ."</h1><br>";
        echo "<h2>Halaman ini dapat tampil apabila anda berhasil login. ini adalah Home(beranda).</h2><br>";
        echo "<h2>Klik <a href='studiKasus3.php'>disini</a> untuk logout</h2>";
    }
?>