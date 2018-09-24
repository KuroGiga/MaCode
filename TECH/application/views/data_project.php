<head>
  <title></title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">

<style type="text/css">
  
  .divProject{
    background: #000000b3;
    width: 400px;
    border-radius: 10px;
    padding: 10px;
    color: white;
    margin-top: 10px;
}

</style>

</head>

<body style="background-color: #4c31db">

<div class="container">
  

    <?php
    foreach ($project as $project) {
        
    ?>
<center>
<div class="divProject">
  <h1><?php echo $project->name_project; ?> </h1>
  <div>
    <a href="<?php echo $project->link_project;?>"><?php echo $project->link_project;?></a>
    <p style="font-size: 10px"><?php echo $project->publisher;?></p>
    <a href="<?php echo base_url();?>index.php/user/linkEditData/<?php echo $project->id_project; ?>"><span class="glyphicon glyphicon-edit"></span> EDIT </a>
    <a href="<?php echo base_url();?>index.php/user/deleteproject/<?php echo $project->id_project; ?>"> <span class="glyphicon-remove"></span> DELETE</a>
    
  </div>
</div>
</center>


    <?php
  }
  ?>

  



  </div>

</body>


