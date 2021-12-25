<?php 
session_start();

if (isset($_SESSION['manager_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <div class="container">
          <h1 class="home_heading" style="color: black;">Hello, <?php echo $_SESSION['manager_name']; ?></h1>
          <a href="display.php">View & Update User Data</a>
          <a href="view-status.php">View Parking Status</a>
          <a href="logout.php">Logout</a>
          <a href="signup.php">Add User</a>
     </div>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>