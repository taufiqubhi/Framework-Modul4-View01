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
                    <a class="nav-link active" href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galeri">Galeri</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Dosen</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    <ol class="list-group my-4">
                        <?php
                        foreach ($KurirDataDosen as $DataDosen) {
                            echo "<li class=\"list-group-item\"> $DataDosen </li>";
                        }
                        ?>
                    </ol>
            </div>
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