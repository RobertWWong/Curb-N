<!DOCTYPE html>
<html>

<head>
  <title>Curb'N Ridesharing</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

  <div class = "header">
    <h1>CURB'N</h1>
      <div class = "caption">
        <h2><em>Experience Life Together</em></h2>
      </div>
  </div>

<body>
  <div class = "login">
  <h2>Login</h2>
    <form method = "post">
      <input type = "email" placeholder = ".edu email" pattern = "^[\s]*[a-zA-Z]+@[a-zA-Z]+\.edu[\s]*$" title = "Must be a valid edu email" name = 'email' required><br/><br/>
      <input type = "password" placeholder = "password" name = 'pass' required><br/><br/>
      <input type = "submit" value = "Login"><br/><br/>
      <a href = "registration.php">New User+</a>
    </form>
  </div> 
</body>

<?php
  if(isset($_POST['email']) and isset($_POST['pass'])){

    if ($_POST['email'] == "" or $_POST['pass'] == ""){
        echo '<script type="text/javascript">alert("Registration Error: Please make sure all fields are filled in");</script>';
    }
    else{
      if (!preg_match("/^[\s]*[a-zA-Z]+@[a-zA-Z]+\.edu[\s]*$/", $_POST['email'])){
        echo '<script type="text/javascript">alert("Email must be a valid .edu email");</script>';
      }
    }

  }?>

</html>