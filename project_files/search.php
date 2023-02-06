<?php
$link=mysqli_connect("localhost","root","","highway");
if($link===false)
{
	die("ERROR:couldnot connect.".mysqli_connect_error());
}
$sql="SELECT * from	agencyreg WHERE ag_town = '$_GET[search]'";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		echo "<html>";
		echo "<center><head>AGENCIES IN YOUR LOCATION
		</head></center>";
		echo "<body style=background:url(2.jpg);background-size:100%></body>";
		echo "</html>";
	
	echo "<table border=1 align=center >";
	echo "<center>";
	echo "<tr>";
		echo "<th>Agencyname</th>";
		echo "<th>Agencyphoneno</th>";
		echo "<th>Agencyemail</th>";
		echo "<th>Agencystate</th>";
		echo "<th>Agencydist</th>";
		echo "<th>Agencytown</th>";
		echo "<th>Agencyarea</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
			echo "<td>".$row['agency_name']."</td>";
			echo "<td>".$row['agency_ph_no']."</td>";
			echo "<td>".$row['agency_email']."</td>";
			echo "<td>".$row['agency_state']."</td>";
			echo "<td>".$row['ag_dist']."</td>";
			echo "<td>".$row['ag_town']."</td>";
			echo "<td>".$row['ag_area']."</td>";
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


		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
