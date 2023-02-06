<?php
	session_start();
	$con=mysqli_connect("localhost","root","","highway");
	if(isset($_REQUEST["submit"]))
	{
		$con_aadhar_id=$_REQUEST['con_aadhar_id'];
		$con_password=$_REQUEST['con_password'];
		$sql="select * from contractorreg where contractor_aadhar_id='$con_aadhar_id' && contractor_pass='$con_password'";
		$query=mysqli_query($con,$sql);
		$rowcount=mysqli_num_rows($query);
		if($rowcount==true)
		{
			$_SESSION["con_aadhar_id"]=$con_aadhar_id;
			header('location:contractorhome.html');
			header('Refresh:0;index.html');
		}
		else
		{
			echo "aadharid and password donot match";
		}
	}
		?>
		
	
<html>
<head>
	<title>CONTRACTOR LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="styleconlogin.css">
</head>
<body>
	<div class="loginbox"> 
	<img src="avatar.png" class="avatar">
	<h1>Login Here</h1>
	<form action="contractorlogin.php" method="POST">
		<p>Aadhar id</p>
		<input type="text" name="con_aadhar_id" placeholder=" enter aadhar id">
		<p>Password</p>
		<input type="password" name="con_password" placeholder="enter the password">
		<input type="submit" name="submit" value="Login"> <br>
		<a href="#" >Lost the password</a><br>
		<a href="contractorreg.php">Donot have any account</a><br>
		<a href="index.html"><-back to home</a>
</div>
	</form>
</body>
</html>