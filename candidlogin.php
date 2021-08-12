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

$res=mysqli_query($con,"SELECT FIRSTNAME FROM CANDIDATE where EMAIL='$eid' and PASSWORD='$pwd'");

if($row = mysqli_fetch_array($res))
{
	session_start();
	$_SESSION['eid']=$eid;
	$_SESSION['un']=$row['FIRSTNAME'];
	header('Location:http://localhost/CANDIDATE/candidatemain.html');
}
else
	echo"Invalid id/pwd";
?>
</body>
</html>