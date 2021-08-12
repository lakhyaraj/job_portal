
<html>
<head>
	<title>ADMIN LOGIN</title>
</head>
<body>
<?php
	$email=$_POST['eid'];
	$pass=$_POST['pwd'];

	if ($email=='admin' && $pass=='admin') {

		header('Location:adminmain.php');


	}

?>
</body>
</html>