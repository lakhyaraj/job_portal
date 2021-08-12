<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
</style>
</head>
<body>
<header>
  
</header>
<main>
  <section>
<div class="split left">
  <div class="centered">
    <a href="admin1.php"><img src="img_avatar2.png" alt="Avatar woman"></a>
    <h2>LIST OF REGISTERED CANDIDATES</h2>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <a href="admin2.php"><img src="img_avatar.png" alt="Avatar man"></a>
    <h2>LIST OF REGISTERED COMAPANIES</h2>
  </div>
</div>
</section>
</main>
<footer>
  
</footer>     
</body>
</html> 
