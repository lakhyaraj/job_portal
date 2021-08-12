<?php
	$con=mysqli_connect("localhost","root","","jobportal"); 	//Check connection
	if(mysqli_connect_errno())
	{
		echo"Failed to connect to MySQL: ".mysqli_connect_error();
	}

	$cn=$_POST['cn'];
	$eid=$_POST['email'];
	$num=$_POST['cont'];
	$pwd=$_POST['pwd'];
	
	$sql="INSERT INTO COMPANY(COMPANYNAME,EMAIL,PASSWORD,CONTACT) VALUES('$cn','$eid','$pwd','$num')";
	
	if(mysqli_query($con,$sql)==false)
	{
		die('Error:'.mysqli_connect_error($con));
	}
	header('Location:http://localhost/EMPLOYER/companylogin.html');	

	mysqli_close($con);
?>