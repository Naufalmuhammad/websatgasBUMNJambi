<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$tanggal_berita = $_POST['tanggal_berita'];
$judul_berita = $_POST['judul_berita'];
$keterangan_berita = $_POST['keterangan_berita'];
$dokumentasi = $_POST['dokumentasi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $sql = $pdo->prepare("INSERT INTO berita(tanggal_berita, judul_berita, keterangan_berita, dokumentasi, foto) VALUES(:tanggal_berita,:judul_berita,:keterangan_berita, :dokumentasi, :foto)");
  $sql->bindParam(':tanggal_berita', $tanggal_berita);
  $sql->bindParam(':judul_berita', $judul_berita);
  $sql->bindParam(':keterangan_berita', $keterangan_berita);
  $sql->bindParam(':dokumentasi', $dokumentasi);
  $sql->bindParam(':foto', $fotobaru);
  $sql->execute(); // Eksekusi query insert

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
}
?>