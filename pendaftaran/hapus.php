<?php

include "../koneksi.php";
$id = $_GET['id_pendaftaran'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran='$id'");

if ($hapus) {
    echo "<script>alert('Hapus Data Berhasil')
    window.location.href='index.php'
    </script>";
} else {
    echo "<script>alert('Hapus Data Gagal')
    window.location.href='index.php'
    </script>";
}
