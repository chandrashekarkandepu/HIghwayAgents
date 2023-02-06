<?php
	session_start();
	if(isset($_SESSION['user'])!="")
	{
		header("Location:index.php");
	}
	
$con=mysqli_connect("localhost","root","","highway");
if(isset($_POST['butt']))
{
	$ag_aadhar_id=mysqli_real_escape_string($con,$_POST['ag_id']);
	$agency_name=mysqli_real_escape_string($con,$_POST['ag_name']);
	$agency_password=mysqli_real_escape_string($con,$_POST['ag_pass']);
	$agency_ph_no=mysqli_real_escape_string($con,$_POST['ag_ph_no']);
	$agency_email=mysqli_real_escape_string($con,$_POST['ag_email']);
	$agency_state=mysqli_real_escape_string($con,$_POST['ag_state']);
	$ag_dist=mysqli_real_escape_string($con,$_POST['ag_dist']);
	$ag_town=mysqli_real_escape_string($con,$_POST['ag_town']);
	$ag_area=mysqli_real_escape_string($con,$_POST['ag_area']);
$sql="INSERT INTO agencyreg(ag_aadhar_id,agency_name,agency_password,agency_ph_no,agency_email,agency_state,ag_dist,ag_town,ag_area)VALUES('$ag_aadhar_id','$agency_name','$agency_password','$agency_ph_no','$agency_email','$agency_state','$ag_dist','$ag_town','$ag_area')";
if(mysqli_query($con,$sql)){
	echo "you are registered successfully";
	header("Refresh:5;agencylogin.php");
}
else

	echo "you are not registered with required fields";
}
	mysqli_close($con);

?>
<html>
<head>
	<title>AGENCY REGISTRATION FORM</title>
	<link rel="stylesheet" href="stylereg.css" type="text/css">
	</head>
	<body>
		<div class="simple-form">
			<form id="REGISTRATION" action="agencyregistration.php" method="POST">
				<input type="text" name="ag_id" id="button" placeholder="enter u r aadharid"><br><br>
				<input type="text" name="ag_name" id="button" placeholder="enter u r agency name"><br><br>
				<input type="password" name="ag_pass" id="button" placeholder="enter the password"><br><br>
				<select id="phn"><option>+91</option><option>+92</option><option>+93</option><option>+94</option><option>+95</option></select>
				<input type="text" name="ag_ph_no" id="phone" placeholder="enter u r phoneno"><br><br>
				<input type="email" name="ag_email" id="button" placeholder="enter u r emailid"><br><br>
				<input type="text" name="ag_state" id="button" placeholder="enter u r agencystate"><br><br>
				<input type="text" name="ag_dist" id="button" placeholder="enter u r agencydistrict"><br><br>
				<input type="text" name="ag_town" id="button" placeholder="enter u r agencytown"><br><br>
				<input type="text" name="ag_area" id="button" placeholder="enter u r agencyarea"><br><br>
				<input type="submit" value="register" id="butt" name="butt">
			</form>
		</div>
	</body>
</html>