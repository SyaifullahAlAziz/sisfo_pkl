<?php

include "../koneksi.php";

$nama_perusahaan = $_POST['nama_perusahaan'];
$alamat_perusahaan = $_POST['alamat_perusahaan'];
$nama_siswa = $_POST['nama_siswa'];
$nisn = $_POST['nisn'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$no_hp = $_POST['no_hp'];
$alamat_siswa = $_POST['alamat_siswa'];
$tgl_mulai = $_POST['tgl_mulai'];
$tgl_selesai = $_POST['tgl_selesai'];

$daftar = mysqli_query($koneksi, "INSERT INTO tb_pendaftaran (nama_perusahaan, alamat_perusahaan, nama_siswa, nisn, kelas, jurusan, no_hp, alamat_siswa, tgl_mulai, tgl_selesai) VALUES('$nama_perusahaan', '$alamat_perusahaan', '$nama_siswa', '$nisn', '$kelas', '$jurusan', '$no_hp', '$alamat_siswa', '$tgl_mulai', '$tgl_selesai')");

if ($daftar) {
    echo "<script>alert('Pendaftaran PKL Anda Berhasil')
    window.location.href='index.php'
    </script>";
} else {
    echo "<script>alert('Pendaftaran PKL Anda Gagal')
    window.location.href='tambah.php'
    </script>";
}
