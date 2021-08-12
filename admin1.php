<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","","jobportal");
	//Check connection
	if(mysqli_connect_errno())
	   {
	       echo"Failed to connect to Mysql:".mysqli_connect_error();
   	}
	$res=mysqli_query($con,"SELECT Firstname, Lastname, Email FROM CANDIDATE");
		while($row=mysqli_fetch_array($res)) {
		
			echo"<table border='1' align='center'>
			<tr>
			<th>Firstname</th>"; 
			echo "<td>".$row['Firstname']."</td>
			</tr>";
			
			echo"<tr>
			<th>Lastname</th>"; 
			echo "<td>".$row['Lastname']."</td>
			</tr>"; 

			echo"<tr>
			<th>Email</th>"; 
			echo "<td>".$row['Email']."</td>
			</tr>";
			
			}	
			echo"</table>";
			mysqli_close($con);

?>
</body>
</html>