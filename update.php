<?php 
// koneksi database
include 'konek.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul = $_POST ['judul'];
$pengarang = $_POST ['pengarang'];
$tahun_terbit = $_POST ['tahun_terbit'];
$isbn = $_POST ['isbn'];
// update data ke database
mysqli_query($koneksi,"update buku set judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun_terbit', isbn='$isbn' where id_buku='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>