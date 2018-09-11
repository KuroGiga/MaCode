<?php
defined("BASEPATH") or exit ('No Direct Script Case Acces Allowed');

?>
<!DOCTYPE html>
<html>
<head>
	<title> TAMBAH DATA SISWA </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1> TAMBAH DATA SISWA </h1>
	<form class="form-group" method="POST" action = "<?php echo base_url();?>index.php/Beranda/tambahdata">
		<table>
			<tr>
				<td>Nama</td>
				<td>Kelas</td>
				<td>Password</td>
			</tr>
			<tr>
				<td><input class="form-control" type="text" name="nama"></td>
				<td><input class="form-control" type="text" name="kelas"></td>
				<td><input class="form-control" type="Password" name="password"></td>
			</tr>

			<td><button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-plus "> TAMBAH</span></button></td>
		</table>
	</form>

</body>
</html>