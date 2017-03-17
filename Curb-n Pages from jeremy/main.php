<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="main.css">

<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Profile</a>
  <a href="#">History</a>
  <a href="#">Itinerary</a>
</div>

<span style="font-size:30px;cursor:pointer;color: white;" onclick="openNav()">&#9776; Open Menu</span>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 

