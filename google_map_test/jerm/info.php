<!DOCTYPE html>
<html>
<title>Set Up</title>
<link rel = "stylesheet" type = "text/css" href = "info.css">
<style>
body{
  padding: 0;
  margin: 0;
}

.pic1{
  background-image: url(http://cdn1.travelwithamate.com/wp-content/uploads/2015/08/ROAD-TRIP.jpg);
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 900px;
}

h1{
  margin: 0;
  padding-top: 60px;
  padding-left: 239px;
  font-size: 78px;
  color: rgba(128, 187, 255, .60);
  text-shadow: 2px 2px #000000;
}

.message{
  margin: 0;
  padding-top: 185px;
  padding-left: 575px;
  text-align: center;
  font-size: 40px;
  color: rgba(255,255,255,.95);
}

.mbox{
  padding-top: 27px;
  width: 240px;
  height: 80px;
  background-color: rgba(77, 77, 77, .55);
  border-color: white;
  text-align: center;
}

.scroll{
  height: 400px;
  background-color: rgb(179, 215, 255);
  font-size: 36px
}

.scroll h1{
  font-size: 48px;
  color: black;
  padding-left: 490px;
}

.scroll p{
  padding-left: 20px;
}

.pic2{
  background-image: url(http://d2fzf9bbqh0om5.cloudfront.net/images/5388/original/make_your_road_trip_an_epic_adventure.jpg?1431399237);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 700px;
}

.box{
  margin: 0;
  background-color: rgb(179, 215, 255);
  height: 1620px;
}

.box h2{
  margin: 0;
  text-align: center;
  font-size: 30px;
}

.box h3{
  width: 35%;
  color: #ff6600;
  text-shadow: 2px 2px #000000;
  font-size: 26px;
  padding-left: 30px;
  background-color: #003399;
  box-shadow: 2px 2px #000000;
}

.line1{
  font-size: 26px;
  padding-left: 20px;
}

.line1 input[type = "text"]{
  padding-left: 15px;
  font-size: 26px;
  height: 30px;
  width: 550px;
  border-radius: 5px;
  border-color: #999999;
}

.line2{
  font-size: 26px;
  padding-left: 20px;
}

.zip{
  padding-left: 15px;
  font-size: 26px;
  height: 30px;
  width: 393px;
  border-radius: 5px;
  border-color: #999999;
}

.phone{
  padding-left: 15px;
  font-size: 26px;
  height: 30px;
  width: 550px;
  border-radius: 5px;
  border-color: #999999;
}

.lastline{
  padding-left: 680px;
}

.lastline button[type = "submit"]{
  cursor: pointer;
  width: 75px;
  height: 30px;
  background-color: #b3b3b3;
}

.questionaire{
  font-size: 27px;
  text-align: center;
}

.types{
   column-count: 2;
   font-size: 22px;
   padding-left: 260px;
}

input[type="checkbox"] {
  transform:scale(1.2, 1.2);
  width: 35px;
}

.topics{
  column-count: 2;
  font-size: 22px;
  padding-left: 260px;
}
</style>

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
    <form method = "post" action = main.php>
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
        <h3>Questionaire</h3>
        <p class = "questionaire"><strong>What <u>TYPES</u> of Events Do You Like To Attend? <em>(Select All That Apply)</em></strong></h4>
        <div class = "types">
          <input type="checkbox" name="type" value="Appearance or Signing">Appearance or Signing<br><br>
          <input type="checkbox" name="type" value="Attraction">Attraction<br><br>
          <input type="checkbox" name="type" value="Camp, Trip, or Retreat">Camp, Trip, or Retreat<br><br>
          <input type="checkbox" name="type" value="Class, Training, or Workshop">Class, Training, or Workshop<br><br>
          <input type="checkbox" name="type" value="Concert or Performance">Concert or Performance<br><br>
          <input type="checkbox" name="type" value="Conference">Conference<br><br>
          <input type="checkbox" name="type" value="Convention">Convention<br><br>
          <input type="checkbox" name="type" value="Dinner or Gala">Dinner or Gala<br><br>
          <input type="checkbox" name="type" value="Festival or Fair">Festival or Fair<br><br>
          <input type="checkbox" name="type" value="Game or Competition">Game or Competition<br><br>
          <input type="checkbox" name="type" value="Meeting or Networking Event">Meeting or Networking Event<br><br>
          <input type="checkbox" name="type" value="Other">Other<br><br>
          <input type="checkbox" name="type" value="Party or Social Gathering">Party or Social Gathering<br><br>
          <input type="checkbox" name="type" value="Race or Endurance Event">Race or Endurance Event<br><br>
          <input type="checkbox" name="type" value="Rally">Rally<br><br>
          <input type="checkbox" name="type" value="Screening">Screening<br><br>
          <input type="checkbox" name="type" value="Seminar or Talk">Seminar or Talk<br><br>
          <input type="checkbox" name="type" value="Tour">Tour<br><br>
          <input type="checkbox" name="type" value="Tournament">Tournament<br><br>
          <input type="checkbox" name="type" value="Tradeshow, Consumer Show, or Expo">Tradeshow, Consumer Show, or Expo<br><br>
        </div><br><br>
        <p class = "questionaire"><strong>What Are the <u>TOPICS</u> of the Events You Like To Attend? <em>(Select All That Apply)</em></strong></h4>
        <div class = "topics">
          <input type="checkbox" name="topics" value="Auto, Boat & Air">Auto, Boat & Air<br><br>
          <input type="checkbox" name="topics" value="Business & Professional">Business & Professional<br><br>
          <input type="checkbox" name="topics" value="Charity & Causes">Charity & Causes<br><br>
          <input type="checkbox" name="topics" value="Community & Culture">Community & Culture<br><br>
          <input type="checkbox" name="topics" value="Family & Education">Family & Education<br><br>
          <input type="checkbox" name="topics" value="Fashion & Beauty">Fashion & Beauty<br><br>
          <input type="checkbox" name="topics" value="Film, Media, & Entertainment">Film, Media, & Entertainment<br><br>
          <input type="checkbox" name="topics" value="Food & Drink">Food & Drink<br><br>
          <input type="checkbox" name="topics" value="Government & Politics">Government & Politics<br><br>
          <input type="checkbox" name="topics" value="Health & Wellness">Health & Wellness<br><br>
          <input type="checkbox" name="topics" value="Hobbies & Special Interest">Hobbies & Special Interest<br><br>
          <input type="checkbox" name="topics" value="Home & Lifestyle">Home & Lifestyle<br><br>
          <input type="checkbox" name="topics" value="Music">Music<br><br>
          <input type="checkbox" name="topics" value="Other">Other<br><br>
          <input type="checkbox" name="topics" value="Performing & Visual Arts">Performing & Visual Arts<br><br>
          <input type="checkbox" name="topics" value="Religion & Spirituality">Religion & Spiritualityg<br><br>
          <input type="checkbox" name="topics" value="Science & Technology">Science & Technology<br><br>
          <input type="checkbox" name="topics" value="Seasonal & Holiday">Seasonal & Holiday<br><br>
          <input type="checkbox" name="topics" value="Sports & Fitness">Sports & Fitness<br><br>
          <input type="checkbox" name="topics" value="Travel & Outdoor">Travel & Outdoor<br><br>
        </div><br>
        <p class = "lastline">
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
