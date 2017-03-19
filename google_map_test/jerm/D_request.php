<!DOCTYPE html>
<html>
	<link rel = "stylesheet" href = "D_request.css" type = "text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <title>Driver Request</title>
</head>

<body>
    <h1>Driving Request</h1>
    <h3><u>Directions:</u></h3>
    <div id="right-panel"></div>
    <div id="map"></div>
    <form action = main.php><br/>
    <div class="form-group">
      <label>Start Address:</label>
      <input type="text" class="form-control" id = "start" placeholder = "Starting Location" required>
    </div>
    <div class="form-group">
      <label>Destination:</label>
      <input type="text" class="form-control" id = "end" placeholder = "Ending Destination" required>
    </div><br/>
    <div class = "wrapper">
      <input type = "button" value = "Map Preview">
    </div>
    <h3><u>Seats:</u></h3>
    <p class = "amount">
      Number of Seats Open:&nbsp<input class = "seats" type = "number" min = 1 max = 9 required>
    </p>
    <div class = "wrapper">
      <input type = "submit" value = "Submit">
    </div>
  </form>
</body>

    <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var onChangeHandler = function() {
           calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var end = document.getElementById('end').value;
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeBlgj7SUOs6HcWIFuMZi33lL3dZNS6JU&callback=initMap">
    </script>
</html>