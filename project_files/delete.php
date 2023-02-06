<?php
$con=mysqli_connect("localhost","root","","highway");
$sql="DELETE FROM agencyaddworker WHERE worker_aadhar_id='$_GET[id]'";
if(mysqli_query($con,$sql))
	header("refresh:1;url=deleteworker.php");
else
	echo "not deleted";
?>