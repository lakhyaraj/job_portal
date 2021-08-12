<?php
	session_start();
	$con=mysqli_connect("localhost","root","","jobportal");
	//Check connection
	if(mysqli_connect_errno())
	   {
	       echo"Failed to connect to Mysql:".mysqli_connect_error();
   	}

   	$email=$_SESSION['eid'];
   	$fn=$_GET['fn'];
   	$ln=$_GET['ln'];
   	$age=$_GET['age'];
   	$cont=$_GET['cont'];

   	$sql="UPDATE CANDIDATE SET Firstname='$fn', Lastname='$ln', Age='$age', Contact='$cont' WHERE EMAIL='$email'";
   	if(mysqli_query($con,$sql)==false)
	{
		die('Error:'.mysqli_connect_error($con));
	}
	header('Location:showdetails.php');

?>