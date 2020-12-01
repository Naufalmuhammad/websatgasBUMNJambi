 <?php include"proteksi.php" ;?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" href="images/satgas.png">
	<title>Halaman Admin</title>
	
	<link href="style.css"rel="stylesheet"type="text/css">
	</head>
	<body>
	<div id="kanvas">
	<div id="header">
	<img src="images/satgas.png" alt="logo satgas" height="160px" align="left"/>
	<img src="images/bumn2.jpeg" alt="logo satgas" height="120px" align="right"/>
	<h2 align="center">HALAMAN ADMIN SATGAS BUMN JAMBI</h2>
	</div>
	<div id="menu">
	<ul>
		<li><a href="index.php" >Berita Satgas</a></li>
		<li><a href="indexVideo.php">Video Berita Satgas</a></li>
		<li><a href="indexLaporan.php" >Laporan Satgas</a></li>
		<li><a href="logout.php" onClick="return confirm('apakah anda ingin keluar ?')">Logout</a></li>
	</ul>
	</div>
	<div id="content">
	<div class="deskripsi">
	<form method="post" action="arsip.php">
	<input type="submit" value="Tambah Laporan">
	</form>
	<br>

	<table border=1>
		<tr bgcolor="#008080">
		<th>File Laporan</th>
		<th>Tanggal Terbit Laporan</th>
		<th>Nama Laporan</th>
		<th>Silahkan</th>
	</tr>
		<?php
		  // Load file koneksi.php
		  include "koneksi.php";
		  // Buat query untuk menampilkan semua data laporan
		 
		  $sql = $pdo->prepare("SELECT * FROM laporan");
		  $sql->execute(); // Eksekusi querynya

		  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
		    echo "<tr>";
		    echo "<td>".$data['file']."</td>";
		    echo "<td>".$data['tanggal_terbit']."</td>";
		    echo "<td>".$data['nama_file']."</td>";
		    echo "<td><a href='edit_laporan.php?id=".$data['id']."'>Ubah</a> <a href='hapus_laporan.php?id=".$data['id']."'>Hapus</a> <a href='download_laporan.php?file=".$data['file']."'>Download</a> </td>";
		    echo "</tr>";
		  }
		  ?>
  </table>
</body>
</html>