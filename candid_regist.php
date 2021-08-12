<?php
	$con=mysqli_connect("localhost","root","","jobportal"); 	//Check connection
	if(mysqli_connect_errno())
	{
		echo"Failed to connect to MySQL: ".mysqli_connect_error();
	}

	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$pwd=$_POST['pwd'];
	$numb=$_POST['num'];

$sql="INSERT INTO CANDIDATE(FIRSTNAME,LASTNAME,AGE,EMAIL,PASSWORD,CONTACT) VALUES('$fn','$ln','$age','$email','$pwd','$numb')";
	
	if(mysqli_query($con,$sql)==false)
	{
		die('Error:'.mysqli_connect_error($con));
	}
	header('Location:loginform.html');	
	mysqli_close($con);
?>