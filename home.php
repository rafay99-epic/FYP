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
     <h1>Hello, <?php echo $_SESSION['manager_name']; ?></h1>
     <a href="logout.php">Logout</a>
     <br>
     <a href="signup.php">Add User</a>
     <br>
     <a href="display.php">View & Update User Data</a>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>