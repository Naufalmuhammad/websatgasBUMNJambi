<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form
$tanggal_terbit= $_POST['tanggal_terbit'];
$nama_file = $_POST['nama_file'];

// Ambil data foto yang dipilih dari form
$file = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(empty($file)){ // Jika user tidak memilih file foto pada form
  // Lakukan proses update tanpa mengubah fotonya
  // Proses ubah data ke Database
  $sql = $pdo->prepare("UPDATE laporan SET tanggal_terbit=:tanggal_terbit, nama_file=:nama_file, file=:file WHERE id=:id");
  $sql->bindParam(':tanggal_terbit', $tanggal_terbit);
  $sql->bindParam(':nama_file', $nama_file);
  $sql->bindParam(':file', $file);
  $sql->bindParam(':id', $id);
  $execute = $sql->execute(); // Eksekusi / Jalankan query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: indexLaporan.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}else{ // Jika user memilih foto / mengisi input file foto pada form
  // Lakukan proses update termasuk mengganti foto sebelumnya
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $filebaru = date('dmYHis').$file;

  // Set path folder tempat menyimpan fotonya
  $path = "files/".$filebaru;

  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
    $sql = $pdo->prepare("SELECT file FROM laporan WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute(); // Eksekusi query insert
    $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql

    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("files/".$data['file'])) // Jika foto ada
      unlink("files/".$data['file']); // Hapus file foto sebelumnya yang ada di folder images

    // Proses ubah data ke Database
    $sql = $pdo->prepare("UPDATE laporan SET tanggal_terbit=:tanggal_terbit, nama_file=:nama_file, file=:file WHERE id=:id");
    $sql->bindParam(':tanggal_terbit', $tanggal_terbit);
  	$sql->bindParam(':nama_file', $nama_file);
    $sql->bindParam(':file', $filebaru);
    $sql->bindParam(':id', $id);
    $execute = $sql->execute(); // Eksekusi / Jalankan query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: indexLaporan.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}
?>