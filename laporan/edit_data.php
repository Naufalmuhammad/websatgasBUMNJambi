 <?php include"proteksi.php" ;?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/satgas.png">
	<link href="style.css"rel="stylesheet"type="text/css">
	<title>Halaman Edit Berita Satgas BUMN</title>
</head>
<body>
	</br>
	<div id="kanvas">
        <div id="header">
        <img src="images/satgas.png" alt="logo satgas" height="160px" align="left"/>
        <img src="images/bumn2.jpeg" alt="logo satgas" height="120px" align="right"/>
        <h2 align="center">HALAMAN EDIT BERITA SATGAS BUMN JAMBI</h2>
        </div>
     </div>
	
	<h3><center>Silahkan Edit Berita Satgas</center></h3>
 
	<?php
  // Load file koneksi.php
  include "koneksi.php";

  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];

  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM berita WHERE id=$id");
  $sql->bindParam(':id', $id);
  $sql->execute(); // Eksekusi query insert
  $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
  ?>
  <div align="center">
  <form method="post" action="update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
    <table cellpadding="8">
      <tr>
        <td>Tanggal Berita</td>
        <td><input type="date" name="tanggal_berita" value="<?php echo $data['tanggal_berita']; ?>"></td>
      </tr>
      <tr>
        <td>Judul Berita</td>
        <td><input type="text" name="judul_berita" value="<?php echo $data['judul_berita']; ?>"></td>
      </tr>
      <tr>
        <td>Keterangan Berita</td>
        <td><textarea style="height=800px" type="text" name="keterangan_berita" value="<?php echo $data['keterangan_berita']; ?>"></textarea></td>
      </tr>
      <tr>
        <td>Dokumentasi</td>
        <td><input type="text" name="dokumentasi" value="<?php echo $data['dokumentasi']; ?>"></td>
      </tr>
        <td>Foto</td>
        <td>
          <input type="file" name="foto">
        </td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" onClick="return confirm('Yakin ingin keluar?')" value="Batal"></a>
  </form>
  </div>
</body>
</html>