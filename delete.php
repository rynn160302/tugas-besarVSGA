<?php 
// koneksi database
include 'konek.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from buku where id_buku='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>