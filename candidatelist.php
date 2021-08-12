<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
	<link rel="stylesheet" href="homepageindex.css">
</head>
<style type="text/css">
	
	body{
		background-color: #3E503C;
		margin: 0px;
	}
</style>
<body>
	<header>
	<div class='topheader'>
        <p style="color: white; font-size:36px;" > <b> &nbsp;&nbsp;&nbsp;<span id="top">CAREER.com</span> </b>	
        				 
            			<div class="dropdown">
    					<a class="dropbtn" href='http://localhost/EMPLOYER/employer_splitscreen.html'>HOME</a>	 
				</div>
				<div class="dropdown">
 				    <a class="dropbtn" href='employer_logout.php'>Logout</a>
				</div>    
				
    </p><br><br><br><br>
</div>
</header>
<main>
<?php
	session_start();
	$con=mysqli_connect("localhost","root","","JOBPORTAL");
	//Check connection
	if(mysqli_connect_errno())
	{
		echo"Failed to connect to MySQL: ".mysqli_connect_error();
	}

	$qual=$_SESSION['un'];
	$res=mysqli_query($con,"SELECT * FROM applyjob where COMPANYNAME='$qual'");

	if ($row = mysqli_fetch_array($res)) {

				echo "<center>";
				echo"<table class='tables' style='background-color: #FCF7EF;' border=1 >";
					echo"<tr>";
						echo"<td style='padding: 16px;'>";
							echo"<font size=6> ".$row['CANDIDATE']."</font><br><br>";
							echo"<font size=5><b> EMAIL_ID: ". $row['EMAIL']."</b></font><br>";						
						echo"</td>";
					echo "</tr><br>";
				echo "</table>";
				echo "</center>";	
		while (mysqli_fetch_array($res)) {
		echo "<center>";
				echo"<table class='tables' style='background-color: #FCF7EF;' border=1 >";
					echo"<tr>";
						echo"<td style='padding: 16px;'>";
							echo"<font size=6>".$row['CANDIDATE']."</font><br><br>";
							echo"<font size=5><b> EMAIL_ID". $row['EMAIL']."</b></font><br>";						
						echo"</td>";
					echo "</tr><br>";
				echo "</table>";
				echo "</center>";
		}		

	}
	else
	{ 
		echo "<h1>No Information</h1"; 
	}
?>
<br><br>
</main>
<footer class="footer">
        <!-- contact -->
        <div class="contact">
            <h2>Contact Us:</h2>
            <p>Email : abss@gmail.com<br>
                GIET University,Gunupur</p>
            <h3>Team ABSS</h3>
        </div>
</footer>
</body>
</html>