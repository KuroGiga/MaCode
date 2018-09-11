<?php
defined("BASEPATH") or exit ('No Direct Script Case Acces Allowed');

?>
<!DOCTYPE html>
<html>
<head>
	<title> EDIT DATA SISWA </title>
</head>
<body>
	<?php 
	extract($siswa);
	?>
	<h1> EDIT DATA </h1>
	<form method="POST" action = "<?php echo base_url();?>index.php/Beranda/update/<?php echo $id;?>">
		<table>
			<tr>
				<td>Nama</td>
				<td>Kelas</td>
				<td>Password</td>
			</tr>
			<tr>
				<td><input type="text" value="<?php echo $nama;?>"name="nama"></td>
				<td><input type="text" value="<?php echo $kelas; ?>" name="kelas"></td>
				<td><input type="Password" value="<?php echo $password; ?>" name="password"></td>
			</tr>

			<td><button type="submit">CHANGE</button></td>
		</table>
	</form>

</body>
</html>