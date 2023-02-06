<?php
$con=mysqli_connect("localhost","root","","highway");
if(isset($_POST['butt']))
{
	session_start();
	$contrator_aadhar_id=mysqli_real_escape_string($con,$_POST['con_id']);
	$contractor_name=mysqli_real_escape_string($con,$_POST['con_name']);
	$contractor_email_id=mysqli_real_escape_string($con,$_POST['con_email']);
	$contractor_pass=mysqli_real_escape_string($con,$_POST['con_pass']);
	$contractor_phone=mysqli_real_escape_string($con,$_POST['con_ph_no']);
	$contractor_town=mysqli_real_escape_string($con,$_POST['con_town']);
	$contractor_city=mysqli_real_escape_string($con,$_POST['con_city']);
	$contractor_district=mysqli_real_escape_string($con,$_POST['con_dist']);
	$contractor_state=mysqli_real_escape_string($con,$_POST['con_state']);
$sql="INSERT INTO contractorreg(contractor_aadhar_id,contractor_name,contractor_email_id,contractor_pass,contractor_phone,contractor_town,contractor_city,contractor_district,contractor_state)VALUES
('$_POST[con_id]','$_POST[con_name]','$_POST[con_email]','$_POST[con_pass]','$_POST[con_ph_no]','$_POST[con_town]','$_POST[con_city]','$_POST[con_dist]','$_POST[con_state]')";
if(mysqli_query($con,$sql)){
	echo "you are registered successfully";
	header("Refresh:5;contractorlogin.php");
}
else
{
	echo "you are not registered with required fields";
}
}
mysqli_close($con);

?>
<html>
<head>
	<title>AGENCY REGISTRATION FORM</title>
	<link rel="stylesheet" href="styleconreg.css" type="text/css">
	</head>
	<body>
		<div class="simple-form">
			<form id="REGISTRATION" action="contractorreg.php" method="POST">
				<input type="text" name="con_id" id="button" placeholder="enter u r aadharid"><br><br>
				<input type="text" name="con_name" id="button" placeholder="enter contractor name"><br><br>
				<input type="email" name="con_email" id="button" placeholder="enter u r emailid"><br><br>
				<input type="password" name="con_pass" id="button" placeholder="enter the password"><br><br>
				<select id="phn"><option>+91</option><option>+92</option><option>+93</option><option>+94</option><option>+95</option></select>
				<input type="text" name="con_ph_no" id="phone" placeholder="enter u r phoneno"><br><br>
				<input type="text" name="con_town" id="button" placeholder="enter u r contractor town"><br><br>	
				<input type="text" name="con_city" id="button" placeholder="enter u r contractor city"><br><br>	
				<input type="text" name="con_dist" id="button" placeholder="enter u r contractor district"><br><br>
				<input type="text" name="con_state" id="button" placeholder="enter u r contractor state"><br><br>	
				<input type="submit" value="register" id="butt" name="butt">
			</form>
		</div>
	</body>
</html>