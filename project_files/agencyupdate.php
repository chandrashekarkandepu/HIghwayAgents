<?php
$link=mysqli_connect("localhost","root","","highway");
if($link===false)
{
	die("ERROR:coulld not connect. " .mysqli_connect__error());;
}
if(isset($_POST['submit']))
{
$sql="UPDATE agencyaddworker SET agency_name='$_POST[ag_name]',worker_name='$_POST[worker_name]',worker_ph_no='$_POST[worker_phone]',category='$_POST[category]',status='$_POST[status]' WHERE worker_aadhar_id='$_POST[w_a_id]'";
if(mysqli_query($link,$sql))
{
	echo "records updated successfully";
}
else
{
	echo "ERROR:could not able to execute $sql.".mysqli_error($link);
}
}
mysqli_close($link);
?>
<html>
<head>
	<title>AGENCY WORKER FORM</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="loginbox"> 
	<img src="avatar.png" class="avatar">
	<h1>UPDATE WORKER</h1>
	<form action="agencyupdate.php" method="POST">
		<p>Aadhar id</p>
		<input type="text" name="w_a_id" placeholder=" enter aadhar id of the worker">
		<p>Agency name</p>
		<input type="text" name="ag_name" placeholder="enter the agency name">
		<P>Worker name</p>
		<input type="text" name="worker_name" placeholder="enter the worker name">
		<p>worker phone no</p>
		<input type="text" name="worker_phone" placeholder="enter the worker phone no">
		<p>Category</p>
		<select name="category"><option>cement</option><option>plumber</option><option>electrician</option><option>concrete</option><option>thar</option><option>machine</option></select>
		<p>Work status</p>
		<select name="status"><option>yes</option><option>no</p></select>
		<input type="submit" name="submit" value="UPDATE WORKER"> <br>
		<a href="welcome.php"><-goto home</a>
</div>
	</form>

</body>
</html> 