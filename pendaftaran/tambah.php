<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran PKL</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
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
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../persyaratan.php">Syarat Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tambah.php">Pendaftaran PKL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Data Pendaftaran PKL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Form -->
        <div class="card mt-3 mb-3">
            <div class="card-header">
                <h3>Form Pendaftaran Praktik Kerja Lapangan</h3>
            </div>
            <div class="card-body">
                <form action="proses_tambah.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Perusahaan</label>
                                <textarea name="alamat_perusahaan" id="" cols="30" rows="3" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Siswa</label>
                                <input type="text" name="nama_siswa" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">NISN</label>
                                <input type="number" name="nisn" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">No.Hp</label>
                                <input type="number" name="no_hp" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Siswa</label>
                                <textarea name="alamat_siswa" id="" cols="30" rows="3" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Mulai</label>
                                <input type="date" name="tgl_mulai" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="date" name="tgl_selesai" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Form -->

        <!-- Footer -->
        <div class="card text-center">
            <div class="card-footer text-body-secondary">
                &copy; Copyright <?= date('Y') ?> <b> CV. Mediatama Web Indonesia </b>
            </div>
        </div>

    </div>
</body>

</html>