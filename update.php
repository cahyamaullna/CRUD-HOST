<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_siswa'];
$nis= $_POST['nis'];
$nama = $_POST['nama'];
$kelahiran = $_POST['kelahiran'];
$rombel = $_POST['rombel'];
$rayon = $_POST['rayon'];


// update data ke database
mysqli_query($koneksi,"UPDATE siswa SET nis='$nis', nama='$nama', kelahiran='$kelahiran', rombel='$rombel', rayon='$rayon' WHERE id_siswa='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>