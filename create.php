<?php 
include "konek.php";

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$isbn = $_POST['isbn'];
mysqli_query ($koneksi, "insert into buku values ('','$judul','$pengarang','$tahun_terbit','$isbn')");

header ('location:index.php')

?>	