<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$tanggal_terbit = $_POST['tanggal_terbit'];
$nama_file = $_POST['nama_file'];
$file = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$filebaru = date('dmYHis').$file;

// Set path folder tempat menyimpan fotonya
$path = "files/".$filebaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $sql = $pdo->prepare("INSERT INTO laporan(tanggal_terbit, nama_file, file) VALUES(:tanggal_terbit,:nama_file, :file)");
  $sql->bindParam(':tanggal_terbit', $tanggal_terbit);
  $sql->bindParam(':nama_file', $nama_file);
  $sql->bindParam(':file', $filebaru);
  $sql->execute(); // Eksekusi query insert

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: indexLaporan.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='arsip.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf,file laporan gagal untuk diupload.";
  echo "<br><a href='arsip.php'>Kembali Ke Form</a>";
}
?>