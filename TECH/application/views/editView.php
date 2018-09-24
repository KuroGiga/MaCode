<?php
defined("BASEPATH") or exit ('No Direct Script Case Acces Allowed');

?>
<!DOCTYPE html>
<html>
<head>
	<title> EDIT DATA SISWA </title>

	<style type="text/css">
		
	.new-div{
	background: #355d80a6;
    border-radius: 20px;
    padding: 10px;
    width: 500px;
	}
  .button {
  background-color: #1e611e;
    margin-top: 20px;
    border: none;
    width: 100px;
    height: 35px;
    color: white;
    font-family: monospace;
    border-radius: 15px
  }

	.field{
	border-radius: 5px;
    margin-top: 10px;
    font-family: monospace;
    width: 300px;
    height: 20px;
	}


	</style>
</head>
<body>
	<?php 
	extract($project);
	?>
	<center>
	<div class="new-div">
	<h1> EDIT DATA </h1>
	<form method="POST" action = "<?php echo base_url();?>index.php/user/update/<?php echo $id_project;?>">
		
			
				
				
				<p>Publisher</p>
			
				<p style="font-family: monospace;">Project'S Name</p>
				<input class="field" type="text" value="<?php echo $name_project;?>"name="nama">
				<br>
				<p style="font-family: monospace;">Project'S Link</p>
				<input class="field" type="text" value="<?php echo $link_project; ?>" name="kelas">
				<br>
				<p style="font-family: monospace;">Publisher</p>
				<input class="field" type="text" value="<?php echo $publisher; ?>" name="password">
				<br>

			

			<button class="button" type="submit">CHANGE</button>
			

	</form>
	</div>
	</center>

</body>
</html>