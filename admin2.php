
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
	$res=mysqli_query($con,"SELECT COMPANYNAME, EMAIL, CONTACT FROM COMPANY");
		while($row=mysqli_fetch_array($res)) {
		
			echo"<table border='1' align='center'>
			<tr>
			<th>COMPANYNAME</th>"; 
			echo "<td>".$row['COMPANYNAME']."</td>
			</tr>";
			
			echo"<tr>
			<th>EMAIL</th>"; 
			echo "<td>".$row['EMAIL']."</td>
			</tr>"; 

			echo"<tr>
			<th>CONTACT</th>"; 
			echo "<td>".$row['CONTACT']."</td>
			</tr>";
			
			}	
			echo"</table>";
			mysqli_close($con);

?>
</body>
</html>