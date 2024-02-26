<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/galeri">Galeri</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="/assets/img/galeri1.jpg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/assets/img/galeri2.jpg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/assets/img/galeri3.jpg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/assets/img/galeri4.jpg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/assets/img/galeri5.jpg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/assets/img/galeri6.jpg" class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>
    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} Informatika-UBHI
        </div>
    </footer>
</body>

</html>