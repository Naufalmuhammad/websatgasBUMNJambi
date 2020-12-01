<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$tanggal_video = $_POST['tanggal_video'];
$nama_video = $_POST['nama_video'];
$dokumentasi = $_POST['dokumentasi'];
$video = $_FILES['video']['name'];
$tmp = $_FILES['video']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$videobaru = date('dmYHis').$video;

// Set path folder tempat menyimpan fotonya
$path = "video/".$videobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $sql = $pdo->prepare("INSERT INTO video(tanggal_video, nama_video, dokumentasi, video) VALUES(:tanggal_video, :nama_video, :dokumentasi, :video)");
  $sql->bindParam(':tanggal_video', $tanggal_video);
  $sql->bindParam(':nama_video', $nama_video);
  $sql->bindParam(':dokumentasi', $dokumentasi);
  $sql->bindParam(':video', $videobaru);
  $sql->execute(); // Eksekusi query insert

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: indexVideo.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='aksi_video.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='aksi_video.php'>Kembali Ke Form</a>";
}
?>