 <?php include"proteksi.php" ;?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="shortcut icon" href="images/satgas.png">
	<link href="style.css"rel="stylesheet"type="text/css">
	<title>Halaman Tambah Laporan Satgas BUMN</title>
</head>
<body>
	</br>
 	<div id="kanvas">
        <div id="header">
        <img src="images/satgas.png" alt="logo satgas" height="160px" align="left"/>
        <img src="images/bumn2.jpeg" alt="logo satgas" height="120px" align="right"/>
        <h2 align="center">HALAMAN TAMBAH LAPORAN SATGAS BUMN JAMBI</h2>
        </div>
     </div>

	<div align="center">
	<h3>Silahkan Upload Laporan Baru</h3>
	<form method="post" action="aksi_arsip.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>Tanggal Terbit Laporan</td>
				<td><input type="date" name="tanggal_terbit">
			</tr>
			<tr>
				<td>Nama Laporan</td>
				<td><input type="text" name="nama_file"></input></td>
			</tr>
			<tr>
			    <td>File Laporan</td>
			    <td><input type="file" name="file"></td>
			</tr>
			<tr>
			<tr>
				<td></td>
				<br><td><input type="submit" value="SIMPAN"><a href="indexLaporan.php"><input type="button" value="BATAL"></a></td>
				<td></td>
			</tr>		
		</table>
	</form>
	</div>
</body>
</html>