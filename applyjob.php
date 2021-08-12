<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
</style>
<body>
<?php
	$con=mysqli_connect("localhost","root","","JOBPORTAL");
	//Check connection
	session_start();
	if(mysqli_connect_errno())
	{
		echo"Failed to connect to MySQL: ".mysqli_connect_error();
	}
	$name=$_SESSION['un'];
	$email=$_SESSION['eid'];
	$comm=$_GET['com'];
	if ($name=$_SESSION['un']) {
		
	
	$sql="INSERT INTO applyjob(COMPANYNAME,CANDIDATE,EMAIL) VALUES('$comm','$name','$email')";
	if(mysqli_query($con,$sql)==false)
	{
		die('Error:'.mysqli_connect_error($con));
	}
	}

	else
		header('Location:http://localhost/CANDIDATE/loginform.html');
	mysqli_close($con);
?>
	<main>
		<section>
			<p>Thank you for applying!!</p>
			<p>Send your CV to example@example@gmail.com</p>		
		</section>
	</main>
</body>
</html>