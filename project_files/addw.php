<html>
<head>
	<title>AGENCY WORKER FORM</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="loginbox"> 
	<img src="avatar.png" class="avatar">
	<h1>ADD WORKER</h1>
	<form action="agencyaddworker.php" method="POST">
		<p>Aadhar id</p>
		<input type="text" name="worker_aadhar_id" placeholder=" enter aadhar id of the worker">
		<p>Agency name</p>
		<input type="text" name="agency_name" placeholder="enter the agency name">
		<P>Worker name</p>
		<input type="text" name="worker_name" placeholder="enter the worker name">
		<p>worker phone no</p>
		<input type="text" name="worker_phone_no" placeholder="enter the worker phone no">
		<p>Category</p>
		<select name="category"><option>cement</option><option>plumber</option><option>electrician</option><option>concrete</option><option>thar</option><option>machine</option></select>
		<p>Work status</p>
		<select name="status"><option>yes</option><option>no</p></select>
		<input type="submit" name="submit" value="ADD WORKER"> <br>
		<a href="welcome.php"><-goto home</a>
		
</div>
	</form>

</body>
</html> 