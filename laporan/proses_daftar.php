<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
 
// update data ke database
mysqli_query($koneksi,"insert into admin values('','$nama','$username','$email','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:login.php");
 
?>