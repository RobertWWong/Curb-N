<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="info.css">
<title>Set Up</title>

<body>
  <div class = "pic1">
    <h1><em>Where does the road take you?</em></h1>
    <div class = "message">
      <div class = "mbox">Scroll Down</div>
    </div>
  </div>
  <div class = "scroll">
    <h1>Welcome to Curb'N</h1>
    <p><em><br/>
      Your very own event planning, ridesharing, experiencing making service! Create an account and start making your
      very own experiences today!
    </em></p>
  </div>
  <div class = "pic2"></div>
    <form method = "post">
      <div class = "box">
        <h2>Setting Up Profile</h2>
        <h3>Information</h3>
        <p class = "line1">
          Name: <input type = "text" placeholder = "First Name" name = fname required>
          Last: <input type = "text" placeholder = "Last Name" name = lname required>
        </p>
        <p class = "line2">
          ZIP code: <input type = "text" placeholder = "XXXXX" pattern = "^[0-9]{5}$" title = "Must contain a valid zipcode" name = "zip" class = "zip" required> 
          *Phone Number: <input type = "text" placeholder = "XXXXXXXXXX" pattern = "^[0-9]{10}$" name = phone class = "phone"><br/>
        </p>
        <p class = "line3">
          <button type = "submit" value = "Submit"><strong>Submit</strong></button>
        </p>
      </div>
    </form>
</body>

<?php
if (isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['fname'])){
  if ($_POST['fname'] == '' or $_POST['lname'] == '' or $_POST['zip'] == '')
    echo '<script type="text/javascript">alert("Registration Error: Please make sure all fields are filled in");</script>';

  else if (!preg_match("/^[0-9]{5}$/",$_POST['zip']))
    echo '<script type="text/javascript">alert("Must be a valid US zip code");</script>';
  
  else if (strlen($_POST['phone']) != 0){
    if (!preg_match("/^[0-9]{10}$/",$_POST['phone']))
      echo '<script type="text/javascript">alert("Must be a valid US phone number");</script>';
  }

}?>

</html>
