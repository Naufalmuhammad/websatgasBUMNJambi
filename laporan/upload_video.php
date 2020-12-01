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
        <h2 align="center">HALAMAN TAMBAH VIDEO BERITA SATGAS BUMN JAMBI</h2>
        </div>
     </div>

	<div align="center">
	<h3>Silahkan Upload Video Baru</h3>
	<form method="post" action="aksi_video.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>Tanggal Rekam Video</td>
				<td><input type="date" name="tanggal_video">
			</tr>
			<tr>
				<td>Nama Kegiatan Video</td>
				<td><input type="text" name="nama_video"></input></td>
			</tr>
			<tr>
				<td>Dokumentasi</td>
				<td><input style="width: 300px;" type="text" name="dokumentasi"></input></td>
			</tr>
			<tr>
			    <td>Video</td>
			    <td><input type="file" name="video"></td>
			</tr>
			<tr>
			<tr>
				<td></td>
				<br><td><input type="submit" name="upload" value="SIMPAN"><a href="indexVideo.php"><input type="button" value="BATAL"></a></td>
				<td></td>
			</tr>		
		</table>
	</form>
	</div>
</body>
</html>