
<!DOCTYPE html>
<html>
<head>
	<title>workers of your agencies</title>
	<link rel="stylesheet" type="text/css" href="stylewelcomeagency.css">
	 <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>From Info Windows to a Database: Saving User-Added Form Data</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
	
</head>
<body>
	<header>
		<nav>
			<h1>ADD WORKERS OF AGENCIES</h1>
			<ul id="nav">
				<li><a class="homered" href="addw.php">ADD WORKERS</a></li>
				<li><a class="homeblack" href="deleteworker.php">DELETE WORKERS</a></li>
				<li><a class="homeblack" href="agencyupdate.php">UPDATE WORKERS</a></li>
				<li><a class="homeblack" href="mapping.html">ADD ADDRESS OF AGENCY</li>
				<li><a class="homeblack" href="agencylogin.php">LOGOUT</li>
			</ul>
		</nav>
		</header>
		<div class="slider">
			<div class="load">
			</div>
			<div class="content">
				<div class="PRINCIPAL">
				<h1>www.highwaysgents.com</h1>
				<p>HIGHWAY AGENTS
				</p>
				<a href="#map">ADD YOUR AGENCY LOCATION</a>
			</div>
			</div>
		</div>
		<div id="map" height="1000px" width="100%"></div>
    <div id="form">
      <table>
      <tr><td>Name:</td> <td><input type='text' id='name'/> </td> </tr>
      <tr><td>Address:</td> <td><input type='text' id='address'/> </td> </tr>
      <tr><td>Type:</td> <td><select id='type'> +
                 <option value='bar' SELECTED>bar</option>
                 <option value='restaurant'>restaurant</option>
                 </select> </td></tr>
                 <tr><td></td><td><input type='button' value='Save' onclick='saveData()' name='save'/></td></tr>
      </table>
    </div>
    <div id="message">Location saved</div>
    <script>
      var map;
      var marker;
      var infowindow;
      var messagewindow;

      function initMap() {
        var chilakaluripet = {lat: 16.089170, lng: 80.167221};
        map = new google.maps.Map(document.getElementById('map'), {
          center: chilakaluripet,
          zoom: 13
        });

        infowindow = new google.maps.InfoWindow({
          content: document.getElementById('form')
        });

        messagewindow = new google.maps.InfoWindow({
          content: document.getElementById('message')
        });

        google.maps.event.addListener(map, 'click', function(event) {
          marker = new google.maps.Marker({
            position: event.latLng,
            map: map
          });


          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
          });
        });
      }

      function saveData() {
        var name = escape(document.getElementById('name').value);
        var address = escape(document.getElementById('address').value);
        var type = document.getElementById('type').value;
        var latlng = marker.getPosition();
        var url = 'phpsqlinfo_addrow.php?name=' + name + '&address=' + address +
                  '&type=' + type + '&lat=' + latlng.lat() + '&lng=' + latlng.lng();

        downloadUrl(url, function(data, responseCode) {

          if (responseCode == 200 && data.length <= 1) {
            infowindow.close();
            messagewindow.open(map, marker);
          }
        });
      }

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request.responseText, request.status);
            callback(request.responseText, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing () {
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwejNrL1MU5V1XxnK4aMc8_2v4Zvp19zg&callback=initMap">
    </script>
</body>
</html>