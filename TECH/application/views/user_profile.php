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
    margin-left: 200px; /* Same as the width of the sidenav */
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
    width: 600px;
    height: 700px;
    border-radius: 50px;
    margin-top: 20px;
}

.chatFrame{
    height: 450px;
    width: 500px;
    border-radius: 20px;
}

.message{
      height: 450px;
    width: 500px;
    border-radius: 20px;
}

.putChat{
      
    border-radius: 100px;
    background-color: aquamarine;
    border-color: seashell;
}

.divSubmit{
    margin-left: 500px;
    background: aliceblue;
    padding: 10px;
    width: 600px;
    border-radius: 20px;
}

.divBsd{
  background-image: linear-gradient(to bottom right, #ffffff, #3619d8);
  height: 550px;
}

.icon{

  width: 30px;
  height: 50px;

}

.navBar{

    height: 80px;
    background-image: linear-gradient(to right, #fefeff, #9b8cec);

}

.bt{
    height: 200px;
    width: 200px;
    border-radius: 800px;
    background: #5940de;
    color: white;
    margin-left: 350px;
    border-top-left-radius: 800px;
    text-shadow: aquamarine;
    border-color: #533add;
    font-family: monospace;
}

.btMenu{

  background-color: dodgerblue;
    margin-left: 20px;
    padding: 10px;
    border-radius: 5px;
    color: white;
    font-family: monospace;

}

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}


.phone{
      height: 400px;
    background-image: linear-gradient(to right, #9889eb, #381bd8);
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.acc{
  margin-left: 5px;
  color: #4429db;
  font-family: fantasy;
}

.marginNav{
  margin-left: 10px;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

}




</style>

  </head>
  <body>

<!--     <div class="sidenav">
  <a href="" class="logo">VroZect</a>
  <hr>
  <p class="titlle">ACCOUNT</p>
  <p class="subTitlle">Email : <?php //echo $this->session->userdata('user_email'); ?></p>
  <p class="titlle">YOUR DATA</p>
  <p class="subTitlle">Name  : <?php //echo $this->session->userdata('user_name'); ?></p>
  <p class="subTitlle">Age   : <?php //echo $this->session->userdata('user_age'); ?></p>
  <p class="titlle">CONTACT</p>
  <p class="subTitlle">No.Hp : <?php //echo $this->session->userdata('user_mobile'); ?></p>
  <a href="<?php // echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
  
</div> -->
<div class="navBar">
  <td><div style="margin-left: 10px;" class="dropdown">
  <td><p> Your Account : <?php echo $this->session->userdata('user_email'); ?></p></td>
  <div class="dropdown-content" style="">
        <p> Name  : <?php echo $this->session->userdata('user_name'); ?></p>
        <p> Email : <?php echo $this->session->userdata('user_email'); ?></p>
        <p> Phone : <?php echo $this->session->userdata('user_mobile'); ?></p>
        <a href="<?php  echo base_url('user/user_logout');?>" > <button type="button" class="btn-primary">Logout</button></a>
  </div>
</div></td>
  <td><img style="width: 45px; height: 70px;  margin-top: 5px; margin-left: 400px" src="<?php echo base_url();?>assets/fix.png"></td>
  <td><button style="border-radius: 10px; margin-left: 500px; height: 30px; color: white;" class="dropbtn"><a style="color: white;" href="<?php echo base_url('user/linkTambah'); ?>">Upload</a></button></td>
    <td><button style="border-radius: 10px; margin-left: 10px; height: 30px; color: white;" class="dropbtn"><a style="color: white;" href="<?php echo base_url('user/chatV'); ?>">Chat</a></button></td>
  


</div>

<div class="divBsd">
<td class="logo">
  
</td> 
  <td><img style="    width: 700px;
    height: 450px;
    margin-top: 25px;
    margin-left: 320px;" src="<?php echo base_url();?>assets/aft.png"></td>
</div>





<div class="phone">
  
  <div>
    <table>
    <td><img style="margin-left: 250px; width: 700px; height: 350px;" src="<?php echo base_url();?>assets/fixy.png"></img>
    </table>
  </div>
    
</div>

<div style="height: 30px">

  <hr style="height: 5px">
  

</div>

<div style="background-image: linear-gradient(to bottom right, #806de6, #391cd8);">
  <table>
<td><iframe style="margin-left: 10px; margin-top: 5px;" class="chatFrame" src="<?php echo base_url('user/chatV'); ?>"></iframe></td>
<td><button class="bt"><a style="font-family: monospace; color: white;" href="<?php echo base_url('user/chatV'); ?>">JOIN</a></button></td>  
  </table>

</div>

<div style="background-image: linear-gradient(to bottom right, #806de6, #391cd8);">
<table>
<tr>
<td><span style="font-family: monospace; color: white;font-size: 40px; color: white; margin-left: 50px;">Find Some Project</span></td>  
<td><iframe style="margin-top: 10px; margin-left: 360px; margin-bottom: 10px" class="chatFrame" src="<?php echo base_url('user/dataP');?>"></iframe></td></tr></table>
</div>
</div>

<div style="background-color: #443939; height: 100px">
  
<p style="text-align: center; color: white; font-size: 10px;"> Fal'S Template © - 2018</p>

</div>
  </body>
</html>
