<?php
$link=mysqli_connect("localhost","root","","highway");
if($link===false)
{
	die("ERROR:couldnot connect.".mysqli_connect_error());
}
$sql="SELECT * from	agencyaddworker WHERE agency_name = '$_GET[agencyname]'";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
	echo "<table border=1 align=center style=vertical-align:bottom>";
	echo "<center>";
	echo "<tr>";
		echo "<th>workeraadharid</th>";
		echo "<th>Agencyname</th>";
		echo "<th>workername</th>";
		echo "<th>workerphoneno</th>";
		echo "<th>category</th>";
		echo "<th>status</th>";
		echo "<th>Action</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
			echo "<td>".$row['worker_aadhar_id']."</td>";
			echo "<td>".$row['agency_name']."</td>";
			echo "<td>".$row['worker_name']."</td>";
			echo "<td>".$row['worker_ph_no']."</td>";
			echo "<td>".$row['category']."</td>";
			echo "<td>".$row['status']."</td>";
			echo "<td> <a href=delete.php?id=".$row['worker_aadhar_id'] .">Delete</a></td>";
					echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($result);
	}
	else
	{
		echo "no records matching your query were found";
		
	}
	
}
else{
	echo "ERROR:could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>
		<html>
		<head>
		<title>WORKERS OF YOUR AGENCY</title>
		<link rel="stylesheet" href="styletable.css" type="text/css">
		</head>
		<body>
		<div class="image">
			
		</div>
		</body>
		</html>