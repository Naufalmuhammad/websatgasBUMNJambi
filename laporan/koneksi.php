<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "satgasbumn"; 
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
$koneksi = mysqli_connect("localhost","root","","satgasbumn");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
