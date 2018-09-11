<?php
defined('BASEPATH') OR exit('No direct script Access allowed');


?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
	<H1 class="page-header text-center" > Data Siswa </H1>
	<h1> <a href="<?php echo base_url();?>index.php/beranda/linktambahdata">TAMBAH</a></h1>
	<table border="1" align="center" class="table table-striped" style="background: darkgrey">
		<tr>
			<thead class="thead-dark">
			<th>ID </th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Password</th>
			<th>Action</th>
			</thead>
		</tr>
		<?php
		foreach ($siswa as $siswa) {
				
		?>
		<tr>
			<td><?php echo $siswa->id; ?> </td>
			<td><?php echo $siswa->nama; ?> </td>
			<td><?php echo $siswa->kelas;?> </td>
			<td><?php echo $siswa->password;?> </td>
			<td><a href="<?php echo base_url();?>index.php/beranda/linkeditdata/<?php echo $siswa->id; ?>"><span class="glyphicon glyphicon-edit"></span> </a>
			<a href="<?php echo base_url();?>index.php/beranda/deletesiswa/<?php echo $siswa->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
		</tr>
		<?php
	}
	?>


	</table>
	</div>
</body>
</html>