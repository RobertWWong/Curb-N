<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="registration.css">
<title>CURB'N Registration</title>
  <body>
    <h1>Registration</h1>
  <div class = "window">

    <form method = "post">

      <p class = "head"><strong>New User:</strong></p>
      <p class = "email">
      	Email: <input type = "text" placeholder = ".edu email" pattern = "^[\s]*[a-zA-Z]+@[a-zA-Z]+\.edu[\s]*$" title = "Must be a valid edu email"  name = "email" required><br/><br/>
      </p>
      <p class = "pass">
      	Password: <input type = "password" placeholder = "password" name = "pass" required><br/><br/>
      </p>
      <p class = "vpass">
      	Verify Password: <input type = "password" placeholder = "verification" name = "vpass" required><br/><br/>
      </p>

      <p>
      	<button class = "cancel" type = "button" onclick="window.location='login.php';">Cancel</button>
      	<button class = "reset"  type = "reset" value = "Reset">Reset</button>
      	<button class = "next"   type = "submit" value = "Next">Next</button>
      </p>
    </form>
  </div>
</body>

  <?php
    if (isset($_POST['email']) and isset($_POST["pass"])){

      if ($_POST['email'] == "" or $_POST["pass"] == ""){
          echo '<script type="text/javascript">alert("Registration Error: Please make sure all fields are filled in");</script>';
      }
      else if ($_POST["pass"] != $_POST["vpass"]){
          echo '<script type="text/javascript">alert("Passwords do not match, try again");</script>';
      }
      else{
        if (!preg_match("/^[\s]*[a-zA-Z]+@[a-zA-Z]+\.edu[\s]*$/",$_POST['email'])){
          echo '<script type="text/javascript">alert("Email must be a vaild .edu email");</script>';
        }
      }
      
  }?>
</html>