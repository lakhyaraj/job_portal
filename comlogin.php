<html>
<body>
<?php
	$eid=$_POST['eid'];
	$pwd=$_POST['pwd'];
	$con=mysqli_connect("localhost","root","","jobportal");	//Check connection

if(mysqli_connect_errno($con))
{
	echo"Failed to connect to MySQl: ".mysqli_connect_error($con);
}


$res=mysqli_query($con,"SELECT COMPANYNAME FROM COMPANY where EMAIL='$eid' and PASSWORD='$pwd'");

if($row = mysqli_fetch_array($res))
{
	session_start();
	$_SESSION['eid']=$eid;
	$_SESSION['un']=$row['COMPANYNAME'];
	header('Location:http://localhost/EMPLOYER/employer_splitscreen.html');
}
else
	echo"Invalid id/pwd";
?>
</body>
</html>