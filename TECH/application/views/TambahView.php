<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style type="text/css">
  
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 220px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 220px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

.titlle{
    text-align: center;
    color: black;
    padding: 10px;
    background: #ffffff3b;
}

.subTitlle{
  color: white;
  font-family: monospace;
  margin-left: 10px;
}



.detail{

}

.myFrame{
    width: 800px;
    height: 700px;
    border-radius: 50px;
    margin-top: 20px;
}

.frame{
  
    background: #43474a61;
    border-radius: 30px;
    height: 190px;
    width: 350px;
    margin-top: 50px;
}


}


</style>

  </head>
  <body>

    <div class="sidenav">
  <a href="" class="logo">VroZect</a>
  <hr>
  <p class="titlle">ACCOUNT</p>
  <p class="subTitlle">Email : <?php echo $this->session->userdata('user_email'); ?></p>
  <p class="titlle">YOUR DATA</p>
  <p class="subTitlle">Name  : <?php echo $this->session->userdata('user_name'); ?></p>
  <p class="subTitlle">Age   : <?php echo $this->session->userdata('user_age'); ?></p>
  <p class="titlle">CONTACT</p>
  <p class="subTitlle">No.Hp : <?php echo $this->session->userdata('user_mobile'); ?></p>
  <a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
  
</div>

<div class="main">
    <div class="header">
  <div class="header-right">
    <a class="active" href="<?php echo base_url('user/user_profile'); ?>">Home</a>
  </div>
</div>


<h1>TAMBAH DATA</h1>

  <div class="frame">
    <div class="container">
  <form class="form-group" method="POST" action ="<?php echo base_url('user/tambah_data');?>">
      

        <input style="width: 300px; margin-top: 10px;" placeholder="Project'S Name" class="form-control" type="text" name="name_project">
        <input style="width: 300px; margin-top: 10px;" class="form-control" placeholder="Project's Link" type="text" name="link_project">
        <input style="width: 300px; margin-top: 10px;" class="form-control" placeholder="publisher" type="text" name="publisher">
     

      <td><button style="width: 250px;" class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-plus"> TAMBAH</span></button></td>
    
  </form>


</div>
</div>
  </body>
</html>
