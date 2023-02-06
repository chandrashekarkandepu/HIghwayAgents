<?php
$link=mysqli_connect("localhost","root","","highway");
if($link===false)
{
	die("ERROR:creating database.".mysqli_error());
}
if(isset($_POST['submit']))
{
$sql="INSERT INTO agencyaddworker(worker_aadhar_id,agency_name,worker_name,worker_ph_no,category,status)VALUES
('$_POST[worker_aadhar_id]','$_POST[agency_name]','$_POST[worker_name]','$_POST[worker_phone_no]','$_POST[category]','$_POST[status]')";
if(mysqli_query($link,$sql))
{
	echo "record inserted successfully";
	header('Refresh:5;welcome.php');

}
else
{
	echo "ERROR:error in creting database.".mysqli_connect_error();
}
}
mysqli_close($link);
?>



