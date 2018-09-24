<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration-CI Login Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">

  <style type="text/css">
    
      .div-reg{
  padding: 5px;
    height: 800px;
    width: 700px;
    background: #18181b70;
}

  .Judul{
  font-size: 50px;
    color: white;
    font-family: sans-serif;
    text-align: center;
  }

  .sub{
  color: whitesmoke;
    font-size: 20px;
    font-family: monospace;
  }

  .field{
  width: 250px;
    padding: 5px;
    border-color: azure;
    border-radius: 15px;
    margin-top: 40px;
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
  </style>

  </head>
  <body style="background: #1e2865">

<span style="background-color:red;">
  <!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <center><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              
                  <div class="div-reg">

                    <p class="Judul" style="margin-top: 100px;">Register</p>

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                          <fieldset>
                              
                                  <center>
                                  <input class="field" placeholder="Name" name="user_name" type="text" autofocus>
                                  <br>
                                  </center>
                              

                                  <center>
                                  <input class="field" placeholder="E-mail" name="user_email" type="email" autofocus>
                                  <br>
                                  </center>
                              
                                  <center>
                                  <input class="field" placeholder="Password" name="user_password" type="password" value="">
                                  <br>
                                  </center>

                                  <center>
                                  <input class="field" placeholder="Age" name="user_age" type="number" value="">
                                  <br>
                                  </center>

                                  <center>
                                  <input class="field" placeholder="Mobile No" name="user_mobile" type="number" value="">
                                  <br>
                                  </center>

                              <center><input class="button" type="submit" value="Register" name="register" ></center>   

                          </fieldset>
                      </form>
                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login here</a></center><!--for centered text-->
                  </div>
                  </center>
              </div>
          
      </div>






</span>




  </body>
</html>
