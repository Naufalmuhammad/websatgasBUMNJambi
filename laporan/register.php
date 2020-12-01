<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="images/satgas.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Admin Satgas BUMN</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        </br>
        </br>
        </br>
        <div id="kanvas">
        <div id="header">
        <img src="images/satgas.png" alt="logo satgas" height="160px" align="left"/>
        <img src="images/bumn2.jpeg" alt="logo satgas" height="120px" align="right"/>
        <h2 align="center">HALAMAN REGISTER ADMIN SATGAS BUMN JAMBI</h2>
        </div>
        </br>
        <p><center>Sudah punya akun? <a href="login.php">Login di sini</center></a></p>
        <?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "Login gagal! username dan password salah!";
				}else if($_GET['pesan'] == "belum_login"){
					echo "Anda harus login untuk mengakses halaman admin";
				}
			}
		?>

        <div align="center">
        <form method="post" action="proses_daftar.php">
        <table>
            <tr>
                <td><label for="name">Nama Lengkap</label></td>
                <td><input class="form-control" type="text" name="nama" placeholder="Nama kamu" /></td>
            </tr>

            <tr>
                <td><label for="username">Username</label></td>
                <td><input class="form-control" type="text" name="username" placeholder="Username" /></td>
            </tr>

            <tr>
                <td><label for="email">Email</label></td>
                <td><input class="form-control" type="text" name="email" placeholder="Alamat Email" /></td>
            </tr>

            <tr>
                <td><label for="password">Password</label></td>
                <td><input class="form-control" type="password" name="password" placeholder="Password" /></td>
            </tr>

            <tr>
            	<td></td>
            	<td><input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" /></td>
            </tr>
        </table>
        </form>
        </div>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/connect.png" />
        </div>

    </div>
</div>

</body>
</html>