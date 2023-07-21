<?php 
$koneksi = mysqli_connect ('localhost','root','','buku');

//cek koneksi 
if (mysqli_connect_errno()){
	echo 'koneksi ke database salah: ', mysqli_connect_error();
	//ini berfungsi jika error maka akan keluar output seperti di atas
}
?>