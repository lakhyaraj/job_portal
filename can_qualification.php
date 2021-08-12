<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
	<link rel="stylesheet" href="locationcss.css">
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
        	<div class="active">		 
            	<div class="dropdown">
 				    <button class="dropbtn">JOBS</button>
  						<div class="dropdown-content">
    						<a href="can_jobsbylocation.html">JOBS BY LOCATION</a>
    						<a href="can_jobsbyqualification.html">JOBS BY QUALIFICATION</a>	 
  						</div>
				</div>
				
           		<div class="dropdown">
 				    <button class="dropbtn">RECRUITERS</button>
  						<div class="dropdown-content">
    						<a href="can_searchbar.html">SEARCH RECRUITERS</a>
    						<a href="can_jobsbyrecruiter.html">JOBS BASED RECRUITERS</a>	 
  						</div>
				</div>        			

				<div class="dropdown">
 				    <a class="dropbtn" href='showdetails.php'>MY PROFILE</a>
				</div>

				<div class="dropdown">
 				    <a class="dropbtn" href='can_logout.php'>Logout</a>
				</div>    
				
    </p><br><br><br><br>
</div>
</header>
<main>
<?php
	$con=mysqli_connect("localhost","root","","JOBPORTAL");
	//Check connection
	if(mysqli_connect_errno())
	{
		echo"Failed to connect to MySQL: ".mysqli_connect_error();
	}

	$qual=$_GET['link'];
	$res=mysqli_query($con,"SELECT * FROM JOBPOST where QUALIFICATION='$qual'");

	while($row = mysqli_fetch_array($res))
	{
			$com=$row['COMPANY'];
			echo "<center>";
			echo"<table class='tables' style='background-color: #FCF7EF;' border=1 >";
				echo"<tr>";
					echo"<td style='padding: 16px;'>";
						echo"<font size=6>".$row['COMPANY']."</font><br><br>";
						echo"<font size=5><b> JOB TITLE: ". $row['JOBTITLE']."</b></font><br>";
						echo"<font size=4>WORK EXPERIENCE: ". $row['WORKEXP']."years</font><br>";
						echo"<font size=4> LOCATION: ". $row['LOCATION']."</font><br>";
						echo"<font size=4> JOB TYPE: ". $row['JOBTYPE']."</font><br>";
						echo"<font size=4>SALARY: ". $row['INCOMEMIN']."-".$row['INCOMEMAX']."</font><br><br>";
						echo"<form action='applyjob.php' method='get'>";
						echo "<input type='hidden' value='$com' name='com'>";
						echo "<br><button type='submit' class='block' >APPLY</button>";
						echo"</form>";
					echo"</td>";
				echo "</tr><br>";
			echo "</table>";
			echo "</center>";
		/*echo "</div>";*/
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