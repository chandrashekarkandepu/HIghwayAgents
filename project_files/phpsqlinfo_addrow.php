<?php
require("phpsqlajax_dbinfo.php");
	if(isset($_POST['save']))
	{
// Gets data from URL parameters.
$name = $_GET['name'];
$addr = $_GET['addr'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$type = $_GET['type'];

// Opens a connection to a MySQL server.
$connection=mysqli_connect ('localhost', 'root', '','phpmyadmin');
if (!$connection) {
  die('Not connected : ' . mysqli_error());
}

// Inserts new row with place data.
$query = sprintf("INSERT INTO markers " .
         " (id, name, addr, lat, lng, type ) " .
         " VALUES (NULL, '%s', '%s', '%s', '%s', '%s');",
         mysqli_real_escape_string($connection,$_GET['name']),
         mysqli_real_escape_string($connection,$_GET['addr']),
         mysqli_real_escape_string($connection,$_GET['lat']),
         mysqli_real_escape_string($connection,$_GET['lng']),
         mysqli_real_escape_string($connection,$_GET['type']));

$result = mysqli_query($connection,$query);

if (!$result) {
  die('Invalid query: .' . mysqli_connect_error());
}
	}
?>