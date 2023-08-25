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

        <!-- Data Pendaftaran -->
        <div class="card mt-3 mb-3">
            <div class="card-header">
                <h3>Data Pendaftaran Praktik Kerja Lapangan</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Alamat Perusahaan</th>
                        <th>Nama Siswa</th>
                        <th>NISN</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>No.Hp</th>
                        <th>Alamat Siswa</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        include "../koneksi.php";

                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_pendaftaran ORDER BY id_pendaftaran DESC");
                        while ($data = mysqli_fetch_array($query)) :
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama_perusahaan'] ?></td>
                                <td><?php echo $data['alamat_perusahaan'] ?></td>
                                <td><?php echo $data['nama_siswa'] ?></td>
                                <td><?php echo $data['nisn'] ?></td>
                                <td><?php echo $data['kelas'] ?></td>
                                <td><?php echo $data['jurusan'] ?></td>
                                <td><?php echo $data['no_hp'] ?></td>
                                <td><?php echo $data['alamat_siswa'] ?></td>
                                <td><?php echo $data['tgl_mulai'] ?></td>
                                <td><?php echo $data['tgl_selesai'] ?></td>
                                <td>
                                    <a href="hapus.php?id_pendaftaran=<?php echo $data['id_pendaftaran'] ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <div class="card text-center">
            <div class="card-footer text-body-secondary">
                &copy; Copyright <?= date('Y') ?> <b> CV. Mediatama Web Indonesia </b>
            </div>
        </div>

    </div>
</body>

</html>