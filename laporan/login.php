<!DOCTYPE html>
<html>
<head>
	<title>Login Admin Satgas BUMN</title>
	<link rel="shortcut icon" href="images/satgas.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	</br>
	</br>
	</br>
    <div id="kanvas">
	<div id="header">
	<img src="images/satgas.png" alt="logo satgas" height="160px" align="left"/>
	<img src="images/bumn2.jpeg" alt="logo satgas" height="120px" align="right"/>
	<h2 align="center">HALAMAN ADMIN SATGAS BUMN JAMBI</h2>

	</div>
	<!-- cek pesan notifikasi -->
	<?php 
	  if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
    <div class="login">
	<br/>
	<form method="post" action="cek_login.php" onSubmit="return validasi()">
		<table>
		<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>			
	</form>
    </div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>
		<p><a href="register.php"> Belum memiliki akun? </p>
		<p><a href="http://satgasbumnjambi.com"> kembali ke Dashboard </p>
		</form>
	</form>
	</div>
</body>
</html>