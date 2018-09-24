<!DOCTYPE html>
<html">
  <head>
    <meta charset="utf-8">
    <title>Login-CI Login Registration</title>
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



    
    <div class="row">
        <center>
            
                <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>

                <div class="div-reg">
                  <h1 class="Judul" style="margin-top: 230px;">Login</h1> 
                    <form role="form" method="post" action="<?php echo base_url('user/masuk'); ?>">
                        <fieldset>
                          <center>
                            <div class="form-group">
                                <input align="center" class="field" placeholder="E-mail" name="user_email" type="email" autofocus>
                            </div>
                            </center>
                            <center>
                            <div class="form-group">
                                <input align="center" class="field" placeholder="Password" name="user_password" type="password" value="">
                            </div>
                            </center>


                                <center><input style="margin-bottom: 10px;" class="button" type="submit" value="login" name="login" ></center>

                        </fieldset>
                    </form>
                <center><b style="color: white; margin-top: 30px;">Not registered ? </b></b><a href="<?php echo base_url('user'); ?>">Register here</a></center><!--for centered text-->

                </div>
              </center>   
            </div>
        </div>
    </div>



  </body>
</html>
