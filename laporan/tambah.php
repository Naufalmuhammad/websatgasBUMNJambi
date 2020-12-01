 <?php include"proteksi.php" ;?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="shortcut icon" href="images/satgas.png">
	<link href="style.css"rel="stylesheet"type="text/css">
	<title>Halaman Tambah Berita Satgas BUMN</title>
</head>
<body>
	</br>
 	<div id="kanvas">
        <div id="header">
        <img src="images/satgas.png" alt="logo satgas" height="160px" align="left"/>
        <img src="images/bumn2.jpeg" alt="logo satgas" height="120px" align="right"/>
        <h2 align="center">HALAMAN TAMBAH BERITA SATGAS BUMN JAMBI</h2>
        </div>
     </div>

	<div align="center">
	<h3>Silahkan Upload Berita Baru</h3>
	<form method="post" action="aksi_tambah.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>Tanggal Berita</td>
				<td><input type="date" name="tanggal_berita">
			</tr>
			<tr>
				<td>Judul Berita</td>
				<td><input type="text" name="judul_berita"></input></td>
			</tr>
			<tr>
				<td>Keterangan Berita</td>
				<td><textarea style="height=800px" type="text" name="keterangan_berita"></textarea></td>
			</tr>
			<tr>
				<td>Dokumentasi</td>
				<td><input style="width: 300px;" type="text" name="dokumentasi"></input></td>
			</tr>
			<tr>
			    <td>Foto</td>
			    <td><input type="file" name="foto"></td>
			</tr>
			<tr>
			<tr>
				<td></td>
				<br><td><input type="submit" name="upload" value="SIMPAN"><a href="index.php"><input type="button" value="BATAL"></a></td>
				<td></td>
			</tr>		
		</table>
	</form>
	</div>
</body>
</html>