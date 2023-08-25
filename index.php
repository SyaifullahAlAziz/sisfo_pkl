<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran PKL</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/icon.png" width="30px" alt=""> SMKN 2 PADANG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left:50px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="persyaratan.php">Syarat Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pendaftaran/tambah.php">Pendaftaran PKL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pendaftaran/index.php">Data Pendaftaran PKL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Images -->
        <img src="images/7.jpg" width="100%" alt="">

        <!-- Footer -->
        <div class="card text-center">
            <div class="card-footer text-body-secondary">
                &copy; Copyright <?= date('Y') ?> <b> Syaifullah Al Aziz </b>
            </div>
        </div>
    </div>
</body>

</html>