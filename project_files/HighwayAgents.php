<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die('database is not created'.mysqli_error());
	}
	$sql="CREATE DATABASE highway";
	if(mysqli_query($con,$sql))
	{
		echo "database created successfully";
	}
	else
	{
		echo "error in creating database ".mysqli_connect_error();
	}
	mysqli_close($con);
?>
