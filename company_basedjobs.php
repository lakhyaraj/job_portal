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
    						<a href="jobsbylocation.html">JOBS BY LOCATION</a>
    						<a href="jobsbyqualification.html">JOBS BY QUALIFICATION</a>	 
  						</div>
				</div>
           		<div class="dropdown">
 				    <button class="dropbtn">RECRUITERS</button>
  						<div class="dropdown-content">
    						<a href="searchbar.html">SEARCH RECRUITERS</a>
    						<a href="jobsbyrecruiter.html">JOBS BASED RECRUITERS</a>	 
  						</div>
				</div>        			
       			<div class="dropdown">
 				    <button class="dropbtn">LOGIN</button>
  						<div class="dropdown-content">
    						<a href="http://localhost/CANDIDATE/loginform.html">CANDIDATE LOGIN</a>
    						<a href="http://localhost/CANDIDATE/candid_%20registform.html">CANDIDATE REGISTER</a>	 
  						</div>
				</div>		
       			<div class="dropdown">
 				    <button class="dropbtn">FOR EMPLOYER</button>
  						<div class="dropdown-content">
    						<a href="http://localhost/EMPLOYER/companylogin.html">EMPLOYER LOGIN</a>
    						<a href="http://localhost/EMPLOYER/companyform.html">EMPLOYER REGISTER</a>	 
  						</div>
				</div>       	
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

	$company=$_GET['link'];
	$res=mysqli_query($con,"SELECT * FROM JOBPOST where COMPANY='$company'");

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
						echo "<button type='submit' class='block'>APPLY</button>";
						/*echo"<input type='submit' value='APPLY' name='$com'>";*/
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